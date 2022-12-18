<?php

namespace App\Http\Controllers\Others;

use Illuminate\Http\Request;
use App\Models\Others\Fche040125;
use App\Http\Controllers\Controller;
use App\Models\Others\Fche040125Finance;
use Exception;

class Fche040125Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:FIDSL-Che-04-01/25', ['only' => ['create']]);
    }
    public function index()
    {
        $fches = Fche040125::all();
        return view('backend.labs.others.fche040125s.show',compact('fches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.labs.others.fche040125s.create');
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
            $fche = new Fche040125;

            if($request->file("analysed_sign")) {
                $file=$request->file("analysed_sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/other_fche040125s/analysed_sign');
                $file->move($path, $filename);

                $fche->analysed_sign = $filename;
            }

            if($request->file("checked_sign")) {
                $file=$request->file("checked_sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/other_fche040125s/checked_sign');
                $file->move($path, $filename);

                $fche->checked_sign = $filename;
            }

            $fche->job_number = $request->job_number;
            $fche->sample_name = $request->sample_name;
            $fche->received_date = $request->received_date;
            $fche->initiated_date = $request->initiated_date;
            $fche->reported_date = $request->reported_date;
            $fche->method = $request->method;
            $fche->dilution = $request->dilution;
            $fche->dilution_test1 = $request->dilution_test1;
            $fche->dilution_test2 = $request->dilution_test2;
            $fche->temperature = $request->temperature;
            $fche->temperature_test1 = $request->temperature_test1;
            $fche->temperature_test2 = $request->temperature_test2;
            $fche->brix_reading = $request->brix_reading;
            $fche->brix_reading_test1 = $request->brix_reading_test1;
            $fche->brix_reading_test2 = $request->brix_reading_test2;
            $fche->brix = $request->brix;
            $fche->brix_test1 = $request->brix_test1;
            $fche->brix_test2 = $request->brix_test2;
            $fche->remark = $request->remark;
            $fche->analysed_name = $request->analysed_name;
            $fche->analysed_date = $request->analysed_date;
            $fche->checked_name = $request->checked_name;
            $fche->checked_date = $request->checked_date;
            $fche->save();

            if($fche)
            {
                $fche_finance = new Fche040125Finance;
                $fche_finance->fche040125_id = $fche->id;
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
        $che = Fche040125::find($id);
        return view('backend.labs.others.fche040125s.detail',compact('che'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $che = Fche040125::find($id);
        return view('backend.labs.others.fche040125s.edit',compact('che'));
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
            $fche = Fche040125::find($id);
            if($fche->analysed_sign != null && $request->file("analysed_sign")){
                if(file_exists(public_path('photos/other_fche040125s/analysed_sign/'.$fche->analysed_sign))){

                    unlink('photos/other_fche040125s/analysed_sign/'.$fche->analysed_sign);

                }
            }

            if($fche->checked_sign != null && $request->file("checked_sign")){
                if(file_exists(public_path('photos/other_fche040125s/checked_sign/'.$fche->checked_sign))){

                    unlink('photos/other_fche040125s/checked_sign/'.$fche->checked_sign);

                }
            }

            if($request->file("analysed_sign")) {
                $file=$request->file("analysed_sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/other_fche040125s/analysed_sign');
                $file->move($path, $filename);

                $fche->analysed_sign = $filename;
            }

            if($request->file("checked_sign")) {
                $file=$request->file("checked_sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/other_fche040125s/checked_sign');
                $file->move($path, $filename);

                $fche->checked_sign = $filename;
            }

            $fche->job_number = $request->job_number;
            $fche->sample_name = $request->sample_name;
            $fche->received_date = $request->received_date;
            $fche->initiated_date = $request->initiated_date;
            $fche->reported_date = $request->reported_date;
            $fche->method = $request->method;
            $fche->dilution = $request->dilution;
            $fche->dilution_test1 = $request->dilution_test1;
            $fche->dilution_test2 = $request->dilution_test2;
            $fche->temperature = $request->temperature;
            $fche->temperature_test1 = $request->temperature_test1;
            $fche->temperature_test2 = $request->temperature_test2;
            $fche->brix_reading = $request->brix_reading;
            $fche->brix_reading_test1 = $request->brix_reading_test1;
            $fche->brix_reading_test2 = $request->brix_reading_test2;
            $fche->brix = $request->brix;
            $fche->brix_test1 = $request->brix_test1;
            $fche->brix_test2 = $request->brix_test2;
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
        $che = Fche040125::find($id);

        if($che->analysed_sign != null){
            if(file_exists(public_path('photos/other_fche040125s/analysed_sign/'.$che->analysed_sign))){

                unlink('photos/other_fche040125s/analysed_sign/'.$che->analysed_sign);

            }
        }

        if($che->checked_sign != null){
            if(file_exists(public_path('photos/other_fche040125s/checked_sign/'.$che->checked_sign))){

                unlink('photos/other_fche040125s/checked_sign/'.$che->checked_sign);

            }
        }

        Fche040125::where('id',$id)->delete();
        Fche040125Finance::where('fche040125_id',$id)->delete();

        return back()->with('success', 'Deleted successfully!');
    }

    public function print($id)
    {
        $che = Fche040125::find($id);
        return view('backend.labs.others.fche040125s.print',compact('che'));
    }
}
