<?php

namespace App\Http\Controllers\ChemicalReports;

use Exception;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ChemicalReports\NutritionAnalysis;

class NutritionAnalysisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:nutrition_analysis_test_report', ['only' => ['create']]);
    }

    public function index()
    {
        $nutritions = NutritionAnalysis::get();
        return view('backend.labs.chemical_reports.nutrition_analyses.index',compact('nutritions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.labs.chemical_reports.nutrition_analyses.create');
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
            $nutrition = new NutritionAnalysis;

            if($request->file("sign")) {
                $file=$request->file("sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/cr_nutritions');
                $file->move($path, $filename);

                $nutrition->sign = $filename;
            }

            $nutrition->title = $request->title;
            $nutrition->company_name = $request->company_name;
            $nutrition->address = $request->address;
            $nutrition->phone = $request->phone;
            $nutrition->lab_received_date = $request->lab_received_date;
            $nutrition->sample_number = $request->sample_number;
            $nutrition->product_name = $request->product_name;
            $nutrition->test_performed_date = $request->test_performed_date;
            $nutrition->test_type = $request->test_type;
            $nutrition->issue_date = $request->issue_date;
            $nutrition->results = $request->results;
            $nutrition->moisture_para = $request->moisture_para;
            $nutrition->moisture_method = $request->moisture_method;
            $nutrition->moisture_result = $request->moisture_result;
            $nutrition->ash_para = $request->ash_para;
            $nutrition->ash_method = $request->ash_method;
            $nutrition->ash_result = $request->ash_result;
            $nutrition->protein_para = $request->protein_para;
            $nutrition->protein_method = $request->protein_method;
            $nutrition->protein_result = $request->protein_result;
            $nutrition->fiber_para = $request->fiber_para;
            $nutrition->fiber_method = $request->fiber_method;
            $nutrition->fiber_result = $request->fiber_result;
            $nutrition->fat_para = $request->fat_para;
            $nutrition->fat_method = $request->fat_method;
            $nutrition->fat_result = $request->fat_result;
            $nutrition->carbo_para = $request->carbo_para;
            $nutrition->carbo_method = $request->carbo_method;
            $nutrition->carbo_result = $request->carbo_result;
            $nutrition->energy_para = $request->energy_para;
            $nutrition->energy_method = $request->energy_method;
            $nutrition->energy_result = $request->energy_result;
            $nutrition->sodium_para = $request->sodium_para;
            $nutrition->sodium_method = $request->sodium_method;
            $nutrition->sodium_result = $request->sodium_result;
            $nutrition->method = $request->method;
            $nutrition->date = $request->date;
            $nutrition->checked_name = $request->checked_name;
            $nutrition->position = $request->position;
            $nutrition->save();

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
        $nutrition = NutritionAnalysis::find($id);
        return view('backend.labs.chemical_reports.nutrition_analyses.detail',compact('nutrition'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $nutrition = NutritionAnalysis::find($id);
        return view('backend.labs.chemical_reports.nutrition_analyses.edit',compact('nutrition'));
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
            $nutrition = NutritionAnalysis::find($id);

            if($nutrition->sign != null && $request->file("sign")){
                if(file_exists(public_path('photos/cr_nutritions/'.$nutrition->sign))){

                    unlink('photos/cr_nutritions/'.$nutrition->sign);

                }
            }

            if($request->file("sign")) {
                $file=$request->file("sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/cr_nutritions');
                $file->move($path, $filename);

                $nutrition->sign = $filename;
            }

            $nutrition->title = $request->title;
            $nutrition->company_name = $request->company_name;
            $nutrition->address = $request->address;
            $nutrition->phone = $request->phone;
            $nutrition->lab_received_date = $request->lab_received_date;
            $nutrition->sample_number = $request->sample_number;
            $nutrition->product_name = $request->product_name;
            $nutrition->test_performed_date = $request->test_performed_date;
            $nutrition->test_type = $request->test_type;
            $nutrition->issue_date = $request->issue_date;
            $nutrition->results = $request->results;
            $nutrition->moisture_para = $request->moisture_para;
            $nutrition->moisture_method = $request->moisture_method;
            $nutrition->moisture_result = $request->moisture_result;
            $nutrition->ash_para = $request->ash_para;
            $nutrition->ash_method = $request->ash_method;
            $nutrition->ash_result = $request->ash_result;
            $nutrition->protein_para = $request->protein_para;
            $nutrition->protein_method = $request->protein_method;
            $nutrition->protein_result = $request->protein_result;
            $nutrition->fiber_para = $request->fiber_para;
            $nutrition->fiber_method = $request->fiber_method;
            $nutrition->fiber_result = $request->fiber_result;
            $nutrition->fat_para = $request->fat_para;
            $nutrition->fat_method = $request->fat_method;
            $nutrition->fat_result = $request->fat_result;
            $nutrition->carbo_para = $request->carbo_para;
            $nutrition->carbo_method = $request->carbo_method;
            $nutrition->carbo_result = $request->carbo_result;
            $nutrition->energy_para = $request->energy_para;
            $nutrition->energy_method = $request->energy_method;
            $nutrition->energy_result = $request->energy_result;
            $nutrition->sodium_para = $request->sodium_para;
            $nutrition->sodium_method = $request->sodium_method;
            $nutrition->sodium_result = $request->sodium_result;
            $nutrition->method = $request->method;
            $nutrition->date = $request->date;
            $nutrition->checked_name = $request->checked_name;
            $nutrition->position = $request->position;
            $nutrition->save();

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
        $nutrition = NutritionAnalysis::find($id);
        if($nutrition->sign != null){
            if(file_exists(public_path('photos/cr_nutritions/'.$nutrition->sign))){

                unlink('photos/cr_nutritions/'.$nutrition->sign);

            }
        }

        NutritionAnalysis::where('id',$id)->delete();

        return back()->with('success', 'Deleted successfully!');
    }

    public function print($id)
    {
        $nutrition = NutritionAnalysis::find($id);
        return view('backend.labs.chemical_reports.nutrition_analyses.print',compact('nutrition'));
    }
}
