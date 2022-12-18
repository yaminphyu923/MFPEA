<?php

namespace App\Http\Controllers\WaterTests;

use Exception;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\WaterTests\Wtfcar0502;
use App\Models\WaterTests\Wtfcar0502Finance;

class Wtfcar0502Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:F-CAR-05-02(Water Test)', ['only' => ['create']]);
    }
    public function index()
    {
        $fches = Wtfcar0502::all();
        return view('backend.labs.water_tests.wtfcar0502s.show',compact('fches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.labs.water_tests.wtfcar0502s.create');
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
            $fche = new Wtfcar0502;

            if($request->file("sign")) {
                $file=$request->file("sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/wt_wtfcar0502s');
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
            $fche->total_para = $request->total_para;
            $fche->total_method = $request->total_method;
            $fche->total_result = $request->total_result;
            $fche->calcium_para = $request->calcium_para;
            $fche->calcium_method = $request->calcium_method;
            $fche->calcium_result = $request->calcium_result;
            $fche->magnesium_para = $request->magnesium_para;
            $fche->magnesium_method = $request->magnesium_method;
            $fche->magnesium_result = $request->magnesium_result;
            $fche->solid_para = $request->solid_para;
            $fche->solid_method = $request->solid_method;
            $fche->solid_result = $request->solid_result;
            $fche->dissolved_para = $request->dissolved_para;
            $fche->dissolved_method = $request->dissolved_method;
            $fche->dissolved_result = $request->dissolved_result;
            $fche->suspended_para = $request->suspended_para;
            $fche->suspended_method = $request->suspended_method;
            $fche->suspended_result = $request->suspended_result;
            $fche->ph_para = $request->ph_para;
            $fche->ph_method = $request->ph_method;
            $fche->ph_result = $request->ph_result;
            $fche->conductivity_para = $request->conductivity_para;
            $fche->conductivity_method = $request->conductivity_method;
            $fche->conductivity_result = $request->conductivity_result;
            $fche->remark = $request->remark;
            $fche->name = $request->name;
            $fche->position = $request->position;
            $fche->check1 = $request->check1;
            $fche->check2 = $request->check2;
            $fche->save();

            if($fche)
            {
                $fche_finance = new Wtfcar0502Finance;
                $fche_finance->wtfcar0502_id = $fche->id;
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
        $che = Wtfcar0502::find($id);
        return view('backend.labs.water_tests.wtfcar0502s.detail',compact('che'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $che = Wtfcar0502::find($id);
        return view('backend.labs.water_tests.wtfcar0502s.edit',compact('che'));
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
            $fche = Wtfcar0502::find($id);
            if($fche->sign != null && $request->file("sign")){
                if(file_exists(public_path('photos/wt_wtfcar0502s/'.$fche->sign))){

                    unlink('photos/wt_wtfcar0502s/'.$fche->sign);

                }
            }

            if($request->file("sign")) {
                $file=$request->file("sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/wt_wtfcar0502s');
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
            $fche->total_para = $request->total_para;
            $fche->total_method = $request->total_method;
            $fche->total_result = $request->total_result;
            $fche->calcium_para = $request->calcium_para;
            $fche->calcium_method = $request->calcium_method;
            $fche->calcium_result = $request->calcium_result;
            $fche->magnesium_para = $request->magnesium_para;
            $fche->magnesium_method = $request->magnesium_method;
            $fche->magnesium_result = $request->magnesium_result;
            $fche->solid_para = $request->solid_para;
            $fche->solid_method = $request->solid_method;
            $fche->solid_result = $request->solid_result;
            $fche->dissolved_para = $request->dissolved_para;
            $fche->dissolved_method = $request->dissolved_method;
            $fche->dissolved_result = $request->dissolved_result;
            $fche->suspended_para = $request->suspended_para;
            $fche->suspended_method = $request->suspended_method;
            $fche->suspended_result = $request->suspended_result;
            $fche->ph_para = $request->ph_para;
            $fche->ph_method = $request->ph_method;
            $fche->ph_result = $request->ph_result;
            $fche->conductivity_para = $request->conductivity_para;
            $fche->conductivity_method = $request->conductivity_method;
            $fche->conductivity_result = $request->conductivity_result;
            $fche->remark = $request->remark;
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
        $che = Wtfcar0502::find($id);

        if($che->sign != null){
            if(file_exists(public_path('photos/wt_wtfcar0502s/'.$che->sign))){

                unlink('photos/wt_wtfcar0502s/'.$che->sign);

            }
        }

        Wtfcar0502::where('id',$id)->delete();
        Wtfcar0502Finance::where('wtfcar0502_id',$id)->delete();

        return back()->with('success', 'Deleted successfully!');
    }

    public function print($id)
    {
        $che = Wtfcar0502::find($id);
        return view('backend.labs.water_tests.wtfcar0502s.print',compact('che'));
    }
}
