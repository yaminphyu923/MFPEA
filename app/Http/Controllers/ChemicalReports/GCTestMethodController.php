<?php

namespace App\Http\Controllers\ChemicalReports;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ChemicalReports\GcTestMethod;

class GCTestMethodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gc_methods = GcTestMethod::get();
        return view('backend.labs.chemical_reports.gcs.gc_test_methods.index',compact('gc_methods'));
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
        $gc = new GcTestMethod;
        $gc->name = $request->name;
        $gc->save();
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
        $gc = GcTestMethod::find($id);
        $gc->name = $request->name;
        $gc->save();
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
        GcTestMethod::where('id',$id)->delete();
        return back()->with('success','Test Method Deleted Successfully!');
    }
}
