<?php

namespace App\Http\Controllers\Wastewater;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Wastewater\Fche040055;
use App\Models\Wastewater\Fche040055Finance;

class Fche040055Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:FIDSL-Che-04-00/55', ['only' => ['create']]);
    }
    public function index()
    {
        $fches = Fche040055::all();
        return view('backend.labs.wastewater.fche040055s.show',compact('fches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.labs.wastewater.fche040055s.create');
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
            $fche = new Fche040055;

            if($request->file("analysed_sign")) {
                $file=$request->file("analysed_sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/ww_fche040055s/analysed_sign');
                $file->move($path, $filename);

                $fche->analysed_sign = $filename;
            }

            if($request->file("checked_sign")) {
                $file=$request->file("checked_sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/ww_fche040055s/checked_sign');
                $file->move($path, $filename);

                $fche->checked_sign = $filename;
            }

            $fche->job_number = $request->job_number;
            $fche->product_name = $request->product_name;
            $fche->received_date = $request->received_date;
            $fche->initiated_date = $request->initiated_date;
            $fche->reported_date = $request->reported_date;
            $fche->method = $request->method;
            $fche->volume = $request->volume;
            $fche->volume_test1 = $request->volume_test1;
            $fche->volume_test2 = $request->volume_test2;
            $fche->dilution = $request->dilution;
            $fche->dilution_test1 = $request->dilution_test1;
            $fche->dilution_test2 = $request->dilution_test2;
            $fche->solutiona = $request->solutiona;
            $fche->solutiona_test1 = $request->solutiona_test1;
            $fche->solutiona_test2 = $request->solutiona_test2;
            $fche->btablet = $request->btablet;
            $fche->btablet_test1 = $request->btablet_test1;
            $fche->btablet_test2 = $request->btablet_test2;
            $fche->temperature = $request->temperature;
            $fche->temperature_test1 = $request->temperature_test1;
            $fche->temperature_test2 = $request->temperature_test2;
            $fche->time = $request->time;
            $fche->time_test1 = $request->time_test1;
            $fche->time_test2 = $request->time_test2;
            $fche->digested = $request->digested;
            $fche->digested_test1 = $request->digested_test1;
            $fche->digested_test2 = $request->digested_test2;
            $fche->solutiond = $request->solutiond;
            $fche->solutiond_test1 = $request->solutiond_test1;
            $fche->solutiond_test2 = $request->solutiond_test2;
            $fche->reaction = $request->reaction;
            $fche->reaction_test1 = $request->reaction_test1;
            $fche->reaction_test2 = $request->reaction_test2;
            $fche->reading = $request->reading;
            $fche->reading_test1 = $request->reading_test1;
            $fche->reading_test2 = $request->reading_test2;
            $fche->nitrogen = $request->nitrogen;
            $fche->nitrogen_test1 = $request->nitrogen_test1;
            $fche->nitrogen_test2 = $request->nitrogen_test2;
            $fche->result = $request->result;
            $fche->result_test1 = $request->result_test1;
            $fche->result_test2 = $request->result_test2;
            $fche->analysed_name = $request->analysed_name;
            $fche->analysed_date = $request->analysed_date;
            $fche->checked_name = $request->checked_name;
            $fche->checked_date = $request->checked_date;
            $fche->save();

            if($fche)
            {
                $fche_finance = new Fche040055Finance;
                $fche_finance->fche040055_id = $fche->id;
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
        $che = Fche040055::find($id);
        return view('backend.labs.wastewater.fche040055s.detail',compact('che'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $che = Fche040055::find($id);
        return view('backend.labs.wastewater.fche040055s.edit',compact('che'));
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
            $fche = Fche040055::find($id);
            if($fche->analysed_sign != null && $request->file("analysed_sign")){
                if(file_exists(public_path('photos/ww_fche040055s/analysed_sign/'.$fche->analysed_sign))){

                    unlink('photos/ww_fche040055s/analysed_sign/'.$fche->analysed_sign);

                }
            }

            if($fche->checked_sign != null && $request->file("checked_sign")){
                if(file_exists(public_path('photos/ww_fche040055s/checked_sign/'.$fche->checked_sign))){

                    unlink('photos/ww_fche040055s/checked_sign/'.$fche->checked_sign);

                }
            }

            if($request->file("analysed_sign")) {
                $file=$request->file("analysed_sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/ww_fche040055s/analysed_sign');
                $file->move($path, $filename);

                $fche->analysed_sign = $filename;
            }

            if($request->file("checked_sign")) {
                $file=$request->file("checked_sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/ww_fche040055s/checked_sign');
                $file->move($path, $filename);

                $fche->checked_sign = $filename;
            }

            $fche->job_number = $request->job_number;
            $fche->product_name = $request->product_name;
            $fche->received_date = $request->received_date;
            $fche->initiated_date = $request->initiated_date;
            $fche->reported_date = $request->reported_date;
            $fche->method = $request->method;
            $fche->volume = $request->volume;
            $fche->volume_test1 = $request->volume_test1;
            $fche->volume_test2 = $request->volume_test2;
            $fche->dilution = $request->dilution;
            $fche->dilution_test1 = $request->dilution_test1;
            $fche->dilution_test2 = $request->dilution_test2;
            $fche->solutiona = $request->solutiona;
            $fche->solutiona_test1 = $request->solutiona_test1;
            $fche->solutiona_test2 = $request->solutiona_test2;
            $fche->btablet = $request->btablet;
            $fche->btablet_test1 = $request->btablet_test1;
            $fche->btablet_test2 = $request->btablet_test2;
            $fche->temperature = $request->temperature;
            $fche->temperature_test1 = $request->temperature_test1;
            $fche->temperature_test2 = $request->temperature_test2;
            $fche->time = $request->time;
            $fche->time_test1 = $request->time_test1;
            $fche->time_test2 = $request->time_test2;
            $fche->digested = $request->digested;
            $fche->digested_test1 = $request->digested_test1;
            $fche->digested_test2 = $request->digested_test2;
            $fche->solutiond = $request->solutiond;
            $fche->solutiond_test1 = $request->solutiond_test1;
            $fche->solutiond_test2 = $request->solutiond_test2;
            $fche->reaction = $request->reaction;
            $fche->reaction_test1 = $request->reaction_test1;
            $fche->reaction_test2 = $request->reaction_test2;
            $fche->reading = $request->reading;
            $fche->reading_test1 = $request->reading_test1;
            $fche->reading_test2 = $request->reading_test2;
            $fche->nitrogen = $request->nitrogen;
            $fche->nitrogen_test1 = $request->nitrogen_test1;
            $fche->nitrogen_test2 = $request->nitrogen_test2;
            $fche->result = $request->result;
            $fche->result_test1 = $request->result_test1;
            $fche->result_test2 = $request->result_test2;
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
        $che = Fche040055::find($id);

        if($che->analysed_sign != null){
            if(file_exists(public_path('photos/ww_fche040055s/analysed_sign/'.$che->analysed_sign))){

                unlink('photos/ww_fche040055s/analysed_sign/'.$che->analysed_sign);

            }
        }

        if($che->checked_sign != null){
            if(file_exists(public_path('photos/ww_fche040055s/checked_sign/'.$che->checked_sign))){

                unlink('photos/ww_fche040055s/checked_sign/'.$che->checked_sign);

            }
        }

        Fche040055::where('id',$id)->delete();
        Fche040055Finance::where('fche040055_id',$id)->delete();

        return back()->with('success', 'Deleted successfully!');
    }

    public function print($id)
    {
        $che = Fche040055::find($id);
        return view('backend.labs.wastewater.fche040055s.print',compact('che'));
    }
}
