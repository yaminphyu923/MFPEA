<?php

namespace App\Http\Controllers\ChemicalReports;

use Exception;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ChemicalReports\HeavyMetal;

class HeavyMetalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:heavy_metals_and_essential_minerals_test_report', ['only' => ['create']]);
    }

    public function index()
    {
        $heavy_metals = HeavyMetal::get();
        return view('backend.labs.chemical_reports.heavy_metals.index',compact('heavy_metals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.labs.chemical_reports.heavy_metals.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $heavy_metal = new HeavyMetal;

            if($request->file("sign")) {
                $file=$request->file("sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/cr_heavy_metals');
                $file->move($path, $filename);

                $heavy_metal->sign = $filename;
            }

            $heavy_metal->title = $request->title;
            $heavy_metal->company_name = $request->company_name;
            $heavy_metal->address = $request->address;
            $heavy_metal->phone = $request->phone;
            $heavy_metal->lab_received_date = $request->lab_received_date;
            $heavy_metal->sample_number = $request->sample_number;
            $heavy_metal->product_name = $request->product_name;
            $heavy_metal->test_performed_date = $request->test_performed_date;
            $heavy_metal->test_type = $request->test_type;
            $heavy_metal->issue_date = $request->issue_date;
            $heavy_metal->results = $request->results;
            $heavy_metal->as_para = $request->as_para;
            $heavy_metal->as_method = $request->as_method;
            $heavy_metal->as_result = $request->as_result;
            $heavy_metal->as_unit = $request->as_unit;
            $heavy_metal->as_limit = $request->as_limit;
            $heavy_metal->pb_para = $request->pb_para;
            $heavy_metal->pb_method = $request->pb_method;
            $heavy_metal->pb_result = $request->pb_result;
            $heavy_metal->pb_unit = $request->pb_unit;
            $heavy_metal->pb_limit = $request->pb_limit;
            $heavy_metal->cu_para = $request->cu_para;
            $heavy_metal->cu_method = $request->cu_method;
            $heavy_metal->cu_result = $request->cu_result;
            $heavy_metal->cu_unit = $request->cu_unit;
            $heavy_metal->cu_limit = $request->cu_limit;
            $heavy_metal->zn_para = $request->zn_para;
            $heavy_metal->zn_method = $request->zn_method;
            $heavy_metal->zn_result = $request->zn_result;
            $heavy_metal->zn_unit = $request->zn_unit;
            $heavy_metal->zn_limit = $request->zn_limit;
            $heavy_metal->hg_para = $request->hg_para;
            $heavy_metal->hg_method = $request->hg_method;
            $heavy_metal->hg_result = $request->hg_result;
            $heavy_metal->hg_unit = $request->hg_unit;
            $heavy_metal->hg_limit = $request->hg_limit;
            $heavy_metal->method = $request->method;
            $heavy_metal->date = $request->date;
            $heavy_metal->checked_name = $request->checked_name;
            $heavy_metal->position = $request->position;
            $heavy_metal->save();

            return redirect()->back()
                ->with('success', 'Created successfully!');
        } catch (Exception $e){
            return redirect()->back()
                ->with('error', $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $heavy_metal = HeavyMetal::find($id);
        return view('backend.labs.chemical_reports.heavy_metals.detail',compact('heavy_metal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $heavy_metal = HeavyMetal::find($id);
        return view('backend.labs.chemical_reports.heavy_metals.edit',compact('heavy_metal'));
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
        try {
            $heavy_metal = HeavyMetal::find($id);

            if($heavy_metal->sign != null && $request->file("sign")){
                if(file_exists(public_path('photos/cr_heavy_metals/'.$heavy_metal->sign))){

                    unlink('photos/cr_heavy_metals/'.$heavy_metal->sign);

                }
            }

            if($request->file("sign")) {
                $file=$request->file("sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/cr_heavy_metals');
                $file->move($path, $filename);

                $heavy_metal->sign = $filename;
            }

            $heavy_metal->title = $request->title;
            $heavy_metal->company_name = $request->company_name;
            $heavy_metal->address = $request->address;
            $heavy_metal->phone = $request->phone;
            $heavy_metal->lab_received_date = $request->lab_received_date;
            $heavy_metal->sample_number = $request->sample_number;
            $heavy_metal->product_name = $request->product_name;
            $heavy_metal->test_performed_date = $request->test_performed_date;
            $heavy_metal->test_type = $request->test_type;
            $heavy_metal->issue_date = $request->issue_date;
            $heavy_metal->results = $request->results;
            $heavy_metal->as_para = $request->as_para;
            $heavy_metal->as_method = $request->as_method;
            $heavy_metal->as_result = $request->as_result;
            $heavy_metal->as_unit = $request->as_unit;
            $heavy_metal->as_limit = $request->as_limit;
            $heavy_metal->pb_para = $request->pb_para;
            $heavy_metal->pb_method = $request->pb_method;
            $heavy_metal->pb_result = $request->pb_result;
            $heavy_metal->pb_unit = $request->pb_unit;
            $heavy_metal->pb_limit = $request->pb_limit;
            $heavy_metal->cu_para = $request->cu_para;
            $heavy_metal->cu_method = $request->cu_method;
            $heavy_metal->cu_result = $request->cu_result;
            $heavy_metal->cu_unit = $request->cu_unit;
            $heavy_metal->cu_limit = $request->cu_limit;
            $heavy_metal->zn_para = $request->zn_para;
            $heavy_metal->zn_method = $request->zn_method;
            $heavy_metal->zn_result = $request->zn_result;
            $heavy_metal->zn_unit = $request->zn_unit;
            $heavy_metal->zn_limit = $request->zn_limit;
            $heavy_metal->hg_para = $request->hg_para;
            $heavy_metal->hg_method = $request->hg_method;
            $heavy_metal->hg_result = $request->hg_result;
            $heavy_metal->hg_unit = $request->hg_unit;
            $heavy_metal->hg_limit = $request->hg_limit;
            $heavy_metal->method = $request->method;
            $heavy_metal->date = $request->date;
            $heavy_metal->checked_name = $request->checked_name;
            $heavy_metal->position = $request->position;
            $heavy_metal->save();

            return redirect()->back()
                ->with('success', 'Updated successfully!');
        } catch (Exception $e){
            return redirect()->back()
                ->with('error', $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $heavy_metal = HeavyMetal::find($id);
        if($heavy_metal->sign != null){
            if(file_exists(public_path('photos/cr_heavy_metals/'.$heavy_metal->sign))){

                unlink('photos/cr_heavy_metals/'.$heavy_metal->sign);

            }
        }

        HeavyMetal::where('id',$id)->delete();

        return back()->with('success', 'Deleted successfully!');
    }

    public function print($id)
    {
        $heavy_metal = HeavyMetal::find($id);
        return view('backend.labs.chemical_reports.heavy_metals.print',compact('heavy_metal'));
    }
}
