<?php

namespace App\Http\Controllers\Others;

use Exception;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Models\Others\Fche040028;
use App\Http\Controllers\Controller;
use App\Models\Others\Fche040028Test;
use App\Models\Others\Fche040028Finance;

class Fche040028Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:FIDSL-Che-04-00/28', ['only' => ['create']]);
    }

    public function index()
    {
        $fche040028s = Fche040028::all();
        return view('backend.labs.others.fche040028s.show',compact('fche040028s'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.labs.others.fche040028s.create');
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
            $m = new Fche040028;

            if($request->file("analysed_sign")) {
                $file=$request->file("analysed_sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/other_fche040028s/analysed_sign');
                $file->move($path, $filename);

                $m->analysed_sign = $filename;
            }

            if($request->file("checked_sign")) {
                $file=$request->file("checked_sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/other_fche040028s/checked_sign');
                $file->move($path, $filename);

                $m->checked_sign = $filename;
            }

            $m->job_number = $request->job_number;
            $m->sample_name = $request->sample_name;
            $m->customer_id = $request->customer_id;
            $m->received_date = $request->received_date;
            $m->initiated_date = $request->initiated_date;
            $m->reported_date = $request->reported_date;
            $m->method = $request->method;
            $m->sample = $request->sample;
            $m->sample_test1 = $request->sample_test1;
            $m->sample_test2 = $request->sample_test2;
            $m->water = $request->water;
            $m->water_test1 = $request->water_test1;
            $m->water_test2 = $request->water_test2;
            $m->first_boiling = $request->first_boiling;
            $m->first_boiling_test1 = $request->first_boiling_test1;
            $m->first_boiling_test2 = $request->first_boiling_test2;
            $m->second_boiling = $request->second_boiling;
            $m->second_boiling_test1 = $request->second_boiling_test1;
            $m->second_boiling_test2 = $request->second_boiling_test2;
            $m->makeup = $request->makeup;
            $m->makeup_test1 = $request->makeup_test1;
            $m->makeup_test2 = $request->makeup_test2;
            $m->taken = $request->taken;
            $m->taken_test1 = $request->taken_test1;
            $m->taken_test2 = $request->taken_test2;
            $m->residue = $request->residue;
            $m->residue_test1 = $request->residue_test1;
            $m->residue_test2 = $request->residue_test2;
            $m->filtrated = $request->filtrated;
            $m->filtrated_test1 = $request->filtrated_test1;
            $m->filtrated_test2 = $request->filtrated_test2;
            $m->extractive_cal = $request->extractive_cal;
            $m->extractive_cal_test1 = $request->extractive_cal_test1;
            $m->extractive_cal_test2 = $request->extractive_cal_test2;
            $m->result = $request->result;
            $m->result_test1 = $request->result_test1;
            $m->result_test2 = $request->result_test2;
            $m->extractive = $request->extractive;
            $m->extractive_test1 = $request->extractive_test1;
            $m->extractive_test2 = $request->extractive_test2;
            $m->analysed_name = $request->analysed_name;
            $m->analysed_date = $request->analysed_date;
            $m->checked_name = $request->checked_name;
            $m->checked_date = $request->checked_date;
            $m->save();

            if($m)
            {

                $m_finance = new Fche040028Finance;
                $m_finance->fche040028_id = $m->id;
                $m_finance->save();

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
        $fche040028 = Fche040028::find($id);
        return view('backend.labs.others.fche040028s.detail',compact('fche040028'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fche040028 = Fche040028::find($id);

        return view('backend.labs.others.fche040028s.edit',compact('fche040028'));
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
            $m = Fche040028::find($id);

            if($m->analysed_sign != null && $request->file("analysed_sign")){
                if(file_exists(public_path('photos/other_fche040028s/analysed_sign/'.$m->analysed_sign))){

                    unlink('photos/other_fche040028s/analysed_sign/'.$m->analysed_sign);

                }
            }

            if($m->checked_sign != null && $request->file("checked_sign")){
                if(file_exists(public_path('photos/other_fche040028s/checked_sign/'.$m->checked_sign))){

                    unlink('photos/other_fche040028s/checked_sign/'.$m->checked_sign);

                }
            }

            if($request->file("analysed_sign")) {
                $file=$request->file("analysed_sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/other_fche040028s/analysed_sign');
                $file->move($path, $filename);

                $m->analysed_sign = $filename;
            }

            if($request->file("checked_sign")) {
                $file=$request->file("checked_sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/other_fche040028s/checked_sign');
                $file->move($path, $filename);

                $m->checked_sign = $filename;
            }

            $m->job_number = $request->job_number;
            $m->sample_name = $request->sample_name;
            $m->customer_id = $request->customer_id;
            $m->received_date = $request->received_date;
            $m->initiated_date = $request->initiated_date;
            $m->reported_date = $request->reported_date;
            $m->method = $request->method;
            $m->sample = $request->sample;
            $m->sample_test1 = $request->sample_test1;
            $m->sample_test2 = $request->sample_test2;
            $m->water = $request->water;
            $m->water_test1 = $request->water_test1;
            $m->water_test2 = $request->water_test2;
            $m->first_boiling = $request->first_boiling;
            $m->first_boiling_test1 = $request->first_boiling_test1;
            $m->first_boiling_test2 = $request->first_boiling_test2;
            $m->second_boiling = $request->second_boiling;
            $m->second_boiling_test1 = $request->second_boiling_test1;
            $m->second_boiling_test2 = $request->second_boiling_test2;
            $m->makeup = $request->makeup;
            $m->makeup_test1 = $request->makeup_test1;
            $m->makeup_test2 = $request->makeup_test2;
            $m->taken = $request->taken;
            $m->taken_test1 = $request->taken_test1;
            $m->taken_test2 = $request->taken_test2;
            $m->residue = $request->residue;
            $m->residue_test1 = $request->residue_test1;
            $m->residue_test2 = $request->residue_test2;
            $m->filtrated = $request->filtrated;
            $m->filtrated_test1 = $request->filtrated_test1;
            $m->filtrated_test2 = $request->filtrated_test2;
            $m->extractive_cal = $request->extractive_cal;
            $m->extractive_cal_test1 = $request->extractive_cal_test1;
            $m->extractive_cal_test2 = $request->extractive_cal_test2;
            $m->result = $request->result;
            $m->result_test1 = $request->result_test1;
            $m->result_test2 = $request->result_test2;
            $m->extractive = $request->extractive;
            $m->extractive_test1 = $request->extractive_test1;
            $m->extractive_test2 = $request->extractive_test2;
            $m->analysed_name = $request->analysed_name;
            $m->analysed_date = $request->analysed_date;
            $m->checked_name = $request->checked_name;
            $m->checked_date = $request->checked_date;
            $m->save();
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
        $m = Fche040028::find($id);

        if($m->analysed_sign != null){
            if(file_exists(public_path('photos/other_fche040028s/analysed_sign/'.$m->analysed_sign))){

                unlink('photos/other_fche040028s/analysed_sign/'.$m->analysed_sign);

            }
        }

        if($m->checked_sign != null){
            if(file_exists(public_path('photos/other_fche040028s/checked_sign/'.$m->checked_sign))){

                unlink('photos/other_fche040028s/checked_sign/'.$m->checked_sign);

            }
        }

        Fche040028::where('id',$id)->delete();
        Fche040028Finance::where('fche040028_id',$id)->delete();

        return back()->with('success', 'Deleted successfully!');
    }

    public function print($id)
    {
        $fche040028 = Fche040028::find($id);
        return view('backend.labs.others.fche040028s.print',compact('fche040028'));
    }
}
