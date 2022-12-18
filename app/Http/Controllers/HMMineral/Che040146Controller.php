<?php

namespace App\Http\Controllers\HMMineral;

use App\Models\HMMChe040146;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Finances\HMMChe040146Finance;

class Che040146Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:FIDSL-Che-04-01/46', ['only' => ['create']]);
    }

    public function index()
    {
        $ches = HMMChe040146::get();
        return view('backend.labs.hmminerals.che040146s.show',compact('ches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.labs.hmminerals.che040146s.create');
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
            $che = new HMMChe040146;

            if($request->file("analysed_sign")) {
                $file=$request->file("analysed_sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/hmm_che040146s/analysed_sign');
                $file->move($path, $filename);

                $che->analysed_sign = $filename;
            }

            if($request->file("checked_sign")) {
                $file=$request->file("checked_sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/hmm_che040146s/checked_sign');
                $file->move($path, $filename);

                $che->checked_sign = $filename;
            }

            $che->job_number = $request->job_number;
            $che->sample_name = $request->sample_name;

            $che->received_date = $request->received_date;
            $che->initiated_date = $request->initiated_date;
            $che->reported_date = $request->reported_date;
            $che->method = $request->method;
            $che->weight = $request->weight;
            $che->weight_1 = $request->weight_1;
            $che->weight_2 = $request->weight_2;
            $che->nitric_volume = $request->nitric_volume;
            $che->nitric_volume_1 = $request->nitric_volume_1;
            $che->nitric_volume_2 = $request->nitric_volume_2;
            $che->hydrogen_volume = $request->hydrogen_volume;
            $che->hydrogen_volume_1 = $request->hydrogen_volume_1;
            $che->hydrogen_volume_2 = $request->hydrogen_volume_2;
            $che->volume = $request->volume;
            $che->volume_1 = $request->volume_1;
            $che->volume_2 = $request->volume_2;
            $che->df = $request->df;
            $che->df_1 = $request->df_1;
            $che->df_2 = $request->df_2;
            $che->sd = $request->sd;
            $che->sd_1 = $request->sd_1;
            $che->sd_2 = $request->sd_2;
            $che->concentration = $request->concentration;
            $che->concentration_1 = $request->concentration_1;
            $che->concentration_2 = $request->concentration_2;
            $che->reagent = $request->reagent;
            $che->reagent_1 = $request->reagent_1;
            $che->reagent_2 = $request->reagent_2;
            $che->real_concentration = $request->real_concentration;
            $che->real_concentration_1 = $request->real_concentration_1;
            $che->real_concentration_2 = $request->real_concentration_2;
            $che->mg = $request->mg;
            $che->mg_1 = $request->mg_1;
            $che->mg_2 = $request->mg_2;
            $che->analysed_date = $request->analysed_date;
            $che->analysed_name = $request->analysed_name;
            $che->checked_date = $request->checked_date;
            $che->checked_name = $request->checked_name;
            $che->save();

            if($che)
            {
                $che_finance = new HMMChe040146Finance;
                $che_finance->hmm_che040146_id = $che->id;
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
        $che = HMMChe040146::find($id);
        return view('backend.labs.hmminerals.che040146s.detail',compact('che'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $che = HMMChe040146::find($id);

        return view('backend.labs.hmminerals.che040146s.edit',compact('che'));
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
        $che = HMMChe040146::find($id);

        if($che->analysed_sign != null && $request->file("analysed_sign")){
            if(file_exists(public_path('photos/hmm_che040146s/analysed_sign/'.$che->analysed_sign))){

                unlink('photos/hmm_che040146s/analysed_sign/'.$che->analysed_sign);

            }
        }

        if($che->checked_sign != null && $request->file("checked_sign")){
            if(file_exists(public_path('photos/hmm_che040146s/checked_sign/'.$che->checked_sign))){

                unlink('photos/hmm_che040146s/checked_sign/'.$che->checked_sign);

            }
        }

        if($request->file("analysed_sign")) {
            $file=$request->file("analysed_sign");
            $filename = time().'_'.$file->getClientOriginalName();
            $path=public_path('photos/hmm_che040146s/analysed_sign');
            $file->move($path, $filename);

            $che->analysed_sign = $filename;
        }

        if($request->file("checked_sign")) {
            $file=$request->file("checked_sign");
            $filename = time().'_'.$file->getClientOriginalName();
            $path=public_path('photos/hmm_che040146s/checked_sign');
            $file->move($path, $filename);

            $che->checked_sign = $filename;
        }

        $che->job_number = $request->job_number;
        $che->sample_name = $request->sample_name;

        $che->received_date = $request->received_date;
        $che->initiated_date = $request->initiated_date;
        $che->reported_date = $request->reported_date;
        $che->method = $request->method;
        $che->weight = $request->weight;
        $che->weight_1 = $request->weight_1;
        $che->weight_2 = $request->weight_2;
        $che->nitric_volume = $request->nitric_volume;
        $che->nitric_volume_1 = $request->nitric_volume_1;
        $che->nitric_volume_2 = $request->nitric_volume_2;
        $che->hydrogen_volume = $request->hydrogen_volume;
        $che->hydrogen_volume_1 = $request->hydrogen_volume_1;
        $che->hydrogen_volume_2 = $request->hydrogen_volume_2;
        $che->volume = $request->volume;
        $che->volume_1 = $request->volume_1;
        $che->volume_2 = $request->volume_2;
        $che->df = $request->df;
        $che->df_1 = $request->df_1;
        $che->df_2 = $request->df_2;
        $che->sd = $request->sd;
        $che->sd_1 = $request->sd_1;
        $che->sd_2 = $request->sd_2;
        $che->concentration = $request->concentration;
        $che->concentration_1 = $request->concentration_1;
        $che->concentration_2 = $request->concentration_2;
        $che->reagent = $request->reagent;
        $che->reagent_1 = $request->reagent_1;
        $che->reagent_2 = $request->reagent_2;
        $che->real_concentration = $request->real_concentration;
        $che->real_concentration_1 = $request->real_concentration_1;
        $che->real_concentration_2 = $request->real_concentration_2;
        $che->mg = $request->mg;
        $che->mg_1 = $request->mg_1;
        $che->mg_2 = $request->mg_2;
        $che->analysed_date = $request->analysed_date;
        $che->analysed_name = $request->analysed_name;
        $che->checked_date = $request->checked_date;
        $che->checked_name = $request->checked_name;
        $che->save();

        return redirect()->back()
        ->with('success', 'Updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $che = HMMChe040146::find($id);

        if($che->analysed_sign != null){
            if(file_exists(public_path('photos/hmm_che040146s/analysed_sign/'.$che->analysed_sign))){

                unlink('photos/hmm_che040146s/analysed_sign/'.$che->analysed_sign);

            }
        }

        if($che->checked_sign != null){
            if(file_exists(public_path('photos/hmm_che040146s/checked_sign/'.$che->checked_sign))){

                unlink('photos/hmm_che040146s/checked_sign/'.$che->checked_sign);

            }
        }

        HMMChe040146::where('id',$id)->delete();

        HMMChe040146Finance::where('hmm_che040146_id',$id)->delete();

        return back()->with('success', 'Deleted successfully!');
    }

    public function print($id)
    {
        $che = HMMChe040146::find($id);
        return view('backend.labs.hmminerals.che040146s.print',compact('che'));
    }
}
