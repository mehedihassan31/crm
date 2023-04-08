<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\Datatables\Datatables;
use App\Mail\sendOrderEmail;
use App\Models\SaleInvoice;
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

        // return $query = SaleInvoice::with('Customer')->orderBY('id', 'DESC')->get();
        return view('admin.sales.index');
    }


    public function data(Request $request)
    {

        $query = SaleInvoice::with('Customer')->orderBY('id', 'DESC')->select();

            return $this->dataTable->eloquent($query)
                ->escapeColumns([])
                // ->addColumn('cost', function (SaleInvoice $item) {
                //     return $item?->Customer?->cost;
                //     // return "";
                // })

                // ->addColumn('duration', function (SaleInvoice $item) {
                //     return $item?->Customer?->duration;
                //     // return "";

                // })
                ->addColumn('name', function (SaleInvoice $item) {
                    return $item?->Customer?->name;
                    // return "";

                })

                ->rawColumns(['name'])

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
                    $html .= ' <td><a href="' . route('sales-invoice.show', $item->id) . '" class="btn btn-primary d-none d-sm-inline-block">View</a></td>';
                    return $html;
                })

                ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $saleInvoice = SaleInvoice::with('Customer','sales_product')->find($id);
        return view('admin.sales.invoice',compact('saleInvoice'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function email(){

        $mailData = [
            'title' => 'Mail from ItSolutionStuff.com',
            'body' => 'This is for testing email using smtp.'
        ];

        Mail::to('your_email@gmail.com')->send(new sendOrderEmail($mailData));

        dd("Email is sent successfully.");


    }
}
