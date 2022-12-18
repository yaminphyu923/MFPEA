<?php

namespace App\Http\Controllers\Wastewater;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Wastewater\Fche040059;
use App\Models\Wastewater\Fche040059Finance;

class Fche040059Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:FIDSL-Che-04-00/59', ['only' => ['create']]);
    }
    public function index()
    {
        $fches = Fche040059::all();
        return view('backend.labs.wastewater.fche040059s.show',compact('fches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.labs.wastewater.fche040059s.create');
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
            $fche = new Fche040059;

            if($request->file("analysed_sign")) {
                $file=$request->file("analysed_sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/ww_fche040059s/analysed_sign');
                $file->move($path, $filename);

                $fche->analysed_sign = $filename;
            }

            if($request->file("checked_sign")) {
                $file=$request->file("checked_sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/ww_fche040059s/checked_sign');
                $file->move($path, $filename);

                $fche->checked_sign = $filename;
            }

            $fche->job_number = $request->job_number;
            $fche->product_name = $request->product_name;
            $fche->received_date = $request->received_date;
            $fche->initiated_date = $request->initiated_date;
            $fche->reported_date = $request->reported_date;
            $fche->method = $request->method;
            $fche->lead_range = $request->lead_range;
            $fche->lead_range_test1 = $request->lead_range_test1;
            $fche->lead_range_test2 = $request->lead_range_test2;
            $fche->volume = $request->volume;
            $fche->volume_test1 = $request->volume_test1;
            $fche->volume_test2 = $request->volume_test2;
            $fche->dilution = $request->dilution;
            $fche->dilution_test1 = $request->dilution_test1;
            $fche->dilution_test2 = $request->dilution_test2;
            $fche->reagenta = $request->reagenta;
            $fche->reagenta_test1 = $request->reagenta_test1;
            $fche->reagenta_test2 = $request->reagenta_test2;
            $fche->reaction_time = $request->reaction_time;
            $fche->reaction_time_test1 = $request->reaction_time_test1;
            $fche->reaction_time_test2 = $request->reaction_time_test2;
            $fche->solutionb = $request->solutionb;
            $fche->solutionb_test1 = $request->solutionb_test1;
            $fche->solutionb_test2 = $request->solutionb_test2;
            $fche->treated = $request->treated;
            $fche->treated_test1 = $request->treated_test1;
            $fche->treated_test2 = $request->treated_test2;
            $fche->reaction_time2 = $request->reaction_time2;
            $fche->reaction_time2_test1 = $request->reaction_time2_test1;
            $fche->reaction_time2_test2 = $request->reaction_time2_test2;
            $fche->read = $request->read;
            $fche->read_test1 = $request->read_test1;
            $fche->read_test2 = $request->read_test2;
            $fche->solutionc = $request->solutionc;
            $fche->solutionc_test1 = $request->solutionc_test1;
            $fche->solutionc_test2 = $request->solutionc_test2;
            $fche->reaction_time3 = $request->reaction_time3;
            $fche->reaction_time3_test1 = $request->reaction_time3_test1;
            $fche->reaction_time3_test2 = $request->reaction_time3_test2;
            $fche->reading = $request->reading;
            $fche->reading_test1 = $request->reading_test1;
            $fche->reading_test2 = $request->reading_test2;
            $fche->lead = $request->lead;
            $fche->lead_test1 = $request->lead_test1;
            $fche->lead_test2 = $request->lead_test2;
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
                $fche_finance = new Fche040059Finance;
                $fche_finance->fche040059_id = $fche->id;
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
        $che = Fche040059::find($id);
        return view('backend.labs.wastewater.fche040059s.detail',compact('che'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $che = Fche040059::find($id);
        return view('backend.labs.wastewater.fche040059s.edit',compact('che'));
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
            $fche = Fche040059::find($id);
            if($fche->analysed_sign != null && $request->file("analysed_sign")){
                if(file_exists(public_path('photos/ww_fche040059s/analysed_sign/'.$fche->analysed_sign))){

                    unlink('photos/ww_fche040059s/analysed_sign/'.$fche->analysed_sign);

                }
            }

            if($fche->checked_sign != null && $request->file("checked_sign")){
                if(file_exists(public_path('photos/ww_fche040059s/checked_sign/'.$fche->checked_sign))){

                    unlink('photos/ww_fche040059s/checked_sign/'.$fche->checked_sign);

                }
            }

            if($request->file("analysed_sign")) {
                $file=$request->file("analysed_sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/ww_fche040059s/analysed_sign');
                $file->move($path, $filename);

                $fche->analysed_sign = $filename;
            }

            if($request->file("checked_sign")) {
                $file=$request->file("checked_sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/ww_fche040059s/checked_sign');
                $file->move($path, $filename);

                $fche->checked_sign = $filename;
            }

            $fche->job_number = $request->job_number;
            $fche->product_name = $request->product_name;
            $fche->received_date = $request->received_date;
            $fche->initiated_date = $request->initiated_date;
            $fche->reported_date = $request->reported_date;
            $fche->method = $request->method;
            $fche->lead_range = $request->lead_range;
            $fche->lead_range_test1 = $request->lead_range_test1;
            $fche->lead_range_test2 = $request->lead_range_test2;
            $fche->volume = $request->volume;
            $fche->volume_test1 = $request->volume_test1;
            $fche->volume_test2 = $request->volume_test2;
            $fche->dilution = $request->dilution;
            $fche->dilution_test1 = $request->dilution_test1;
            $fche->dilution_test2 = $request->dilution_test2;
            $fche->reagenta = $request->reagenta;
            $fche->reagenta_test1 = $request->reagenta_test1;
            $fche->reagenta_test2 = $request->reagenta_test2;
            $fche->reaction_time = $request->reaction_time;
            $fche->reaction_time_test1 = $request->reaction_time_test1;
            $fche->reaction_time_test2 = $request->reaction_time_test2;
            $fche->solutionb = $request->solutionb;
            $fche->solutionb_test1 = $request->solutionb_test1;
            $fche->solutionb_test2 = $request->solutionb_test2;
            $fche->treated = $request->treated;
            $fche->treated_test1 = $request->treated_test1;
            $fche->treated_test2 = $request->treated_test2;
            $fche->reaction_time2 = $request->reaction_time2;
            $fche->reaction_time2_test1 = $request->reaction_time2_test1;
            $fche->reaction_time2_test2 = $request->reaction_time2_test2;
            $fche->read = $request->read;
            $fche->read_test1 = $request->read_test1;
            $fche->read_test2 = $request->read_test2;
            $fche->solutionc = $request->solutionc;
            $fche->solutionc_test1 = $request->solutionc_test1;
            $fche->solutionc_test2 = $request->solutionc_test2;
            $fche->reaction_time3 = $request->reaction_time3;
            $fche->reaction_time3_test1 = $request->reaction_time3_test1;
            $fche->reaction_time3_test2 = $request->reaction_time3_test2;
            $fche->reading = $request->reading;
            $fche->reading_test1 = $request->reading_test1;
            $fche->reading_test2 = $request->reading_test2;
            $fche->lead = $request->lead;
            $fche->lead_test1 = $request->lead_test1;
            $fche->lead_test2 = $request->lead_test2;
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
        $che = Fche040059::find($id);

        if($che->analysed_sign != null){
            if(file_exists(public_path('photos/ww_fche040059s/analysed_sign/'.$che->analysed_sign))){

                unlink('photos/ww_fche040059s/analysed_sign/'.$che->analysed_sign);

            }
        }

        if($che->checked_sign != null){
            if(file_exists(public_path('photos/ww_fche040059s/checked_sign/'.$che->checked_sign))){

                unlink('photos/ww_fche040059s/checked_sign/'.$che->checked_sign);

            }
        }

        Fche040059::where('id',$id)->delete();
        Fche040059Finance::where('fche040059_id',$id)->delete();

        return back()->with('success', 'Deleted successfully!');
    }

    public function print($id)
    {
        $che = Fche040059::find($id);
        return view('backend.labs.wastewater.fche040059s.print',compact('che'));
    }
}
