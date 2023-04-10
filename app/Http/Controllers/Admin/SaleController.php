<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Models\Customer;
use App\Models\SaleInvoice;
use Illuminate\Support\Str;
use App\Mail\sendOrderEmail;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Models\SaleInvoiceProduct;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class SaleController extends Controller
{

    protected $dataTable;

    public function __construct(Datatables $dataTable)
    {
        $this->dataTable = $dataTable;
    }
    public function index()
    {

        return view('admin.sales.index');
    }


    public function data(Request $request)
    {

        $query = SaleInvoice::with('Customer','user')->orderBY('id', 'DESC')->select();

        return $this->dataTable->eloquent($query)
            ->escapeColumns([])
            // ->addColumn('cost', function (SaleInvoice $item) {
            //     return $item?->Customer?->cost;
            //     // return "";
            // })

            ->addColumn('create_by', function (SaleInvoice $item) {
                return $item?->user?->name;
                // return "";

            })
            ->addColumn('name', function (SaleInvoice $item) {
                return $item?->Customer?->name;
                // return "";

            })

            ->rawColumns(['name','create_by'])

            // ->filterColumn('ending', function ($item, $keyword) {
            //     $item->whereHas('adsDurationCost', function ($item) use ($keyword) {
            //         $item->where('date', 'LIKE', "%{$keyword}%");
            //     });
            // })
            ->filterColumn('name', function ($item, $keyword) {
                $item->whereHas('Customer', function ($item) use ($keyword) {
                    $item->where('name', 'LIKE', "%{$keyword}%");
                });
            })
            ->addColumn('action', function ($item) {

                $html = "";
                $html .= '<td><a href="' . route('sales-invoice.edit', $item->id) . '" class="btn btn-primary d-none d-sm-inline-block">Edit</a></td> ';
                $html .= ' <td><a href="' . route('sales-invoice.show', $item->id) . '" class="btn btn-primary d-none d-sm-inline-block">View</a></td> ';
                $html .= ' <td><a href="' . route('sales-invoice.email', $item->id) . '" class="btn btn-primary d-none d-sm-inline-block">Send Mail</a></td> ';
                return $html;
            })

            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $customers = Customer::all();
        $products = Product::where('status', '0')->get();
        return view('admin.sales.create', compact('customers', 'products'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request->all();
        DB::beginTransaction();
        try {
            $saleInvoice = new  SaleInvoice();
            $saleInvoice->customer_id = $request->customer_id;
            $saleInvoice->invoice_no = Str::random(8);
            $saleInvoice->unit_price = $request->unit_price;
            $saleInvoice->total_price = $request->total_price;
            $saleInvoice->payment_date = $request->payment_date;
            $saleInvoice->create_by = Auth::user()->id;
            $saleInvoice->save();

            foreach ($request->product_id as $id) {
                SaleInvoiceProduct::create([
                    'sale_invoice_id' => $saleInvoice->id,
                    'product_id' => $id,
                    'unit_price' => $request->unit_price,
                ]);
                $product =Product::find($id);
                $product->status = 1;
                $product->update();
            }

            DB::commit();
            toast('Successfully Created!','success');
            return redirect()->route('sales-invoice.index')->with('message', 'Successfully Created');
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
            return redirect()->route('sales-invoice.index')->with('message', 'Error');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $saleInvoice = SaleInvoice::with('Customer', 'sales_product.product')->find($id);

        return view('admin.sales.invoice', compact('saleInvoice'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $saleInvoice = SaleInvoice::with('Customer', 'sales_product.product')->find($id);

        $previousids=$saleInvoice->sales_product()?->pluck('product_id')->toArray();
        $customers = Customer::all();
        $products = Product::whereIn('id', $previousids)
        ->where('status', '1')
        ->orWhere('status', '0')
        ->get();

        return view('admin.sales.edit', compact('customers', 'products','saleInvoice'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        DB::beginTransaction();
        try {
            $saleInvoice = SaleInvoice::find($id);
            $saleInvoice->customer_id = $request->customer_id;
            $saleInvoice->unit_price = $request->unit_price;
            $saleInvoice->total_price = $request->total_price;
            $saleInvoice->payment_date = $request->payment_date;
            $saleInvoice->update();

            $saleInvoiceProduct=SaleInvoiceProduct::where('sale_invoice_id',$id)->get();


            foreach ($saleInvoiceProduct as $product) {
                $product =Product::find($product->product_id);
                if ($product) {
                $product->status = 0;
                $product->update();
                }
            }

            SaleInvoiceProduct::where('sale_invoice_id',$id)->delete();
            foreach ($request->product_id as $id) {
                SaleInvoiceProduct::create([
                    'sale_invoice_id' => $saleInvoice->id,
                    'product_id' => $id,
                    'unit_price' => $request->unit_price,
                ]);
                $product =Product::find($id);
                $product->status = 1;
                $product->update();
            }

            DB::commit();
            toast('Successfully Created!','success');
            return redirect()->route('sales-invoice.index')->with('message', 'Successfully Updated');
        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect()->route('sales-invoice.index')->with('message', 'Error');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function sendEmail($id)
    {

        $saleInvoice = SaleInvoice::with('Customer', 'sales_product.product')->find($id);
        $cutomerEmail=$saleInvoice->customer->email;

        // foreach ($saleInvoice->sales_product as $product){

        // }
        $mailData = $saleInvoice->sales_product;

        // $mailData = [
        //     'title' => 'Mail from ZaitunSoft',
        //     'body' => 'This is for testing email using smtp.'
        // ];

        // return view('admin.sales.email.email', compact('mailDatas'));

        Mail::to($cutomerEmail)->send(new sendOrderEmail($mailData));
        alert()->success('Email','Email send successfully');
        return redirect()->route('sales-invoice.index')->with('message', 'Email send successfully');
    }
}
