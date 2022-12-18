<?php

namespace App\Http\Controllers\AlcoholAnalysis;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\AlcoholAnalysis\AlcoholFcar0501;
use App\Models\AlcoholAnalysis\AlcoholFcar0501Finance;

class AlcoholFcar0501Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:F-CAR-05-01(Alcohol Analysis)', ['only' => ['create']]);
    }
    public function index()
    {
        $fches = AlcoholFcar0501::all();
        return view('backend.labs.alcohol_analyses.aa_fcar0501s.show',compact('fches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.labs.alcohol_analyses.aa_fcar0501s.create');
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
            $fche = new AlcoholFcar0501;

            if($request->file("sign")) {
                $file=$request->file("sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/aa_fcar0501s');
                $file->move($path, $filename);

                $fche->sign = $filename;
            }

            $fche->job_number = $request->job_number;
            $fche->report_no = $request->report_no;
            $fche->sample_name = $request->sample_name;
            $fche->received_date = $request->received_date;
            $fche->analysis_date = $request->analysis_date;
            $fche->issue_date = $request->issue_date;
            $fche->result = $request->result;
            $fche->ace_para = $request->ace_para;
            $fche->ace_method = $request->ace_method;
            $fche->ace_result = $request->ace_result;
            $fche->ethyl_para = $request->ethyl_para;
            $fche->ethyl_method = $request->ethyl_method;
            $fche->ethyl_result = $request->ethyl_result;
            $fche->methanol_para = $request->methanol_para;
            $fche->methanol_method = $request->methanol_method;
            $fche->methanol_result = $request->methanol_result;
            $fche->propanol_para = $request->propanol_para;
            $fche->propanol_method = $request->propanol_method;
            $fche->propanol_result = $request->propanol_result;
            $fche->iso_para = $request->iso_para;
            $fche->iso_method = $request->iso_method;
            $fche->iso_result = $request->iso_result;
            $fche->methyl_para = $request->methyl_para;
            $fche->methyl_method = $request->methyl_method;
            $fche->methyl_result = $request->methyl_result;
            $fche->name = $request->name;
            $fche->position = $request->position;
            $fche->check1 = $request->check1;
            $fche->check2 = $request->check2;
            $fche->save();

            if($fche)
            {
                $fche_finance = new AlcoholFcar0501Finance;
                $fche_finance->alcohol_fcar0501_id = $fche->id;
                $fche_finance->save();

            }
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
        $che = AlcoholFcar0501::find($id);
        return view('backend.labs.alcohol_analyses.aa_fcar0501s.detail',compact('che'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $che = AlcoholFcar0501::find($id);
        return view('backend.labs.alcohol_analyses.aa_fcar0501s.edit',compact('che'));
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
            $fche = AlcoholFcar0501::find($id);
            if($fche->sign != null && $request->file("sign")){
                if(file_exists(public_path('photos/aa_fcar0501s/'.$fche->sign))){

                    unlink('photos/aa_fcar0501s/'.$fche->sign);

                }
            }

            if($request->file("sign")) {
                $file=$request->file("sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/aa_fcar0501s');
                $file->move($path, $filename);

                $fche->sign = $filename;
            }

            $fche->job_number = $request->job_number;
            $fche->report_no = $request->report_no;
            $fche->sample_name = $request->sample_name;
            $fche->received_date = $request->received_date;
            $fche->analysis_date = $request->analysis_date;
            $fche->issue_date = $request->issue_date;
            $fche->result = $request->result;
            $fche->ace_para = $request->ace_para;
            $fche->ace_method = $request->ace_method;
            $fche->ace_result = $request->ace_result;
            $fche->ethyl_para = $request->ethyl_para;
            $fche->ethyl_method = $request->ethyl_method;
            $fche->ethyl_result = $request->ethyl_result;
            $fche->methanol_para = $request->methanol_para;
            $fche->methanol_method = $request->methanol_method;
            $fche->methanol_result = $request->methanol_result;
            $fche->propanol_para = $request->propanol_para;
            $fche->propanol_method = $request->propanol_method;
            $fche->propanol_result = $request->propanol_result;
            $fche->iso_para = $request->iso_para;
            $fche->iso_method = $request->iso_method;
            $fche->iso_result = $request->iso_result;
            $fche->methyl_para = $request->methyl_para;
            $fche->methyl_method = $request->methyl_method;
            $fche->methyl_result = $request->methyl_result;
            $fche->name = $request->name;
            $fche->position = $request->position;
            $fche->check1 = $request->check1;
            $fche->check2 = $request->check2;
            $fche->save();

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
        $che = AlcoholFcar0501::find($id);

        if($che->sign != null){
            if(file_exists(public_path('photos/aa_fcar0501s/'.$che->sign))){

                unlink('photos/aa_fcar0501s/'.$che->sign);

            }
        }

        AlcoholFcar0501::where('id',$id)->delete();
        AlcoholFcar0501Finance::where('alcohol_fcar0501_id',$id)->delete();

        return back()->with('success', 'Deleted successfully!');
    }

    public function print($id)
    {
        $che = AlcoholFcar0501::find($id);
        return view('backend.labs.alcohol_analyses.aa_fcar0501s.print',compact('che'));
    }
}
