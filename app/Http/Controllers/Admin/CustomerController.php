<?php

namespace App\Http\Controllers\Admin;

use App\Models\Customer;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Models\API\CustomersCheck;
use App\Http\Controllers\Controller;

class CustomerController extends Controller
{
    protected $dataTable;

    public function __construct(Datatables $dataTable)
    {
        $this->dataTable = $dataTable;
    }
    public function index()
    {
        return view('admin.customer.index');
    }

    public function data(Request $request)
    {

        $query = Customer::orderBY('id', 'DESC')->select();
        return $this->dataTable->eloquent($query)
            ->escapeColumns([])

            // ->editColumn('status', function ($item) {
            //     $html = "";
            //     $html .= '<td>';
            //     if ($item->status == 0) {
            //         $html .= '<span class="badge bg-warning me-1"></span> Unsold';
            //     }
            //     if ($item->status == 1) {
            //         $html .= '<span class="badge bg-danger me-1"></span> Sold';
            //     }

            //     $html .= '</td>';
            //     return $html;
            // })

            ->addColumn('action', function ($item) {

                $html = "";
                $html .= '<td><a href="' . route('customers.show', $item->id) . '" class="btn btn-primary d-none d-sm-inline-block">Details</a></td>';
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
            'email' =>'email:rfc,dns|unique:customers,email',
            'phone' => 'required|numeric',
            'alt_phone' => 'nullable|numeric',
            'address' => 'nullable|string',
            'dob' => 'nullable',
            'image' => 'nullable|string',

        ]);

        // return $request->all();


        try {
            $customer = new Customer();
            $customer->fill($request->except(['_token']));
            $customer->save();

            return redirect()->route('customers.index')->with('message', 'Successfully Created');

        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $customer= Customer::find($id);
        return view('admin.customer.show', compact('customer'));
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

    public function updateStatus($id, Request $request)
    {
        $customer = CustomersCheck::findOrFail($id);
        $customer->is_active = $request->input('is_active');
        $customer->save();

        return response()->json(['message' => 'Status updated !']);
    }
}
