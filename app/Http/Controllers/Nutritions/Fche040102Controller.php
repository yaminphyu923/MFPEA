<?php

namespace App\Http\Controllers\Nutritions;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Nutritions\Fche040102;
use App\Models\Nutritions\Fche040102Finance;

class Fche040102Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:FIDSL-Che-04-01/02', ['only' => ['create']]);
    }
    public function index()
    {
        $fches = Fche040102::all();
        return view('backend.labs.nutritions.fche040102s.show',compact('fches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.labs.nutritions.fche040102s.create');
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
            $fche = new Fche040102;

            if($request->file("analysed_sign")) {
                $file=$request->file("analysed_sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/na_fche040102s/analysed_sign');
                $file->move($path, $filename);

                $fche->analysed_sign = $filename;
            }

            if($request->file("checked_sign")) {
                $file=$request->file("checked_sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/na_fche040102s/checked_sign');
                $file->move($path, $filename);

                $fche->checked_sign = $filename;
            }

            $fche->job_number = $request->job_number;
            $fche->sample_name = $request->sample_name;
            $fche->received_date = $request->received_date;
            $fche->initiated_date = $request->initiated_date;
            $fche->reported_date = $request->reported_date;
            $fche->method = $request->method;
            $fche->cru = $request->cru;
            $fche->cru_test1 = $request->cru_test1;
            $fche->cru_test2 = $request->cru_test2;
            $fche->w1 = $request->w1;
            $fche->w1_test1 = $request->w1_test1;
            $fche->w1_test2 = $request->w1_test2;
            $fche->cruplussample = $request->cruplussample;
            $fche->cruplussample_test1 = $request->cruplussample_test1;
            $fche->cruplussample_test2 = $request->cruplussample_test2;
            $fche->w2 = $request->w2;
            $fche->w2_test1 = $request->w2_test1;
            $fche->w2_test2 = $request->w2_test2;
            $fche->ash_cal = $request->ash_cal;
            $fche->ash_cal_test1 = $request->ash_cal_test1;
            $fche->ash_cal_test2 = $request->ash_cal_test2;
            $fche->result = $request->result;
            $fche->result_test1 = $request->result_test1;
            $fche->result_test2 = $request->result_test2;
            $fche->ash = $request->ash;
            $fche->ash_test1 = $request->ash_test1;
            $fche->ash_test2 = $request->ash_test2;
            $fche->analysed_name = $request->analysed_name;
            $fche->analysed_date = $request->analysed_date;
            $fche->checked_name = $request->checked_name;
            $fche->checked_date = $request->checked_date;
            $fche->save();

            if($fche)
            {
                $fche_finance = new Fche040102Finance;
                $fche_finance->fche040102_id = $fche->id;
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
        $che = Fche040102::find($id);
        return view('backend.labs.nutritions.fche040102s.detail',compact('che'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $che = Fche040102::find($id);
        return view('backend.labs.nutritions.fche040102s.edit',compact('che'));
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
            $fche = Fche040102::find($id);
            if($fche->analysed_sign != null && $request->file("analysed_sign")){
                if(file_exists(public_path('photos/na_fche040102s/analysed_sign/'.$fche->analysed_sign))){

                    unlink('photos/na_fche040102s/analysed_sign/'.$fche->analysed_sign);

                }
            }

            if($fche->checked_sign != null && $request->file("checked_sign")){
                if(file_exists(public_path('photos/na_fche040102s/checked_sign/'.$fche->checked_sign))){

                    unlink('photos/na_fche040102s/checked_sign/'.$fche->checked_sign);

                }
            }

            if($request->file("analysed_sign")) {
                $file=$request->file("analysed_sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/na_fche040102s/analysed_sign');
                $file->move($path, $filename);

                $fche->analysed_sign = $filename;
            }

            if($request->file("checked_sign")) {
                $file=$request->file("checked_sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/na_fche040102s/checked_sign');
                $file->move($path, $filename);

                $fche->checked_sign = $filename;
            }

            $fche->job_number = $request->job_number;
            $fche->sample_name = $request->sample_name;
            $fche->received_date = $request->received_date;
            $fche->initiated_date = $request->initiated_date;
            $fche->reported_date = $request->reported_date;
            $fche->method = $request->method;
            $fche->cru = $request->cru;
            $fche->cru_test1 = $request->cru_test1;
            $fche->cru_test2 = $request->cru_test2;
            $fche->w1 = $request->w1;
            $fche->w1_test1 = $request->w1_test1;
            $fche->w1_test2 = $request->w1_test2;
            $fche->cruplussample = $request->cruplussample;
            $fche->cruplussample_test1 = $request->cruplussample_test1;
            $fche->cruplussample_test2 = $request->cruplussample_test2;
            $fche->w2 = $request->w2;
            $fche->w2_test1 = $request->w2_test1;
            $fche->w2_test2 = $request->w2_test2;
            $fche->ash_cal = $request->ash_cal;
            $fche->ash_cal_test1 = $request->ash_cal_test1;
            $fche->ash_cal_test2 = $request->ash_cal_test2;
            $fche->result = $request->result;
            $fche->result_test1 = $request->result_test1;
            $fche->result_test2 = $request->result_test2;
            $fche->ash = $request->ash;
            $fche->ash_test1 = $request->ash_test1;
            $fche->ash_test2 = $request->ash_test2;
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
        $che = Fche040102::find($id);

        if($che->analysed_sign != null){
            if(file_exists(public_path('photos/na_fche040102s/analysed_sign/'.$che->analysed_sign))){

                unlink('photos/na_fche040102s/analysed_sign/'.$che->analysed_sign);

            }
        }

        if($che->checked_sign != null){
            if(file_exists(public_path('photos/na_fche040102s/checked_sign/'.$che->checked_sign))){

                unlink('photos/na_fche040102s/checked_sign/'.$che->checked_sign);

            }
        }

        Fche040102::where('id',$id)->delete();
        Fche040102Finance::where('fche040102_id',$id)->delete();

        return back()->with('success', 'Deleted successfully!');
    }

    public function print($id)
    {
        $che = Fche040102::find($id);
        return view('backend.labs.nutritions.fche040102s.print',compact('che'));
    }
}
