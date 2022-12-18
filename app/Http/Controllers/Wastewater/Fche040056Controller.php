<?php

namespace App\Http\Controllers\Wastewater;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Wastewater\Fche040056;
use App\Models\Wastewater\Fche040056Finance;

class Fche040056Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:FIDSL-Che-04-00/56', ['only' => ['create']]);
    }
    public function index()
    {
        $fches = Fche040056::all();
        return view('backend.labs.wastewater.fche040056s.show',compact('fches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.labs.wastewater.fche040056s.create');
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
            $fche = new Fche040056;

            if($request->file("analysed_sign")) {
                $file=$request->file("analysed_sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/ww_fche040056s/analysed_sign');
                $file->move($path, $filename);

                $fche->analysed_sign = $filename;
            }

            if($request->file("checked_sign")) {
                $file=$request->file("checked_sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/ww_fche040056s/checked_sign');
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
            $fche->potassium = $request->potassium;
            $fche->potassium_test1 = $request->potassium_test1;
            $fche->potassium_test2 = $request->potassium_test2;
            $fche->temperature = $request->temperature;
            $fche->temperature_test1 = $request->temperature_test1;
            $fche->temperature_test2 = $request->temperature_test2;
            $fche->reactor_time = $request->reactor_time;
            $fche->reactor_time_test1 = $request->reactor_time_test1;
            $fche->reactor_time_test2 = $request->reactor_time_test2;
            $fche->sodium = $request->sodium;
            $fche->sodium_test1 = $request->sodium_test1;
            $fche->sodium_test2 = $request->sodium_test2;
            $fche->phosver = $request->phosver;
            $fche->phosver_test1 = $request->phosver_test1;
            $fche->phosver_test2 = $request->phosver_test2;
            $fche->reaction_time = $request->reaction_time;
            $fche->reaction_time_test1 = $request->reaction_time_test1;
            $fche->reaction_time_test2 = $request->reaction_time_test2;
            $fche->reading = $request->reading;
            $fche->reading_test1 = $request->reading_test1;
            $fche->reading_test2 = $request->reading_test2;
            $fche->phos = $request->phos;
            $fche->phos_test1 = $request->phos_test1;
            $fche->phos_test2 = $request->phos_test2;
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
                $fche_finance = new Fche040056Finance;
                $fche_finance->fche040056_id = $fche->id;
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
        $che = Fche040056::find($id);
        return view('backend.labs.wastewater.fche040056s.detail',compact('che'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $che = Fche040056::find($id);
        return view('backend.labs.wastewater.fche040056s.edit',compact('che'));
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
            $fche = Fche040056::find($id);
            if($fche->analysed_sign != null && $request->file("analysed_sign")){
                if(file_exists(public_path('photos/ww_fche040056s/analysed_sign/'.$fche->analysed_sign))){

                    unlink('photos/ww_fche040056s/analysed_sign/'.$fche->analysed_sign);

                }
            }

            if($fche->checked_sign != null && $request->file("checked_sign")){
                if(file_exists(public_path('photos/ww_fche040056s/checked_sign/'.$fche->checked_sign))){

                    unlink('photos/ww_fche040056s/checked_sign/'.$fche->checked_sign);

                }
            }

            if($request->file("analysed_sign")) {
                $file=$request->file("analysed_sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/ww_fche040056s/analysed_sign');
                $file->move($path, $filename);

                $fche->analysed_sign = $filename;
            }

            if($request->file("checked_sign")) {
                $file=$request->file("checked_sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/ww_fche040056s/checked_sign');
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
            $fche->potassium = $request->potassium;
            $fche->potassium_test1 = $request->potassium_test1;
            $fche->potassium_test2 = $request->potassium_test2;
            $fche->temperature = $request->temperature;
            $fche->temperature_test1 = $request->temperature_test1;
            $fche->temperature_test2 = $request->temperature_test2;
            $fche->reactor_time = $request->reactor_time;
            $fche->reactor_time_test1 = $request->reactor_time_test1;
            $fche->reactor_time_test2 = $request->reactor_time_test2;
            $fche->sodium = $request->sodium;
            $fche->sodium_test1 = $request->sodium_test1;
            $fche->sodium_test2 = $request->sodium_test2;
            $fche->phosver = $request->phosver;
            $fche->phosver_test1 = $request->phosver_test1;
            $fche->phosver_test2 = $request->phosver_test2;
            $fche->reaction_time = $request->reaction_time;
            $fche->reaction_time_test1 = $request->reaction_time_test1;
            $fche->reaction_time_test2 = $request->reaction_time_test2;
            $fche->reading = $request->reading;
            $fche->reading_test1 = $request->reading_test1;
            $fche->reading_test2 = $request->reading_test2;
            $fche->phos = $request->phos;
            $fche->phos_test1 = $request->phos_test1;
            $fche->phos_test2 = $request->phos_test2;
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
        $che = Fche040056::find($id);

        if($che->analysed_sign != null){
            if(file_exists(public_path('photos/ww_fche040056s/analysed_sign/'.$che->analysed_sign))){

                unlink('photos/ww_fche040056s/analysed_sign/'.$che->analysed_sign);

            }
        }

        if($che->checked_sign != null){
            if(file_exists(public_path('photos/ww_fche040056s/checked_sign/'.$che->checked_sign))){

                unlink('photos/ww_fche040056s/checked_sign/'.$che->checked_sign);

            }
        }

        Fche040056::where('id',$id)->delete();
        Fche040056Finance::where('fche040056_id',$id)->delete();

        return back()->with('success', 'Deleted successfully!');
    }

    public function print($id)
    {
        $che = Fche040056::find($id);
        return view('backend.labs.wastewater.fche040056s.print',compact('che'));
    }
}
