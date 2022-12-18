<?php

namespace App\Http\Controllers\Nutritions;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Nutritions\Fche040103;
use App\Models\Nutritions\Fche040103Finance;

class Fche040103Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:FIDSL-Che-04-01/03', ['only' => ['create']]);
    }
    public function index()
    {
        $fches = Fche040103::all();
        return view('backend.labs.nutritions.fche040103s.show',compact('fches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.labs.nutritions.fche040103s.create');
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
            $fche = new Fche040103;

            if($request->file("analysed_sign")) {
                $file=$request->file("analysed_sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/na_fche040103s/analysed_sign');
                $file->move($path, $filename);

                $fche->analysed_sign = $filename;
            }

            if($request->file("checked_sign")) {
                $file=$request->file("checked_sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/na_fche040103s/checked_sign');
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
            $fche->cat = $request->cat;
            $fche->cat_test1 = $request->cat_test1;
            $fche->cat_test2 = $request->cat_test2;
            $fche->h2so4 = $request->h2so4;
            $fche->h2so4_test1 = $request->h2so4_test1;
            $fche->h2so4_test2 = $request->h2so4_test2;
            $fche->water = $request->water;
            $fche->water_test1 = $request->water_test1;
            $fche->water_test2 = $request->water_test2;
            $fche->naoh = $request->naoh;
            $fche->naoh_test1 = $request->naoh_test1;
            $fche->naoh_test2 = $request->naoh_test2;
            $fche->receiver = $request->receiver;
            $fche->receiver_test1 = $request->receiver_test1;
            $fche->receiver_test2 = $request->receiver_test2;
            $fche->n = $request->n;
            $fche->n_test1 = $request->n_test1;
            $fche->n_test2 = $request->n_test2;
            $fche->t = $request->t;
            $fche->t_test1 = $request->t_test1;
            $fche->t_test2 = $request->t_test2;
            $fche->b = $request->b;
            $fche->b_test1 = $request->b_test1;
            $fche->b_test2 = $request->b_test2;
            $fche->f = $request->f;
            $fche->f_test1 = $request->f_test1;
            $fche->f_test2 = $request->f_test2;
            $fche->nitrogen_cal = $request->nitrogen_cal;
            $fche->nitrogen_cal_test1 = $request->nitrogen_cal_test1;
            $fche->nitrogen_cal_test2 = $request->nitrogen_cal_test2;
            $fche->protein_cal = $request->protein_cal;
            $fche->protein_cal_test1 = $request->protein_cal_test1;
            $fche->protein_cal_test2 = $request->protein_cal_test2;
            $fche->result = $request->result;
            $fche->result_test1 = $request->result_test1;
            $fche->result_test2 = $request->result_test2;
            $fche->nitrogen = $request->nitrogen;
            $fche->nitrogen_test1 = $request->nitrogen_test1;
            $fche->nitrogen_test2 = $request->nitrogen_test2;
            $fche->protein = $request->protein;
            $fche->protein_test1 = $request->protein_test1;
            $fche->protein_test2 = $request->protein_test2;
            $fche->analysed_name = $request->analysed_name;
            $fche->analysed_date = $request->analysed_date;
            $fche->checked_name = $request->checked_name;
            $fche->checked_date = $request->checked_date;
            $fche->save();

            if($fche)
            {
                $fche_finance = new Fche040103Finance;
                $fche_finance->fche040103_id = $fche->id;
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
        $che = Fche040103::find($id);
        return view('backend.labs.nutritions.fche040103s.detail',compact('che'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $che = Fche040103::find($id);
        return view('backend.labs.nutritions.fche040103s.edit',compact('che'));
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
            $fche = Fche040103::find($id);
            if($fche->analysed_sign != null && $request->file("analysed_sign")){
                if(file_exists(public_path('photos/na_fche040103s/analysed_sign/'.$fche->analysed_sign))){

                    unlink('photos/na_fche040103s/analysed_sign/'.$fche->analysed_sign);

                }
            }

            if($fche->checked_sign != null && $request->file("checked_sign")){
                if(file_exists(public_path('photos/na_fche040103s/checked_sign/'.$fche->checked_sign))){

                    unlink('photos/na_fche040103s/checked_sign/'.$fche->checked_sign);

                }
            }

            if($request->file("analysed_sign")) {
                $file=$request->file("analysed_sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/na_fche040103s/analysed_sign');
                $file->move($path, $filename);

                $fche->analysed_sign = $filename;
            }

            if($request->file("checked_sign")) {
                $file=$request->file("checked_sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/na_fche040103s/checked_sign');
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
            $fche->cat = $request->cat;
            $fche->cat_test1 = $request->cat_test1;
            $fche->cat_test2 = $request->cat_test2;
            $fche->h2so4 = $request->h2so4;
            $fche->h2so4_test1 = $request->h2so4_test1;
            $fche->h2so4_test2 = $request->h2so4_test2;
            $fche->water = $request->water;
            $fche->water_test1 = $request->water_test1;
            $fche->water_test2 = $request->water_test2;
            $fche->naoh = $request->naoh;
            $fche->naoh_test1 = $request->naoh_test1;
            $fche->naoh_test2 = $request->naoh_test2;
            $fche->receiver = $request->receiver;
            $fche->receiver_test1 = $request->receiver_test1;
            $fche->receiver_test2 = $request->receiver_test2;
            $fche->n = $request->n;
            $fche->n_test1 = $request->n_test1;
            $fche->n_test2 = $request->n_test2;
            $fche->t = $request->t;
            $fche->t_test1 = $request->t_test1;
            $fche->t_test2 = $request->t_test2;
            $fche->b = $request->b;
            $fche->b_test1 = $request->b_test1;
            $fche->b_test2 = $request->b_test2;
            $fche->f = $request->f;
            $fche->f_test1 = $request->f_test1;
            $fche->f_test2 = $request->f_test2;
            $fche->nitrogen_cal = $request->nitrogen_cal;
            $fche->nitrogen_cal_test1 = $request->nitrogen_cal_test1;
            $fche->nitrogen_cal_test2 = $request->nitrogen_cal_test2;
            $fche->protein_cal = $request->protein_cal;
            $fche->protein_cal_test1 = $request->protein_cal_test1;
            $fche->protein_cal_test2 = $request->protein_cal_test2;
            $fche->result = $request->result;
            $fche->result_test1 = $request->result_test1;
            $fche->result_test2 = $request->result_test2;
            $fche->nitrogen = $request->nitrogen;
            $fche->nitrogen_test1 = $request->nitrogen_test1;
            $fche->nitrogen_test2 = $request->nitrogen_test2;
            $fche->protein = $request->protein;
            $fche->protein_test1 = $request->protein_test1;
            $fche->protein_test2 = $request->protein_test2;
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
        $che = Fche040103::find($id);

        if($che->analysed_sign != null){
            if(file_exists(public_path('photos/na_fche040103s/analysed_sign/'.$che->analysed_sign))){

                unlink('photos/na_fche040103s/analysed_sign/'.$che->analysed_sign);

            }
        }

        if($che->checked_sign != null){
            if(file_exists(public_path('photos/na_fche040103s/checked_sign/'.$che->checked_sign))){

                unlink('photos/na_fche040103s/checked_sign/'.$che->checked_sign);

            }
        }

        Fche040103::where('id',$id)->delete();
        Fche040103Finance::where('fche040103_id',$id)->delete();

        return back()->with('success', 'Deleted successfully!');
    }

    public function print($id)
    {
        $che = Fche040103::find($id);
        return view('backend.labs.nutritions.fche040103s.print',compact('che'));
    }
}
