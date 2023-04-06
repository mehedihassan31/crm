<?php

namespace App\Http\Controllers\Admin;
use App\Models\Product;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */


    protected $dataTable;

    public function __construct(Datatables $dataTable)
    {
        $this->dataTable = $dataTable;
    }

    public function index()
    {
        // $customersInfo=CustomersCheck::paginate(10);
        return view('admin.products.index');
    }

    /**
     * Show the form for creating a new resource.
     */


    public function data(Request $request)
    {

        $query = Product::orderBY('id', 'DESC')->select();
        return $this->dataTable->eloquent($query)
            ->escapeColumns([])

            ->editColumn('status', function ($item) {
                $html = "";
                $html .= '<td>';
                if ($item->status == 0) {
                    $html .= '<span class="badge bg-warning me-1"></span> Unsold';
                }
                if ($item->status == 1) {
                    $html .= '<span class="badge bg-danger me-1"></span> Sold';
                }

                $html .= '</td>';
                return $html;
            })

            ->addColumn('action', function ($item) {

                $html = "";
                $html .= '<td><a href="' . route('products.show', $item->id) . '" class="btn btn-primary d-none d-sm-inline-block">Details</a></td>';
                return $html;
            })

            ->make(true);
    }


    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|string',
            'email' =>'email:rfc,dns|unique:products,email',
            'payoneer_password' => 'required|string',
            'email_password' => 'required|string',
            'recovery_email' =>'email:rfc,dns',
            'f_image_link' => 'required|string',
            's_image_link' => 'required|string',
            'phone' => 'nullable|numeric',
            'security_qsn_ans' => 'nullable|string',
            'add_info' => 'nullable|string',
        ]);


        try {
            $product = new Product();
            $product->fill($request->except(['_token']));
            $product->user_id=Auth::user()->id;
            $product->save();


            return redirect()->route('products.index')->with('message', 'Successfully Created');

        } catch (\Throwable $th) {
            throw $th;
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product=Product::find($id);
        return view('admin.products.show',compact('product'));
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
}
