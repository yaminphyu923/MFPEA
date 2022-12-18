<?php

namespace App\Http\Controllers\ChemicalReports;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ChemicalReports\HeavyMetalTestParameter;

class HeavyMetalTestParameterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $heavy_metal_tests = HeavyMetalTestParameter::get();
        return view('backend.labs.chemical_reports.heavy_metals.heavy_metal_test_parameters.index',compact('heavy_metal_tests'));
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
        $test = new HeavyMetalTestParameter;
        $test->name = $request->name;
        $test->save();
        return back()->with('success','Test Parameter Created Successfully!');
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
        $test = HeavyMetalTestParameter::find($id);
        $test->name = $request->name;
        $test->save();
        return back()->with('success','Test Parameter Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        HeavyMetalTestParameter::where('id',$id)->delete();
        return back()->with('success','Test Parameter Deleted Successfully!');
    }
}
