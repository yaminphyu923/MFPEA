<?php

namespace App\Http\Controllers\WaterTests;

use Exception;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\WaterTests\Fche040116;
use App\Models\WaterTests\Fche040116Finance;

class Fche040116Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:FIDSL-Che-04-01/16', ['only' => ['create']]);
    }
    public function index()
    {
        $fches = Fche040116::all();
        return view('backend.labs.water_tests.fche040116s.show',compact('fches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.labs.water_tests.fche040116s.create');
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
            $fche = new Fche040116;

            if($request->file("analysed_sign")) {
                $file=$request->file("analysed_sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/wt_fche040116s/analysed_sign');
                $file->move($path, $filename);

                $fche->analysed_sign = $filename;
            }

            if($request->file("checked_sign")) {
                $file=$request->file("checked_sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/wt_fche040116s/checked_sign');
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
            $fche->distilled = $request->distilled;
            $fche->distilled_test1 = $request->distilled_test1;
            $fche->distilled_test2 = $request->distilled_test2;
            $fche->buffer = $request->buffer;
            $fche->buffer_test1 = $request->buffer_test1;
            $fche->buffer_test2 = $request->buffer_test2;
            $fche->indicator = $request->indicator;
            $fche->indicator_test1 = $request->indicator_test1;
            $fche->indicator_test2 = $request->indicator_test2;
            $fche->t = $request->t;
            $fche->t_test1 = $request->t_test1;
            $fche->t_test2 = $request->t_test2;
            $fche->b = $request->b;
            $fche->b_test1 = $request->b_test1;
            $fche->b_test2 = $request->b_test2;
            $fche->edta = $request->edta;
            $fche->edta_test1 = $request->edta_test1;
            $fche->edta_test2 = $request->edta_test2;
            $fche->result = $request->result;
            $fche->result_test1 = $request->result_test1;
            $fche->result_test2 = $request->result_test2;
            $fche->hardness = $request->hardness;
            $fche->hardness_test1 = $request->hardness_test1;
            $fche->hardness_test2 = $request->hardness_test2;
            $fche->ca = $request->ca;
            $fche->ca_test1 = $request->ca_test1;
            $fche->ca_test2 = $request->ca_test2;
            $fche->mg = $request->mg;
            $fche->mg_test1 = $request->mg_test1;
            $fche->mg_test2 = $request->mg_test2;
            $fche->analysed_name = $request->analysed_name;
            $fche->analysed_date = $request->analysed_date;
            $fche->checked_name = $request->checked_name;
            $fche->checked_date = $request->checked_date;
            $fche->save();

            if($fche)
            {
                $fche_finance = new Fche040116Finance;
                $fche_finance->fche040116_id = $fche->id;
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
        $che = Fche040116::find($id);
        return view('backend.labs.water_tests.fche040116s.detail',compact('che'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $che = Fche040116::find($id);
        return view('backend.labs.water_tests.fche040116s.edit',compact('che'));
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
            $fche = Fche040116::find($id);
            if($fche->analysed_sign != null && $request->file("analysed_sign")){
                if(file_exists(public_path('photos/wt_fche040116s/analysed_sign/'.$fche->analysed_sign))){

                    unlink('photos/wt_fche040116s/analysed_sign/'.$fche->analysed_sign);

                }
            }

            if($fche->checked_sign != null && $request->file("checked_sign")){
                if(file_exists(public_path('photos/wt_fche040116s/checked_sign/'.$fche->checked_sign))){

                    unlink('photos/wt_fche040116s/checked_sign/'.$fche->checked_sign);

                }
            }

            if($request->file("analysed_sign")) {
                $file=$request->file("analysed_sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/wt_fche040116s/analysed_sign');
                $file->move($path, $filename);

                $fche->analysed_sign = $filename;
            }

            if($request->file("checked_sign")) {
                $file=$request->file("checked_sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/wt_fche040116s/checked_sign');
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
            $fche->distilled = $request->distilled;
            $fche->distilled_test1 = $request->distilled_test1;
            $fche->distilled_test2 = $request->distilled_test2;
            $fche->buffer = $request->buffer;
            $fche->buffer_test1 = $request->buffer_test1;
            $fche->buffer_test2 = $request->buffer_test2;
            $fche->indicator = $request->indicator;
            $fche->indicator_test1 = $request->indicator_test1;
            $fche->indicator_test2 = $request->indicator_test2;
            $fche->t = $request->t;
            $fche->t_test1 = $request->t_test1;
            $fche->t_test2 = $request->t_test2;
            $fche->b = $request->b;
            $fche->b_test1 = $request->b_test1;
            $fche->b_test2 = $request->b_test2;
            $fche->edta = $request->edta;
            $fche->edta_test1 = $request->edta_test1;
            $fche->edta_test2 = $request->edta_test2;
            $fche->result = $request->result;
            $fche->result_test1 = $request->result_test1;
            $fche->result_test2 = $request->result_test2;
            $fche->hardness = $request->hardness;
            $fche->hardness_test1 = $request->hardness_test1;
            $fche->hardness_test2 = $request->hardness_test2;
            $fche->ca = $request->ca;
            $fche->ca_test1 = $request->ca_test1;
            $fche->ca_test2 = $request->ca_test2;
            $fche->mg = $request->mg;
            $fche->mg_test1 = $request->mg_test1;
            $fche->mg_test2 = $request->mg_test2;
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
        $che = Fche040116::find($id);

        if($che->analysed_sign != null){
            if(file_exists(public_path('photos/wt_fche040116s/analysed_sign/'.$che->analysed_sign))){

                unlink('photos/wt_fche040116s/analysed_sign/'.$che->analysed_sign);

            }
        }

        if($che->checked_sign != null){
            if(file_exists(public_path('photos/wt_fche040116s/checked_sign/'.$che->checked_sign))){

                unlink('photos/wt_fche040116s/checked_sign/'.$che->checked_sign);

            }
        }

        Fche040116::where('id',$id)->delete();
        Fche040116Finance::where('fche040116_id',$id)->delete();

        return back()->with('success', 'Deleted successfully!');
    }

    public function print($id)
    {
        $che = Fche040116::find($id);
        return view('backend.labs.water_tests.fche040116s.print',compact('che'));
    }
}
