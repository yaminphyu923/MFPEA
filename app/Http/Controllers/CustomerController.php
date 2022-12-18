<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Exports\CustomersExport;
use App\Imports\CustomersImport;
use Maatwebsite\Excel\Facades\Excel;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:customer-list|customer-create|customer-edit|customer-delete|customer-excel', ['only' => ['index','show']]);
         $this->middleware('permission:customer-create', ['only' => ['create','store']]);
         $this->middleware('permission:customer-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:customer-delete', ['only' => ['destroy']]);
         $this->middleware('permission:customer-excel', ['only' => ['customerExport','customerImport']]);
    }

    public function index()
    {
        $customers = Customer::all();
        return view('backend.customers.index',compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

            $customer = new Customer;
            $customer->name = $request->name;
            $customer->phone = $request->phone;
            $customer->address = $request->address;
            $customer->email = $request->email;
            $customer->company_name = $request->company_name;
            $customer->product_name = $request->product_name;
            $customer->save();

            return redirect()->back()
                ->with('success', 'Customer Create Successfully!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer = Customer::find($id);
        return view('backend.customers.edit',compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

            $customer = Customer::find($id);
            $customer->name = $request->name;
            $customer->phone = $request->phone;
            $customer->address = $request->address;
            $customer->email = $request->email;
            $customer->company_name = $request->company_name;
            $customer->product_name = $request->product_name;
            $customer->save();

            return redirect()->route('customers.index')
                ->with('success', 'Customer Update Successfully!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Customer::where('id',$id)->delete();
        return redirect()->back()
                ->with('success', 'Customer Delete Successfully!');
    }

    public function customerExport(Request $request){
        return Excel::download(new CustomersExport, 'customers.xlsx');
    }

    public function customerImport(Request $request)
    {
        $customer_excel = $request->customer_excel;
        Excel::import(new CustomersImport,$customer_excel);
        return redirect()->back()->with('success', 'Excel Import is successful!');;
    }
}
