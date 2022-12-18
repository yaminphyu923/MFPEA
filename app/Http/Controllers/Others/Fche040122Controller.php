<?php

namespace App\Http\Controllers\Others;

use Illuminate\Http\Request;
use App\Models\Others\Fche040122;
use App\Http\Controllers\Controller;
use App\Models\Others\Fche040122Finance;
use Exception;

class Fche040122Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:FIDSL-Che-04-01/22', ['only' => ['create']]);
    }
    public function index()
    {
        $fches = Fche040122::all();
        return view('backend.labs.others.fche040122s.show',compact('fches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.labs.others.fche040122s.create');
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
            $fche = new Fche040122;

            if($request->file("analysed_sign")) {
                $file=$request->file("analysed_sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/other_fche040122s/analysed_sign');
                $file->move($path, $filename);

                $fche->analysed_sign = $filename;
            }

            if($request->file("checked_sign")) {
                $file=$request->file("checked_sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/other_fche040122s/checked_sign');
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
            $fche->mgo = $request->mgo;
            $fche->mgo_test1 = $request->mgo_test1;
            $fche->mgo_test2 = $request->mgo_test2;
            $fche->water = $request->water;
            $fche->water_test1 = $request->water_test1;
            $fche->water_test2 = $request->water_test2;
            $fche->total_weight = $request->total_weight;
            $fche->total_weight_test1 = $request->total_weight_test1;
            $fche->total_weight_test2 = $request->total_weight_test2;
            $fche->filtrate = $request->filtrate;
            $fche->filtrate_test1 = $request->filtrate_test1;
            $fche->filtrate_test2 = $request->filtrate_test2;
            $fche->h2s04 = $request->h2s04;
            $fche->h2s04_test1 = $request->h2s04_test1;
            $fche->h2s04_test2 = $request->h2s04_test2;
            $fche->chlo = $request->chlo;
            $fche->chlo_test1 = $request->chlo_test1;
            $fche->chlo_test2 = $request->chlo_test2;
            $fche->koh = $request->koh;
            $fche->koh_test1 = $request->koh_test1;
            $fche->koh_test2 = $request->koh_test2;
            $fche->digestion = $request->digestion;
            $fche->digestion_test1 = $request->digestion_test1;
            $fche->digestion_test2 = $request->digestion_test2;
            $fche->titer = $request->titer;
            $fche->titer_test1 = $request->titer_test1;
            $fche->titer_test2 = $request->titer_test2;
            $fche->k = $request->k;
            $fche->k_test1 = $request->k_test1;
            $fche->k_test2 = $request->k_test2;
            $fche->wt = $request->wt;
            $fche->wt_test1 = $request->wt_test1;
            $fche->wt_test2 = $request->wt_test2;
            $fche->coefficient = $request->coefficient;
            $fche->coefficient_test1 = $request->coefficient_test1;
            $fche->coefficient_test2 = $request->coefficient_test2;
            $fche->caffeine_cal = $request->caffeine_cal;
            $fche->caffeine_cal_test1 = $request->caffeine_cal_test1;
            $fche->caffeine_cal_test2 = $request->caffeine_cal_test2;
            $fche->caffeine = $request->caffeine;
            $fche->caffeine_test1 = $request->caffeine_test1;
            $fche->caffeine_test2 = $request->caffeine_test2;
            $fche->analysed_name = $request->analysed_name;
            $fche->analysed_date = $request->analysed_date;
            $fche->checked_name = $request->checked_name;
            $fche->checked_date = $request->checked_date;
            $fche->save();

            if($fche)
            {
                $fche_finance = new Fche040122Finance;
                $fche_finance->fche040122_id = $fche->id;
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
        $che = Fche040122::find($id);
        return view('backend.labs.others.fche040122s.detail',compact('che'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $che = Fche040122::find($id);
        return view('backend.labs.others.fche040122s.edit',compact('che'));
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
            $fche = Fche040122::find($id);
            if($fche->analysed_sign != null && $request->file("analysed_sign")){
                if(file_exists(public_path('photos/other_fche040122s/analysed_sign/'.$fche->analysed_sign))){

                    unlink('photos/other_fche040122s/analysed_sign/'.$fche->analysed_sign);

                }
            }

            if($fche->checked_sign != null && $request->file("checked_sign")){
                if(file_exists(public_path('photos/other_fche040122s/checked_sign/'.$fche->checked_sign))){

                    unlink('photos/other_fche040122s/checked_sign/'.$fche->checked_sign);

                }
            }

            if($request->file("analysed_sign")) {
                $file=$request->file("analysed_sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/other_fche040122s/analysed_sign');
                $file->move($path, $filename);

                $fche->analysed_sign = $filename;
            }

            if($request->file("checked_sign")) {
                $file=$request->file("checked_sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/other_fche040122s/checked_sign');
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
            $fche->mgo = $request->mgo;
            $fche->mgo_test1 = $request->mgo_test1;
            $fche->mgo_test2 = $request->mgo_test2;
            $fche->water = $request->water;
            $fche->water_test1 = $request->water_test1;
            $fche->water_test2 = $request->water_test2;
            $fche->total_weight = $request->total_weight;
            $fche->total_weight_test1 = $request->total_weight_test1;
            $fche->total_weight_test2 = $request->total_weight_test2;
            $fche->filtrate = $request->filtrate;
            $fche->filtrate_test1 = $request->filtrate_test1;
            $fche->filtrate_test2 = $request->filtrate_test2;
            $fche->h2s04 = $request->h2s04;
            $fche->h2s04_test1 = $request->h2s04_test1;
            $fche->h2s04_test2 = $request->h2s04_test2;
            $fche->chlo = $request->chlo;
            $fche->chlo_test1 = $request->chlo_test1;
            $fche->chlo_test2 = $request->chlo_test2;
            $fche->koh = $request->koh;
            $fche->koh_test1 = $request->koh_test1;
            $fche->koh_test2 = $request->koh_test2;
            $fche->digestion = $request->digestion;
            $fche->digestion_test1 = $request->digestion_test1;
            $fche->digestion_test2 = $request->digestion_test2;
            $fche->titer = $request->titer;
            $fche->titer_test1 = $request->titer_test1;
            $fche->titer_test2 = $request->titer_test2;
            $fche->k = $request->k;
            $fche->k_test1 = $request->k_test1;
            $fche->k_test2 = $request->k_test2;
            $fche->wt = $request->wt;
            $fche->wt_test1 = $request->wt_test1;
            $fche->wt_test2 = $request->wt_test2;
            $fche->coefficient = $request->coefficient;
            $fche->coefficient_test1 = $request->coefficient_test1;
            $fche->coefficient_test2 = $request->coefficient_test2;
            $fche->caffeine_cal = $request->caffeine_cal;
            $fche->caffeine_cal_test1 = $request->caffeine_cal_test1;
            $fche->caffeine_cal_test2 = $request->caffeine_cal_test2;
            $fche->caffeine = $request->caffeine;
            $fche->caffeine_test1 = $request->caffeine_test1;
            $fche->caffeine_test2 = $request->caffeine_test2;
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
        $che = Fche040122::find($id);

        if($che->analysed_sign != null){
            if(file_exists(public_path('photos/other_fche040122s/analysed_sign/'.$che->analysed_sign))){

                unlink('photos/other_fche040122s/analysed_sign/'.$che->analysed_sign);

            }
        }

        if($che->checked_sign != null){
            if(file_exists(public_path('photos/other_fche040122s/checked_sign/'.$che->checked_sign))){

                unlink('photos/other_fche040122s/checked_sign/'.$che->checked_sign);

            }
        }

        Fche040122::where('id',$id)->delete();
        Fche040122Finance::where('fche040122_id',$id)->delete();

        return back()->with('success', 'Deleted successfully!');
    }

    public function print($id)
    {
        $che = Fche040122::find($id);
        return view('backend.labs.others.fche040122s.print',compact('che'));
    }
}
