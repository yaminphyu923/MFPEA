<?php

namespace App\Http\Controllers\WaterTests;

use Exception;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\WaterTests\Fche040117;
use App\Models\WaterTests\Fche040117Finance;

class Fche040117Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:FIDSL-Che-04-01/17', ['only' => ['create']]);
    }
    public function index()
    {
        $fches = Fche040117::all();
        return view('backend.labs.water_tests.fche040117s.show',compact('fches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.labs.water_tests.fche040117s.create');
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
            $fche = new Fche040117;

            if($request->file("analysed_sign")) {
                $file=$request->file("analysed_sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/wt_fche040117s/analysed_sign');
                $file->move($path, $filename);

                $fche->analysed_sign = $filename;
            }

            if($request->file("checked_sign")) {
                $file=$request->file("checked_sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/wt_fche040117s/checked_sign');
                $file->move($path, $filename);

                $fche->checked_sign = $filename;
            }

            $fche->job_number = $request->job_number;
            $fche->sample_name = $request->sample_name;
            $fche->received_date = $request->received_date;
            $fche->initiated_date = $request->initiated_date;
            $fche->reported_date = $request->reported_date;
            $fche->method = $request->method;
            $fche->sample = $request->sample;
            $fche->sample_test1 = $request->sample_test1;
            $fche->sample_test2 = $request->sample_test2;
            $fche->a = $request->a;
            $fche->a_test1 = $request->a_test1;
            $fche->a_test2 = $request->a_test2;
            $fche->b = $request->b;
            $fche->b_test1 = $request->b_test1;
            $fche->b_test2 = $request->b_test2;
            $fche->total_cal = $request->total_cal;
            $fche->total_cal_test1 = $request->total_cal_test1;
            $fche->total_cal_test2 = $request->total_cal_test2;
            $fche->dissolved_cal = $request->dissolved_cal;
            $fche->dissolved_cal_test1 = $request->dissolved_cal_test1;
            $fche->dissolved_cal_test2 = $request->dissolved_cal_test2;
            $fche->suspended_cal = $request->suspended_cal;
            $fche->suspended_cal_test1 = $request->suspended_cal_test1;
            $fche->suspended_cal_test2 = $request->suspended_cal_test2;
            $fche->result = $request->result;
            $fche->result_test1 = $request->result_test1;
            $fche->result_test2 = $request->result_test2;
            $fche->total = $request->total;
            $fche->total_test1 = $request->total_test1;
            $fche->total_test2 = $request->total_test2;
            $fche->dissolved = $request->dissolved;
            $fche->dissolved_test1 = $request->dissolved_test1;
            $fche->dissolved_test2 = $request->dissolved_test2;
            $fche->suspended = $request->suspended;
            $fche->suspended_test1 = $request->suspended_test1;
            $fche->suspended_test2 = $request->suspended_test2;
            $fche->analysed_name = $request->analysed_name;
            $fche->analysed_date = $request->analysed_date;
            $fche->checked_name = $request->checked_name;
            $fche->checked_date = $request->checked_date;
            $fche->save();

            if($fche)
            {
                $fche_finance = new Fche040117Finance;
                $fche_finance->fche040117_id = $fche->id;
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
        $che = Fche040117::find($id);
        return view('backend.labs.water_tests.fche040117s.detail',compact('che'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $che = Fche040117::find($id);
        return view('backend.labs.water_tests.fche040117s.edit',compact('che'));
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
            $fche = Fche040117::find($id);
            if($fche->analysed_sign != null && $request->file("analysed_sign")){
                if(file_exists(public_path('photos/wt_fche040117s/analysed_sign/'.$fche->analysed_sign))){

                    unlink('photos/wt_fche040117s/analysed_sign/'.$fche->analysed_sign);

                }
            }

            if($fche->checked_sign != null && $request->file("checked_sign")){
                if(file_exists(public_path('photos/wt_fche040117s/checked_sign/'.$fche->checked_sign))){

                    unlink('photos/wt_fche040117s/checked_sign/'.$fche->checked_sign);

                }
            }

            if($request->file("analysed_sign")) {
                $file=$request->file("analysed_sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/wt_fche040117s/analysed_sign');
                $file->move($path, $filename);

                $fche->analysed_sign = $filename;
            }

            if($request->file("checked_sign")) {
                $file=$request->file("checked_sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/wt_fche040117s/checked_sign');
                $file->move($path, $filename);

                $fche->checked_sign = $filename;
            }

            $fche->job_number = $request->job_number;
            $fche->sample_name = $request->sample_name;
            $fche->received_date = $request->received_date;
            $fche->initiated_date = $request->initiated_date;
            $fche->reported_date = $request->reported_date;
            $fche->method = $request->method;
            $fche->sample = $request->sample;
            $fche->sample_test1 = $request->sample_test1;
            $fche->sample_test2 = $request->sample_test2;
            $fche->a = $request->a;
            $fche->a_test1 = $request->a_test1;
            $fche->a_test2 = $request->a_test2;
            $fche->b = $request->b;
            $fche->b_test1 = $request->b_test1;
            $fche->b_test2 = $request->b_test2;
            $fche->total_cal = $request->total_cal;
            $fche->total_cal_test1 = $request->total_cal_test1;
            $fche->total_cal_test2 = $request->total_cal_test2;
            $fche->dissolved_cal = $request->dissolved_cal;
            $fche->dissolved_cal_test1 = $request->dissolved_cal_test1;
            $fche->dissolved_cal_test2 = $request->dissolved_cal_test2;
            $fche->suspended_cal = $request->suspended_cal;
            $fche->suspended_cal_test1 = $request->suspended_cal_test1;
            $fche->suspended_cal_test2 = $request->suspended_cal_test2;
            $fche->result = $request->result;
            $fche->result_test1 = $request->result_test1;
            $fche->result_test2 = $request->result_test2;
            $fche->total = $request->total;
            $fche->total_test1 = $request->total_test1;
            $fche->total_test2 = $request->total_test2;
            $fche->dissolved = $request->dissolved;
            $fche->dissolved_test1 = $request->dissolved_test1;
            $fche->dissolved_test2 = $request->dissolved_test2;
            $fche->suspended = $request->suspended;
            $fche->suspended_test1 = $request->suspended_test1;
            $fche->suspended_test2 = $request->suspended_test2;
            $fche->analysed_name = $request->analysed_name;
            $fche->analysed_date = $request->analysed_date;
            $fche->checked_name = $request->checked_name;
            $fche->checked_date = $request->checked_date;
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
        $che = Fche040117::find($id);

        if($che->analysed_sign != null){
            if(file_exists(public_path('photos/wt_fche040117s/analysed_sign/'.$che->analysed_sign))){

                unlink('photos/wt_fche040117s/analysed_sign/'.$che->analysed_sign);

            }
        }

        if($che->checked_sign != null){
            if(file_exists(public_path('photos/wt_fche040117s/checked_sign/'.$che->checked_sign))){

                unlink('photos/wt_fche040117s/checked_sign/'.$che->checked_sign);

            }
        }

        Fche040117::where('id',$id)->delete();
        Fche040117Finance::where('fche040117_id',$id)->delete();

        return back()->with('success', 'Deleted successfully!');
    }

    public function print($id)
    {
        $che = Fche040117::find($id);
        return view('backend.labs.water_tests.fche040117s.print',compact('che'));
    }
}
