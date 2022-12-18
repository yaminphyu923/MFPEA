<?php

namespace App\Http\Controllers\Nutritions;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Nutritions\Fche040107;
use App\Models\Nutritions\Fche040107Finance;

class Fche040107Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:FIDSL-Che-04-01/07', ['only' => ['create']]);
    }
    public function index()
    {
        $fches = Fche040107::all();
        return view('backend.labs.nutritions.fche040107s.show',compact('fches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.labs.nutritions.fche040107s.create');
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
            $fche = new Fche040107;

            if($request->file("analysed_sign")) {
                $file=$request->file("analysed_sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/na_fche040107s/analysed_sign');
                $file->move($path, $filename);

                $fche->analysed_sign = $filename;
            }

            if($request->file("checked_sign")) {
                $file=$request->file("checked_sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/na_fche040107s/checked_sign');
                $file->move($path, $filename);

                $fche->checked_sign = $filename;
            }

            $fche->job_number = $request->job_number;
            $fche->sample_name = $request->sample_name;
            $fche->received_date = $request->received_date;
            $fche->initiated_date = $request->initiated_date;
            $fche->reported_date = $request->reported_date;
            $fche->method = $request->method;
            $fche->a = $request->a;
            $fche->a_test1 = $request->a_test1;
            $fche->a_test2 = $request->a_test2;
            $fche->b = $request->b;
            $fche->b_test1 = $request->b_test1;
            $fche->b_test2 = $request->b_test2;
            $fche->c = $request->c;
            $fche->c_test1 = $request->c_test1;
            $fche->c_test2 = $request->c_test2;
            $fche->d = $request->d;
            $fche->d_test1 = $request->d_test1;
            $fche->d_test2 = $request->d_test2;
            $fche->e = $request->e;
            $fche->e_test1 = $request->e_test1;
            $fche->e_test2 = $request->e_test2;
            $fche->f = $request->f;
            $fche->f_test1 = $request->f_test1;
            $fche->f_test2 = $request->f_test2;
            $fche->energy_cal = $request->energy_cal;
            $fche->energy_cal_test1 = $request->energy_cal_test1;
            $fche->energy_cal_test2 = $request->energy_cal_test2;
            $fche->carbo = $request->carbo;
            $fche->carbo_test1 = $request->carbo_test1;
            $fche->carbo_test2 = $request->carbo_test2;
            $fche->energy = $request->energy;
            $fche->energy_test1 = $request->energy_test1;
            $fche->energy_test2 = $request->energy_test2;
            $fche->analysed_name = $request->analysed_name;
            $fche->analysed_date = $request->analysed_date;
            $fche->checked_name = $request->checked_name;
            $fche->checked_date = $request->checked_date;
            $fche->one_package = $request->one_package;
            $fche->energy_fact = $request->energy_fact;
            $fche->protein_fact = $request->protein_fact;
            $fche->fat_fact = $request->fat_fact;
            $fche->carbo_fact = $request->carbo_fact;
            $fche->sodium_fact = $request->sodium_fact;
            $fche->save();

            if($fche)
            {
                $fche_finance = new Fche040107Finance;
                $fche_finance->fche040107_id = $fche->id;
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
        $che = Fche040107::find($id);
        return view('backend.labs.nutritions.fche040107s.detail',compact('che'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $che = Fche040107::find($id);
        return view('backend.labs.nutritions.fche040107s.edit',compact('che'));
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
            $fche = Fche040107::find($id);
            if($fche->analysed_sign != null && $request->file("analysed_sign")){
                if(file_exists(public_path('photos/na_fche040107s/analysed_sign/'.$fche->analysed_sign))){

                    unlink('photos/na_fche040107s/analysed_sign/'.$fche->analysed_sign);

                }
            }

            if($fche->checked_sign != null && $request->file("checked_sign")){
                if(file_exists(public_path('photos/na_fche040107s/checked_sign/'.$fche->checked_sign))){

                    unlink('photos/na_fche040107s/checked_sign/'.$fche->checked_sign);

                }
            }

            if($request->file("analysed_sign")) {
                $file=$request->file("analysed_sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/na_fche040107s/analysed_sign');
                $file->move($path, $filename);

                $fche->analysed_sign = $filename;
            }

            if($request->file("checked_sign")) {
                $file=$request->file("checked_sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/na_fche040107s/checked_sign');
                $file->move($path, $filename);

                $fche->checked_sign = $filename;
            }

            $fche->job_number = $request->job_number;
            $fche->sample_name = $request->sample_name;
            $fche->received_date = $request->received_date;
            $fche->initiated_date = $request->initiated_date;
            $fche->reported_date = $request->reported_date;
            $fche->method = $request->method;
            $fche->a = $request->a;
            $fche->a_test1 = $request->a_test1;
            $fche->a_test2 = $request->a_test2;
            $fche->b = $request->b;
            $fche->b_test1 = $request->b_test1;
            $fche->b_test2 = $request->b_test2;
            $fche->c = $request->c;
            $fche->c_test1 = $request->c_test1;
            $fche->c_test2 = $request->c_test2;
            $fche->d = $request->d;
            $fche->d_test1 = $request->d_test1;
            $fche->d_test2 = $request->d_test2;
            $fche->e = $request->e;
            $fche->e_test1 = $request->e_test1;
            $fche->e_test2 = $request->e_test2;
            $fche->f = $request->f;
            $fche->f_test1 = $request->f_test1;
            $fche->f_test2 = $request->f_test2;
            $fche->energy_cal = $request->energy_cal;
            $fche->energy_cal_test1 = $request->energy_cal_test1;
            $fche->energy_cal_test2 = $request->energy_cal_test2;
            $fche->carbo = $request->carbo;
            $fche->carbo_test1 = $request->carbo_test1;
            $fche->carbo_test2 = $request->carbo_test2;
            $fche->energy = $request->energy;
            $fche->energy_test1 = $request->energy_test1;
            $fche->energy_test2 = $request->energy_test2;
            $fche->analysed_name = $request->analysed_name;
            $fche->analysed_date = $request->analysed_date;
            $fche->checked_name = $request->checked_name;
            $fche->checked_date = $request->checked_date;
            $fche->one_package = $request->one_package;
            $fche->energy_fact = $request->energy_fact;
            $fche->protein_fact = $request->protein_fact;
            $fche->fat_fact = $request->fat_fact;
            $fche->carbo_fact = $request->carbo_fact;
            $fche->sodium_fact = $request->sodium_fact;
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
        $che = Fche040107::find($id);

        if($che->analysed_sign != null){
            if(file_exists(public_path('photos/na_fche040107s/analysed_sign/'.$che->analysed_sign))){

                unlink('photos/na_fche040107s/analysed_sign/'.$che->analysed_sign);

            }
        }

        if($che->checked_sign != null){
            if(file_exists(public_path('photos/na_fche040107s/checked_sign/'.$che->checked_sign))){

                unlink('photos/na_fche040107s/checked_sign/'.$che->checked_sign);

            }
        }

        Fche040107::where('id',$id)->delete();
        Fche040107Finance::where('fche040107_id',$id)->delete();

        return back()->with('success', 'Deleted successfully!');
    }

    public function print($id)
    {
        $che = Fche040107::find($id);
        return view('backend.labs.nutritions.fche040107s.print',compact('che'));
    }
}
