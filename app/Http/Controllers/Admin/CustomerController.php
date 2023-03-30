<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\API\CustomersCheck;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customersInfo=CustomersCheck::paginate(10);
        return view('admin.customers.index',compact('customersInfo'));
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
        $customersInfo=CustomersCheck::find($id);
        return view('admin.customers.show',compact('$data'));
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
