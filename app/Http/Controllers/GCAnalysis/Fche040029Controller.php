<?php

namespace App\Http\Controllers\GCAnalysis;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\GCAnalysis\Fche040029;
use App\Models\GCAnalysis\Fche040029Finance;

class Fche040029Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    function __construct()
    {
         $this->middleware('permission:FIDSL-Che-04-00/29', ['only' => ['create']]);
    }

    public function index()
    {
        $fche040029s = Fche040029::get();
        return view('backend.labs.gc_analyses.fche040029s.show',compact('fche040029s'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.labs.gc_analyses.fche040029s.create');
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
            $che = new Fche040029;

            if($request->file("analysed_sign")) {
                $file=$request->file("analysed_sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/gc_fche040029s/analysed_sign');
                $file->move($path, $filename);

                $che->analysed_sign = $filename;
            }

            if($request->file("checked_sign")) {
                $file=$request->file("checked_sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/gc_fche040029s/checked_sign');
                $file->move($path, $filename);

                $che->checked_sign = $filename;
            }

            $che->job_number = $request->job_number;
            $che->sample_name = $request->sample_name;
            $che->received_date = $request->received_date;
            $che->initiated_date = $request->initiated_date;
            $che->reported_date = $request->reported_date;
            $che->method = $request->method;
            $che->sample_weight = $request->sample_weight;
            $che->sample_weight_1 = $request->sample_weight_1;
            $che->sample_weight_2 = $request->sample_weight_2;
            $che->koh_volume = $request->koh_volume;
            $che->koh_volume_1 = $request->koh_volume_1;
            $che->koh_volume_2 = $request->koh_volume_2;
            $che->koh_heating_time = $request->koh_heating_time;
            $che->koh_heating_time_1 = $request->koh_heating_time_1;
            $che->koh_heating_time_2 = $request->koh_heating_time_2;
            $che->boron_volume = $request->boron_volume;
            $che->boron_volume_1 = $request->boron_volume_1;
            $che->boron_volume_2 = $request->boron_volume_2;
            $che->boron_heating_time = $request->boron_heating_time;
            $che->boron_heating_time_1 = $request->boron_heating_time_1;
            $che->boron_heating_time_2 = $request->boron_heating_time_2;
            $che->potassium_weight = $request->potassium_weight;
            $che->potassium_weight_1 = $request->potassium_weight_1;
            $che->potassium_weight_2 = $request->potassium_weight_2;
            $che->water_volume = $request->water_volume;
            $che->water_volume_1 = $request->water_volume_1;
            $che->water_volume_2 = $request->water_volume_2;
            $che->petro_volume = $request->petro_volume;
            $che->petro_volume_1 = $request->petro_volume_1;
            $che->petro_volume_2 = $request->petro_volume_2;
            $che->chlo_volume = $request->chlo_volume;
            $che->chlo_volume_1 = $request->chlo_volume_1;
            $che->chlo_volume_2 = $request->chlo_volume_2;
            $che->remark = $request->remark;
            $che->analysed_date = $request->analysed_date;
            $che->analysed_name = $request->analysed_name;
            $che->checked_date = $request->checked_date;
            $che->checked_name = $request->checked_name;
            $che->save();

            if($che)
            {
                $che_finance = new Fche040029Finance;
                $che_finance->fche040029_id = $che->id;
                $che_finance->save();

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
        $che = Fche040029::find($id);
        return view('backend.labs.gc_analyses.fche040029s.detail',compact('che'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $che = Fche040029::find($id);
        return view('backend.labs.gc_analyses.fche040029s.edit',compact('che'));
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
            $che = Fche040029::find($id);

            if($che->analysed_sign != null && $request->file("analysed_sign")){
                if(file_exists(public_path('photos/gc_fche040029s/analysed_sign/'.$che->analysed_sign))){

                    unlink('photos/gc_fche040029s/analysed_sign/'.$che->analysed_sign);

                }
            }

            if($che->checked_sign != null && $request->file("checked_sign")){
                if(file_exists(public_path('photos/gc_fche040029s/checked_sign/'.$che->checked_sign))){

                    unlink('photos/gc_fche040029s/checked_sign/'.$che->checked_sign);

                }
            }

            if($request->file("analysed_sign")) {
                $file=$request->file("analysed_sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/gc_fche040029s/analysed_sign');
                $file->move($path, $filename);

                $che->analysed_sign = $filename;
            }

            if($request->file("checked_sign")) {
                $file=$request->file("checked_sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/gc_fche040029s/checked_sign');
                $file->move($path, $filename);

                $che->checked_sign = $filename;
            }

            $che->job_number = $request->job_number;
            $che->sample_name = $request->sample_name;
            $che->received_date = $request->received_date;
            $che->initiated_date = $request->initiated_date;
            $che->reported_date = $request->reported_date;
            $che->method = $request->method;
            $che->sample_weight = $request->sample_weight;
            $che->sample_weight_1 = $request->sample_weight_1;
            $che->sample_weight_2 = $request->sample_weight_2;
            $che->koh_volume = $request->koh_volume;
            $che->koh_volume_1 = $request->koh_volume_1;
            $che->koh_volume_2 = $request->koh_volume_2;
            $che->koh_heating_time = $request->koh_heating_time;
            $che->koh_heating_time_1 = $request->koh_heating_time_1;
            $che->koh_heating_time_2 = $request->koh_heating_time_2;
            $che->boron_volume = $request->boron_volume;
            $che->boron_volume_1 = $request->boron_volume_1;
            $che->boron_volume_2 = $request->boron_volume_2;
            $che->boron_heating_time = $request->boron_heating_time;
            $che->boron_heating_time_1 = $request->boron_heating_time_1;
            $che->boron_heating_time_2 = $request->boron_heating_time_2;
            $che->potassium_weight = $request->potassium_weight;
            $che->potassium_weight_1 = $request->potassium_weight_1;
            $che->potassium_weight_2 = $request->potassium_weight_2;
            $che->water_volume = $request->water_volume;
            $che->water_volume_1 = $request->water_volume_1;
            $che->water_volume_2 = $request->water_volume_2;
            $che->petro_volume = $request->petro_volume;
            $che->petro_volume_1 = $request->petro_volume_1;
            $che->petro_volume_2 = $request->petro_volume_2;
            $che->chlo_volume = $request->chlo_volume;
            $che->chlo_volume_1 = $request->chlo_volume_1;
            $che->chlo_volume_2 = $request->chlo_volume_2;
            $che->remark = $request->remark;
            $che->analysed_date = $request->analysed_date;
            $che->analysed_name = $request->analysed_name;
            $che->checked_date = $request->checked_date;
            $che->checked_name = $request->checked_name;
            $che->save();

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
    public function destroy($id)
    {
        $che = Fche040029::find($id);

        if($che->analysed_sign != null){
            if(file_exists(public_path('photos/gc_fche040029s/analysed_sign/'.$che->analysed_sign))){

                unlink('photos/gc_fche040029s/analysed_sign/'.$che->analysed_sign);

            }
        }

        if($che->checked_sign != null){
            if(file_exists(public_path('photos/gc_fche040029s/checked_sign/'.$che->checked_sign))){

                unlink('photos/gc_fche040029s/checked_sign/'.$che->checked_sign);

            }
        }

        Fche040029::where('id',$id)->delete();
        Fche040029Finance::where('fche040029_id',$id)->delete();

        return back()->with('success', 'Deleted successfully!');
    }

    public function print($id)
    {
        $che = Fche040029::find($id);

        return view('backend.labs.gc_analyses.fche040029s.print',compact('che'));
    }
}
