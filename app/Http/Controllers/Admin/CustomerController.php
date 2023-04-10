<?php

namespace App\Http\Controllers\Admin;

use App\Models\Customer;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Models\API\CustomersCheck;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

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

        $query = Customer::with('user')->orderBY('id', 'DESC')->select();
        return $this->dataTable->eloquent($query)
            ->escapeColumns([])

            ->addColumn('create_by', function (Customer $item) {
                return $item?->user?->name;

            })
            ->rawColumns(['create_by'])

            ->addColumn('action', function ($item) {

                $html = "";
                $html .= '<td><a href="' . route('customers.edit', $item->id) . '" class="btn btn-primary d-none d-sm-inline-block">Edit</a></td> ';
                $html .= ' <td><a href="' . route('customers.show', $item->id) . '" class="btn btn-primary d-none d-sm-inline-block">Details</a></td>';
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
            $customer->create_by = Auth::user()->id;
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
        $customer= Customer::find($id);
        return view('admin.customer.edit', compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string',
            'email' =>'email:rfc,dns',
            'phone' => 'required|numeric',
            'alt_phone' => 'nullable|numeric',
            'address' => 'nullable|string',
            'dob' => 'nullable',
            'image' => 'nullable|string',

        ]);

        // return $request->all();


        try {
            $customer=Customer::find($id);
            $customer->fill($request->except(['_token']));
            $customer->save();

            return redirect()->route('customers.index')->with('message', 'Successfully Created');

        } catch (\Throwable $th) {
            throw $th;
        }
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
