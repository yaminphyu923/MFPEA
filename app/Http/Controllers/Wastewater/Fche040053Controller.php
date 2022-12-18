<?php

namespace App\Http\Controllers\Wastewater;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Wastewater\Fche040053;
use App\Models\Wastewater\Fche040053Finance;

class Fche040053Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:FIDSL-Che-04-00/53', ['only' => ['create']]);
    }
    public function index()
    {
        $fches = Fche040053::all();
        return view('backend.labs.wastewater.fche040053s.show',compact('fches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.labs.wastewater.fche040053s.create');
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
            $fche = new Fche040053;

            if($request->file("analysed_sign")) {
                $file=$request->file("analysed_sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/ww_fche040053s/analysed_sign');
                $file->move($path, $filename);

                $fche->analysed_sign = $filename;
            }

            if($request->file("checked_sign")) {
                $file=$request->file("checked_sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/ww_fche040053s/checked_sign');
                $file->move($path, $filename);

                $fche->checked_sign = $filename;
            }

            $fche->job_number = $request->job_number;
            $fche->product_name = $request->product_name;
            $fche->received_date = $request->received_date;
            $fche->initiated_date = $request->initiated_date;
            $fche->reported_date = $request->reported_date;
            $fche->method = $request->method;
            $fche->bod = $request->bod;
            $fche->bod_test1 = $request->bod_test1;
            $fche->bod_test2 = $request->bod_test2;
            $fche->volume = $request->volume;
            $fche->volume_test1 = $request->volume_test1;
            $fche->volume_test2 = $request->volume_test2;
            $fche->dilution = $request->dilution;
            $fche->dilution_test1 = $request->dilution_test1;
            $fche->dilution_test2 = $request->dilution_test2;
            $fche->pillow = $request->pillow;
            $fche->pillow_test1 = $request->pillow_test1;
            $fche->pillow_test2 = $request->pillow_test2;
            $fche->pellet = $request->pellet;
            $fche->pellet_test1 = $request->pellet_test1;
            $fche->pellet_test2 = $request->pellet_test2;
            $fche->incubation = $request->incubation;
            $fche->incubation_test1 = $request->incubation_test1;
            $fche->incubation_test2 = $request->incubation_test2;
            $fche->reading = $request->reading;
            $fche->reading_test1 = $request->reading_test1;
            $fche->reading_test2 = $request->reading_test2;
            $fche->bod_cal = $request->bod_cal;
            $fche->bod_cal_test1 = $request->bod_cal_test1;
            $fche->bod_cal_test2 = $request->bod_cal_test2;
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
                $fche_finance = new Fche040053Finance;
                $fche_finance->fche040053_id = $fche->id;
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
        $che = Fche040053::find($id);
        return view('backend.labs.wastewater.fche040053s.detail',compact('che'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $che = Fche040053::find($id);
        return view('backend.labs.wastewater.fche040053s.edit',compact('che'));
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
            $fche = Fche040053::find($id);
            if($fche->analysed_sign != null && $request->file("analysed_sign")){
                if(file_exists(public_path('photos/ww_fche040053s/analysed_sign/'.$fche->analysed_sign))){

                    unlink('photos/ww_fche040053s/analysed_sign/'.$fche->analysed_sign);

                }
            }

            if($fche->checked_sign != null && $request->file("checked_sign")){
                if(file_exists(public_path('photos/ww_fche040053s/checked_sign/'.$fche->checked_sign))){

                    unlink('photos/ww_fche040053s/checked_sign/'.$fche->checked_sign);

                }
            }

            if($request->file("analysed_sign")) {
                $file=$request->file("analysed_sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/ww_fche040053s/analysed_sign');
                $file->move($path, $filename);

                $fche->analysed_sign = $filename;
            }

            if($request->file("checked_sign")) {
                $file=$request->file("checked_sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/ww_fche040053s/checked_sign');
                $file->move($path, $filename);

                $fche->checked_sign = $filename;
            }

            $fche->job_number = $request->job_number;
            $fche->product_name = $request->product_name;
            $fche->received_date = $request->received_date;
            $fche->initiated_date = $request->initiated_date;
            $fche->reported_date = $request->reported_date;
            $fche->method = $request->method;
            $fche->bod = $request->bod;
            $fche->bod_test1 = $request->bod_test1;
            $fche->bod_test2 = $request->bod_test2;
            $fche->volume = $request->volume;
            $fche->volume_test1 = $request->volume_test1;
            $fche->volume_test2 = $request->volume_test2;
            $fche->dilution = $request->dilution;
            $fche->dilution_test1 = $request->dilution_test1;
            $fche->dilution_test2 = $request->dilution_test2;
            $fche->pillow = $request->pillow;
            $fche->pillow_test1 = $request->pillow_test1;
            $fche->pillow_test2 = $request->pillow_test2;
            $fche->pellet = $request->pellet;
            $fche->pellet_test1 = $request->pellet_test1;
            $fche->pellet_test2 = $request->pellet_test2;
            $fche->incubation = $request->incubation;
            $fche->incubation_test1 = $request->incubation_test1;
            $fche->incubation_test2 = $request->incubation_test2;
            $fche->reading = $request->reading;
            $fche->reading_test1 = $request->reading_test1;
            $fche->reading_test2 = $request->reading_test2;
            $fche->bod_cal = $request->bod_cal;
            $fche->bod_cal_test1 = $request->bod_cal_test1;
            $fche->bod_cal_test2 = $request->bod_cal_test2;
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
        $che = Fche040053::find($id);

        if($che->analysed_sign != null){
            if(file_exists(public_path('photos/ww_fche040053s/analysed_sign/'.$che->analysed_sign))){

                unlink('photos/ww_fche040053s/analysed_sign/'.$che->analysed_sign);

            }
        }

        if($che->checked_sign != null){
            if(file_exists(public_path('photos/ww_fche040053s/checked_sign/'.$che->checked_sign))){

                unlink('photos/ww_fche040053s/checked_sign/'.$che->checked_sign);

            }
        }

        Fche040053::where('id',$id)->delete();
        Fche040053Finance::where('fche040053_id',$id)->delete();

        return back()->with('success', 'Deleted successfully!');
    }

    public function print($id)
    {
        $che = Fche040053::find($id);
        return view('backend.labs.wastewater.fche040053s.print',compact('che'));
    }
}
