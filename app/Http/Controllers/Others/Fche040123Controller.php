<?php

namespace App\Http\Controllers\Others;

use Illuminate\Http\Request;
use App\Models\Others\Fche040123;
use App\Http\Controllers\Controller;
use App\Models\Others\Fche040123Finance;
use Exception;

class Fche040123Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:FIDSL-Che-04-01/23', ['only' => ['create']]);
    }
    public function index()
    {
        $fches = Fche040123::all();
        return view('backend.labs.others.fche040123s.show',compact('fches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.labs.others.fche040123s.create');
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
            $fche = new Fche040123;

            if($request->file("analysed_sign")) {
                $file=$request->file("analysed_sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/other_fche040123s/analysed_sign');
                $file->move($path, $filename);

                $fche->analysed_sign = $filename;
            }

            if($request->file("checked_sign")) {
                $file=$request->file("checked_sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/other_fche040123s/checked_sign');
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
            $fche->gelatin = $request->gelatin;
            $fche->gelatin_test1 = $request->gelatin_test1;
            $fche->gelatin_test2 = $request->gelatin_test2;
            $fche->kaolin = $request->kaolin;
            $fche->kaolin_test1 = $request->kaolin_test1;
            $fche->kaolin_test2 = $request->kaolin_test2;
            $fche->indigo = $request->indigo;
            $fche->indigo_test1 = $request->indigo_test1;
            $fche->indigo_test2 = $request->indigo_test2;
            $fche->potassium = $request->potassium;
            $fche->potassium_test1 = $request->potassium_test1;
            $fche->potassium_test2 = $request->potassium_test2;
            $fche->filtratea = $request->filtratea;
            $fche->filtratea_test1 = $request->filtratea_test1;
            $fche->filtratea_test2 = $request->filtratea_test2;
            $fche->filtrateb = $request->filtrateb;
            $fche->filtrateb_test1 = $request->filtrateb_test1;
            $fche->filtrateb_test2 = $request->filtrateb_test2;
            $fche->f = $request->f;
            $fche->f_test1 = $request->f_test1;
            $fche->f_test2 = $request->f_test2;
            $fche->c = $request->c;
            $fche->c_test1 = $request->c_test1;
            $fche->c_test2 = $request->c_test2;
            $fche->tannin_cal = $request->tannin_cal;
            $fche->tannin_cal_test1 = $request->tannin_cal_test1;
            $fche->tannin_cal_test2 = $request->tannin_cal_test2;
            $fche->tannin = $request->tannin;
            $fche->tannin_test1 = $request->tannin_test1;
            $fche->tannin_test2 = $request->tannin_test2;
            $fche->remark = $request->remark;
            $fche->analysed_name = $request->analysed_name;
            $fche->analysed_date = $request->analysed_date;
            $fche->checked_name = $request->checked_name;
            $fche->checked_date = $request->checked_date;
            $fche->save();

            if($fche)
            {
                $fche_finance = new Fche040123Finance;
                $fche_finance->fche040123_id = $fche->id;
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
        $che = Fche040123::find($id);
        return view('backend.labs.others.fche040123s.detail',compact('che'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $che = Fche040123::find($id);
        return view('backend.labs.others.fche040123s.edit',compact('che'));
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
            $fche = Fche040123::find($id);
            if($fche->analysed_sign != null && $request->file("analysed_sign")){
                if(file_exists(public_path('photos/other_fche040123s/analysed_sign/'.$fche->analysed_sign))){

                    unlink('photos/other_fche040123s/analysed_sign/'.$fche->analysed_sign);

                }
            }

            if($fche->checked_sign != null && $request->file("checked_sign")){
                if(file_exists(public_path('photos/other_fche040123s/checked_sign/'.$fche->checked_sign))){

                    unlink('photos/other_fche040123s/checked_sign/'.$fche->checked_sign);

                }
            }

            if($request->file("analysed_sign")) {
                $file=$request->file("analysed_sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/other_fche040123s/analysed_sign');
                $file->move($path, $filename);

                $fche->analysed_sign = $filename;
            }

            if($request->file("checked_sign")) {
                $file=$request->file("checked_sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/other_fche040123s/checked_sign');
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
            $fche->gelatin = $request->gelatin;
            $fche->gelatin_test1 = $request->gelatin_test1;
            $fche->gelatin_test2 = $request->gelatin_test2;
            $fche->kaolin = $request->kaolin;
            $fche->kaolin_test1 = $request->kaolin_test1;
            $fche->kaolin_test2 = $request->kaolin_test2;
            $fche->indigo = $request->indigo;
            $fche->indigo_test1 = $request->indigo_test1;
            $fche->indigo_test2 = $request->indigo_test2;
            $fche->potassium = $request->potassium;
            $fche->potassium_test1 = $request->potassium_test1;
            $fche->potassium_test2 = $request->potassium_test2;
            $fche->filtratea = $request->filtratea;
            $fche->filtratea_test1 = $request->filtratea_test1;
            $fche->filtratea_test2 = $request->filtratea_test2;
            $fche->filtrateb = $request->filtrateb;
            $fche->filtrateb_test1 = $request->filtrateb_test1;
            $fche->filtrateb_test2 = $request->filtrateb_test2;
            $fche->f = $request->f;
            $fche->f_test1 = $request->f_test1;
            $fche->f_test2 = $request->f_test2;
            $fche->c = $request->c;
            $fche->c_test1 = $request->c_test1;
            $fche->c_test2 = $request->c_test2;
            $fche->tannin_cal = $request->tannin_cal;
            $fche->tannin_cal_test1 = $request->tannin_cal_test1;
            $fche->tannin_cal_test2 = $request->tannin_cal_test2;
            $fche->tannin = $request->tannin;
            $fche->tannin_test1 = $request->tannin_test1;
            $fche->tannin_test2 = $request->tannin_test2;
            $fche->remark = $request->remark;
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
        $che = Fche040123::find($id);

        if($che->analysed_sign != null){
            if(file_exists(public_path('photos/other_fche040123s/analysed_sign/'.$che->analysed_sign))){

                unlink('photos/other_fche040123s/analysed_sign/'.$che->analysed_sign);

            }
        }

        if($che->checked_sign != null){
            if(file_exists(public_path('photos/other_fche040123s/checked_sign/'.$che->checked_sign))){

                unlink('photos/other_fche040123s/checked_sign/'.$che->checked_sign);

            }
        }

        Fche040123::where('id',$id)->delete();
        Fche040123Finance::where('fche040123_id',$id)->delete();

        return back()->with('success', 'Deleted successfully!');
    }

    public function print($id)
    {
        $che = Fche040123::find($id);
        return view('backend.labs.others.fche040123s.print',compact('che'));
    }
}
