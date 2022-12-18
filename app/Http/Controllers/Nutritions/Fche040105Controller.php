<?php

namespace App\Http\Controllers\Nutritions;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Nutritions\Fche040105;
use App\Models\Nutritions\Fche040105Finance;

class Fche040105Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // function __construct()
    // {
    //      $this->middleware('permission:FIDSL-Che-04-01/05', ['only' => ['create']]);
    // }
    public function index()
    {
        $fches = Fche040105::all();
        return view('backend.labs.nutritions.fche040105s.show',compact('fches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.labs.nutritions.fche040105s.create');
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
            $fche = new Fche040105;

            if($request->file("analysed_sign")) {
                $file=$request->file("analysed_sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/na_fche040105s/analysed_sign');
                $file->move($path, $filename);

                $fche->analysed_sign = $filename;
            }

            if($request->file("checked_sign")) {
                $file=$request->file("checked_sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/na_fche040105s/checked_sign');
                $file->move($path, $filename);

                $fche->checked_sign = $filename;
            }

            $fche->job_number = $request->job_number;
            $fche->sample_name = $request->sample_name;
            $fche->received_date = $request->received_date;
            $fche->initiated_date = $request->initiated_date;
            $fche->reported_date = $request->reported_date;
            $fche->method = $request->method;
            $fche->aluminium = $request->aluminium;
            $fche->aluminium_test1 = $request->aluminium_test1;
            $fche->aluminium_test2 = $request->aluminium_test2;
            $fche->sample = $request->sample;
            $fche->sample_test1 = $request->sample_test1;
            $fche->sample_test2 = $request->sample_test2;
            $fche->beakerplusresidue = $request->beakerplusresidue;
            $fche->beakerplusresidue_test1 = $request->beakerplusresidue_test1;
            $fche->beakerplusresidue_test2 = $request->beakerplusresidue_test2;
            $fche->residue = $request->residue;
            $fche->residue_test1 = $request->residue_test1;
            $fche->residue_test2 = $request->residue_test2;
            $fche->fat_cal = $request->fat_cal;
            $fche->fat_cal_test1 = $request->fat_cal_test1;
            $fche->fat_cal_test2 = $request->fat_cal_test2;
            $fche->result = $request->result;
            $fche->result_test1 = $request->result_test1;
            $fche->result_test2 = $request->result_test2;
            $fche->fat = $request->fat;
            $fche->fat_test1 = $request->fat_test1;
            $fche->fat_test2 = $request->fat_test2;
            $fche->analysed_name = $request->analysed_name;
            $fche->analysed_date = $request->analysed_date;
            $fche->checked_name = $request->checked_name;
            $fche->checked_date = $request->checked_date;
            $fche->save();

            if($fche)
            {
                $fche_finance = new Fche040105Finance;
                $fche_finance->fche040105_id = $fche->id;
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
        $che = Fche040105::find($id);
        return view('backend.labs.nutritions.fche040105s.detail',compact('che'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $che = Fche040105::find($id);
        return view('backend.labs.nutritions.fche040105s.edit',compact('che'));
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
            $fche = Fche040105::find($id);
            if($fche->analysed_sign != null && $request->file("analysed_sign")){
                if(file_exists(public_path('photos/na_fche040105s/analysed_sign/'.$fche->analysed_sign))){

                    unlink('photos/na_fche040105s/analysed_sign/'.$fche->analysed_sign);

                }
            }

            if($fche->checked_sign != null && $request->file("checked_sign")){
                if(file_exists(public_path('photos/na_fche040105s/checked_sign/'.$fche->checked_sign))){

                    unlink('photos/na_fche040105s/checked_sign/'.$fche->checked_sign);

                }
            }

            if($request->file("analysed_sign")) {
                $file=$request->file("analysed_sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/na_fche040105s/analysed_sign');
                $file->move($path, $filename);

                $fche->analysed_sign = $filename;
            }

            if($request->file("checked_sign")) {
                $file=$request->file("checked_sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/na_fche040105s/checked_sign');
                $file->move($path, $filename);

                $fche->checked_sign = $filename;
            }

            $fche->job_number = $request->job_number;
            $fche->sample_name = $request->sample_name;
            $fche->received_date = $request->received_date;
            $fche->initiated_date = $request->initiated_date;
            $fche->reported_date = $request->reported_date;
            $fche->method = $request->method;
            $fche->aluminium = $request->aluminium;
            $fche->aluminium_test1 = $request->aluminium_test1;
            $fche->aluminium_test2 = $request->aluminium_test2;
            $fche->sample = $request->sample;
            $fche->sample_test1 = $request->sample_test1;
            $fche->sample_test2 = $request->sample_test2;
            $fche->beakerplusresidue = $request->beakerplusresidue;
            $fche->beakerplusresidue_test1 = $request->beakerplusresidue_test1;
            $fche->beakerplusresidue_test2 = $request->beakerplusresidue_test2;
            $fche->residue = $request->residue;
            $fche->residue_test1 = $request->residue_test1;
            $fche->residue_test2 = $request->residue_test2;
            $fche->fat_cal = $request->fat_cal;
            $fche->fat_cal_test1 = $request->fat_cal_test1;
            $fche->fat_cal_test2 = $request->fat_cal_test2;
            $fche->result = $request->result;
            $fche->result_test1 = $request->result_test1;
            $fche->result_test2 = $request->result_test2;
            $fche->fat = $request->fat;
            $fche->fat_test1 = $request->fat_test1;
            $fche->fat_test2 = $request->fat_test2;
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
        $che = Fche040105::find($id);

        if($che->analysed_sign != null){
            if(file_exists(public_path('photos/na_fche040105s/analysed_sign/'.$che->analysed_sign))){

                unlink('photos/na_fche040105s/analysed_sign/'.$che->analysed_sign);

            }
        }

        if($che->checked_sign != null){
            if(file_exists(public_path('photos/na_fche040105s/checked_sign/'.$che->checked_sign))){

                unlink('photos/na_fche040105s/checked_sign/'.$che->checked_sign);

            }
        }

        Fche040105::where('id',$id)->delete();
        Fche040105Finance::where('fche040105_id',$id)->delete();

        return back()->with('success', 'Deleted successfully!');
    }

    public function print($id)
    {
        $che = Fche040105::find($id);
        return view('backend.labs.nutritions.fche040105s.print',compact('che'));
    }
}
