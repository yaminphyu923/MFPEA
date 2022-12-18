<?php

namespace App\Http\Controllers\ChemicalReports;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ChemicalReports\NutritionTestParameter;

class NutritionTestParameterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nutrition_tests = NutritionTestParameter::get();
        return view('backend.labs.chemical_reports.nutrition_analyses.nutrition_test_parameters.index',compact('nutrition_tests'));
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
        $test = new NutritionTestParameter;
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
        $test = NutritionTestParameter::find($id);
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
        NutritionTestParameter::where('id',$id)->delete();
        return back()->with('success','Test Parameter Deleted Successfully!');
    }
}
