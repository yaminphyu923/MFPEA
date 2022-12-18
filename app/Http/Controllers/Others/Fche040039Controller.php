<?php

namespace App\Http\Controllers\Others;

use Illuminate\Http\Request;
use App\Models\Others\Fche040039;
use App\Http\Controllers\Controller;
use App\Models\Others\Fche040039Finance;
use Exception;

class Fche040039Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:FIDSL-Che-04-00/39', ['only' => ['create']]);
    }
    public function index()
    {
        $fches = Fche040039::all();
        return view('backend.labs.others.fche040039s.show',compact('fches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.labs.others.fche040039s.create');
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
            $fche = new Fche040039;

            if($request->file("analysed_sign")) {
                $file=$request->file("analysed_sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/other_fche040039s/analysed_sign');
                $file->move($path, $filename);

                $fche->analysed_sign = $filename;
            }

            if($request->file("checked_sign")) {
                $file=$request->file("checked_sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/other_fche040039s/checked_sign');
                $file->move($path, $filename);

                $fche->checked_sign = $filename;
            }

            $fche->job_number = $request->job_number;
            $fche->sample_name = $request->sample_name;
            $fche->received_date = $request->received_date;
            $fche->initiated_date = $request->initiated_date;
            $fche->reported_date = $request->reported_date;
            $fche->method = $request->method;
            $fche->ki = $request->ki;
            $fche->ki_test1 = $request->ki_test1;
            $fche->ki_test2 = $request->ki_test2;
            $fche->distilled_water = $request->distilled_water;
            $fche->distilled_water_test1 = $request->distilled_water_test1;
            $fche->distilled_water_test2 = $request->distilled_water_test2;
            $fche->acetic_acid = $request->acetic_acid;
            $fche->acetic_acid_test1 = $request->acetic_acid_test1;
            $fche->acetic_acid_test2 = $request->acetic_acid_test2;
            $fche->sample = $request->sample;
            $fche->sample_test1 = $request->sample_test1;
            $fche->sample_test2 = $request->sample_test2;
            $fche->titration = $request->titration;
            $fche->titration_test1 = $request->titration_test1;
            $fche->titration_test2 = $request->titration_test2;
            $fche->blank = $request->blank;
            $fche->blank_test1 = $request->blank_test1;
            $fche->blank_test2 = $request->blank_test2;
            $fche->sodium = $request->sodium;
            $fche->sodium_test1 = $request->sodium_test1;
            $fche->sodium_test2 = $request->sodium_test2;
            $fche->cl_cal = $request->cl_cal;
            $fche->cl_cal_test1 = $request->cl_cal_test1;
            $fche->cl_cal_test2 = $request->cl_cal_test2;
            $fche->result = $request->result;
            $fche->result_test1 = $request->result_test1;
            $fche->result_test2 = $request->result_test2;
            $fche->cl = $request->cl;
            $fche->cl_test1 = $request->cl_test1;
            $fche->cl_test2 = $request->cl_test2;
            $fche->analysed_name = $request->analysed_name;
            $fche->analysed_date = $request->analysed_date;
            $fche->checked_name = $request->checked_name;
            $fche->checked_date = $request->checked_date;
            $fche->save();

            if($fche)
            {
                $fche_finance = new Fche040039Finance;
                $fche_finance->fche040039_id = $fche->id;
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
        $che = Fche040039::find($id);
        return view('backend.labs.others.fche040039s.detail',compact('che'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $che = Fche040039::find($id);
        return view('backend.labs.others.fche040039s.edit',compact('che'));
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
            $fche = Fche040039::find($id);
            if($fche->analysed_sign != null && $request->file("analysed_sign")){
                if(file_exists(public_path('photos/other_fche040039s/analysed_sign/'.$fche->analysed_sign))){

                    unlink('photos/other_fche040039s/analysed_sign/'.$fche->analysed_sign);

                }
            }

            if($fche->checked_sign != null && $request->file("checked_sign")){
                if(file_exists(public_path('photos/other_fche040039s/checked_sign/'.$fche->checked_sign))){

                    unlink('photos/other_fche040039s/checked_sign/'.$fche->checked_sign);

                }
            }

            if($request->file("analysed_sign")) {
                $file=$request->file("analysed_sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/other_fche040039s/analysed_sign');
                $file->move($path, $filename);

                $fche->analysed_sign = $filename;
            }

            if($request->file("checked_sign")) {
                $file=$request->file("checked_sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/other_fche040039s/checked_sign');
                $file->move($path, $filename);

                $fche->checked_sign = $filename;
            }

            $fche->job_number = $request->job_number;
            $fche->sample_name = $request->sample_name;
            $fche->received_date = $request->received_date;
            $fche->initiated_date = $request->initiated_date;
            $fche->reported_date = $request->reported_date;
            $fche->method = $request->method;
            $fche->ki = $request->ki;
            $fche->ki_test1 = $request->ki_test1;
            $fche->ki_test2 = $request->ki_test2;
            $fche->distilled_water = $request->distilled_water;
            $fche->distilled_water_test1 = $request->distilled_water_test1;
            $fche->distilled_water_test2 = $request->distilled_water_test2;
            $fche->acetic_acid = $request->acetic_acid;
            $fche->acetic_acid_test1 = $request->acetic_acid_test1;
            $fche->acetic_acid_test2 = $request->acetic_acid_test2;
            $fche->sample = $request->sample;
            $fche->sample_test1 = $request->sample_test1;
            $fche->sample_test2 = $request->sample_test2;
            $fche->titration = $request->titration;
            $fche->titration_test1 = $request->titration_test1;
            $fche->titration_test2 = $request->titration_test2;
            $fche->blank = $request->blank;
            $fche->blank_test1 = $request->blank_test1;
            $fche->blank_test2 = $request->blank_test2;
            $fche->sodium = $request->sodium;
            $fche->sodium_test1 = $request->sodium_test1;
            $fche->sodium_test2 = $request->sodium_test2;
            $fche->cl_cal = $request->cl_cal;
            $fche->cl_cal_test1 = $request->cl_cal_test1;
            $fche->cl_cal_test2 = $request->cl_cal_test2;
            $fche->result = $request->result;
            $fche->result_test1 = $request->result_test1;
            $fche->result_test2 = $request->result_test2;
            $fche->cl = $request->cl;
            $fche->cl_test1 = $request->cl_test1;
            $fche->cl_test2 = $request->cl_test2;
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
        $che = Fche040039::find($id);

        if($che->analysed_sign != null){
            if(file_exists(public_path('photos/other_fche040039s/analysed_sign/'.$che->analysed_sign))){

                unlink('photos/other_fche040039s/analysed_sign/'.$che->analysed_sign);

            }
        }

        if($che->checked_sign != null){
            if(file_exists(public_path('photos/other_fche040039s/checked_sign/'.$che->checked_sign))){

                unlink('photos/other_fche040039s/checked_sign/'.$che->checked_sign);

            }
        }

        Fche040039::where('id',$id)->delete();
        Fche040039Finance::where('fche040039_id',$id)->delete();

        return back()->with('success', 'Deleted successfully!');
    }

    public function print($id)
    {
        $che = Fche040039::find($id);
        return view('backend.labs.others.fche040039s.print',compact('che'));
    }
}
