<?php

namespace App\Http\Controllers\Wastewater;

use Exception;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Wastewater\Fche040060;
use App\Models\Wastewater\Fche040060Finance;

class Fche040060Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:FIDSL-Che-04-00/60', ['only' => ['create']]);
    }
    public function index()
    {
        $fches = Fche040060::all();
        return view('backend.labs.wastewater.fche040060s.show',compact('fches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.labs.wastewater.fche040060s.create');
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
            $fche = new Fche040060;

            if($request->file("analysed_sign")) {
                $file=$request->file("analysed_sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/ww_fche040060s/analysed_sign');
                $file->move($path, $filename);

                $fche->analysed_sign = $filename;
            }

            if($request->file("checked_sign")) {
                $file=$request->file("checked_sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/ww_fche040060s/checked_sign');
                $file->move($path, $filename);

                $fche->checked_sign = $filename;
            }

            $fche->job_number = $request->job_number;
            $fche->product_name = $request->product_name;
            $fche->received_date = $request->received_date;
            $fche->initiated_date = $request->initiated_date;
            $fche->reported_date = $request->reported_date;
            $fche->method = $request->method;
            $fche->sulfide = $request->sulfide;
            $fche->sulfide_test1 = $request->sulfide_test1;
            $fche->sulfide_test2 = $request->sulfide_test2;
            $fche->volume = $request->volume;
            $fche->volume_test1 = $request->volume_test1;
            $fche->volume_test2 = $request->volume_test2;
            $fche->dilution = $request->dilution;
            $fche->dilution_test1 = $request->dilution_test1;
            $fche->dilution_test2 = $request->dilution_test2;
            $fche->solutiona = $request->solutiona;
            $fche->solutiona_test1 = $request->solutiona_test1;
            $fche->solutiona_test2 = $request->solutiona_test2;
            $fche->reaction_time = $request->reaction_time;
            $fche->reaction_time_test1 = $request->reaction_time_test1;
            $fche->reaction_time_test2 = $request->reaction_time_test2;
            $fche->reading = $request->reading;
            $fche->reading_test1 = $request->reading_test1;
            $fche->reading_test2 = $request->reading_test2;
            $fche->sulfide_cal = $request->sulfide_cal;
            $fche->sulfide_cal_test1 = $request->sulfide_cal_test1;
            $fche->sulfide_cal_test2 = $request->sulfide_cal_test2;
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
                $fche_finance = new Fche040060Finance;
                $fche_finance->fche040060_id = $fche->id;
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
        $che = Fche040060::find($id);
        return view('backend.labs.wastewater.fche040060s.detail',compact('che'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $che = Fche040060::find($id);
        return view('backend.labs.wastewater.fche040060s.edit',compact('che'));
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
            $fche = Fche040060::find($id);
            if($fche->analysed_sign != null && $request->file("analysed_sign")){
                if(file_exists(public_path('photos/ww_fche040060s/analysed_sign/'.$fche->analysed_sign))){

                    unlink('photos/ww_fche040060s/analysed_sign/'.$fche->analysed_sign);

                }
            }

            if($fche->checked_sign != null && $request->file("checked_sign")){
                if(file_exists(public_path('photos/ww_fche040060s/checked_sign/'.$fche->checked_sign))){

                    unlink('photos/ww_fche040060s/checked_sign/'.$fche->checked_sign);

                }
            }

            if($request->file("analysed_sign")) {
                $file=$request->file("analysed_sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/ww_fche040060s/analysed_sign');
                $file->move($path, $filename);

                $fche->analysed_sign = $filename;
            }

            if($request->file("checked_sign")) {
                $file=$request->file("checked_sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/ww_fche040060s/checked_sign');
                $file->move($path, $filename);

                $fche->checked_sign = $filename;
            }

            $fche->job_number = $request->job_number;
            $fche->product_name = $request->product_name;
            $fche->received_date = $request->received_date;
            $fche->initiated_date = $request->initiated_date;
            $fche->reported_date = $request->reported_date;
            $fche->method = $request->method;
            $fche->sulfide = $request->sulfide;
            $fche->sulfide_test1 = $request->sulfide_test1;
            $fche->sulfide_test2 = $request->sulfide_test2;
            $fche->volume = $request->volume;
            $fche->volume_test1 = $request->volume_test1;
            $fche->volume_test2 = $request->volume_test2;
            $fche->dilution = $request->dilution;
            $fche->dilution_test1 = $request->dilution_test1;
            $fche->dilution_test2 = $request->dilution_test2;
            $fche->solutiona = $request->solutiona;
            $fche->solutiona_test1 = $request->solutiona_test1;
            $fche->solutiona_test2 = $request->solutiona_test2;
            $fche->reaction_time = $request->reaction_time;
            $fche->reaction_time_test1 = $request->reaction_time_test1;
            $fche->reaction_time_test2 = $request->reaction_time_test2;
            $fche->reading = $request->reading;
            $fche->reading_test1 = $request->reading_test1;
            $fche->reading_test2 = $request->reading_test2;
            $fche->sulfide_cal = $request->sulfide_cal;
            $fche->sulfide_cal_test1 = $request->sulfide_cal_test1;
            $fche->sulfide_cal_test2 = $request->sulfide_cal_test2;
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
        $che = Fche040060::find($id);

        if($che->analysed_sign != null){
            if(file_exists(public_path('photos/ww_fche040060s/analysed_sign/'.$che->analysed_sign))){

                unlink('photos/ww_fche040060s/analysed_sign/'.$che->analysed_sign);

            }
        }

        if($che->checked_sign != null){
            if(file_exists(public_path('photos/ww_fche040060s/checked_sign/'.$che->checked_sign))){

                unlink('photos/ww_fche040060s/checked_sign/'.$che->checked_sign);

            }
        }

        Fche040060::where('id',$id)->delete();
        Fche040060Finance::where('fche040060_id',$id)->delete();

        return back()->with('success', 'Deleted successfully!');
    }

    public function print($id)
    {
        $che = Fche040060::find($id);
        return view('backend.labs.wastewater.fche040060s.print',compact('che'));
    }
}
