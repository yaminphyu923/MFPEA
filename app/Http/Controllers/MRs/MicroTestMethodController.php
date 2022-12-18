<?php

namespace App\Http\Controllers\MRs;

use Illuminate\Http\Request;
use App\Models\MRs\MicroTestMethod;
use App\Http\Controllers\Controller;

class MicroTestMethodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $micro_methods = MicroTestMethod::get();
        return view('backend.labs.mrs.micro_test_parameters.micro_test_methods.index',compact('micro_methods'));
    }

    /**
     * Show the form for creating a new resource
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
        $test = new MicroTestMethod;
        $test->name = $request->name;
        $test->save();
        return back()->with('success','Test Method Created Successfully!');
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
        //
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
        $test = MicroTestMethod::find($id);
        $test->name = $request->name;
        $test->save();
        return back()->with('success','Test Method Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        MicroTestMethod::where('id',$id)->delete();
        return back()->with('success','Test Method Deleted Successfully!');
    }
}
