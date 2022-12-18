<?php

namespace App\Http\Controllers\Nutritions;

use Illuminate\Http\Request;
use App\Models\Nutritions\Fcar0502;
use App\Http\Controllers\Controller;
use App\Models\Nutritions\Fcar0502Finance;

class Fcar0502Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    function __construct()
    {
         $this->middleware('permission:F-CAR-05-02', ['only' => ['create']]);
    }

    public function index()
    {
        $fcars = Fcar0502::all();
        return view('backend.labs.nutritions.fcar0502s.show',compact('fcars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.labs.nutritions.fcar0502s.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

            $car = new Fcar0502;

            if($request->file("sign")) {
                $file=$request->file("sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/na_fcar0502s');
                $file->move($path, $filename);

                $car->sign = $filename;
            }

            $car->job_number = $request->job_number;
            $car->report_no = $request->report_no;
            $car->sample_name = $request->sample_name;
            $car->received_date = $request->received_date;
            $car->analysis_date = $request->analysis_date;
            $car->issue_date = $request->issue_date;
            $car->results = $request->results;
            $car->moisture = $request->moisture;
            $car->moisture_ref = $request->moisture_ref;
            $car->moisture_result_g = $request->moisture_result_g;
            $car->moisture_result_ml = $request->moisture_result_ml;
            $car->ash = $request->ash;
            $car->ash_ref = $request->ash_ref;
            $car->ash_result_g = $request->ash_result_g;
            $car->ash_result_ml = $request->ash_result_ml;
            $car->protein = $request->protein;
            $car->protein_ref = $request->protein_ref;
            $car->protein_result_g = $request->protein_result_g;
            $car->protein_result_ml = $request->protein_result_ml;
            $car->fiber = $request->fiber;
            $car->fiber_ref = $request->fiber_ref;
            $car->fiber_result_g = $request->fiber_result_g;
            $car->fiber_result_ml = $request->fiber_result_ml;
            $car->fat = $request->fat;
            $car->fat_ref = $request->fat_ref;
            $car->fat_result_g = $request->fat_result_g;
            $car->fat_result_ml = $request->fat_result_ml;
            $car->carbo = $request->carbo;
            $car->carbo_ref = $request->carbo_ref;
            $car->carbo_result_g = $request->carbo_result_g;
            $car->carbo_result_ml = $request->carbo_result_ml;
            $car->energy = $request->energy;
            $car->energy_ref = $request->energy_ref;
            $car->energy_result_g = $request->energy_result_g;
            $car->energy_result_ml = $request->energy_result_ml;
            $car->na = $request->na;
            $car->na_ref = $request->na_ref;
            $car->na_result_g = $request->na_result_g;
            $car->na_result_ml = $request->na_result_ml;
            $car->remark = $request->remark;
            $car->name = $request->name;
            $car->position = $request->position;
            $car->check1 = $request->check1;
            $car->check2 = $request->check2;
            $car->one_package = $request->one_package;
            $car->energy_fact = $request->energy_fact;
            $car->protein_fact = $request->protein_fact;
            $car->fat_fact = $request->fat_fact;
            $car->carbo_fact = $request->carbo_fact;
            $car->na_fact = $request->na_fact;
            $car->save();

            if($car)
            {


                $car_finance = new Fcar0502Finance;
                $car_finance->fcar0502_id = $car->id;
                $car_finance->save();

            }
            return redirect()->back()
                ->with('success', 'Created successfully!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $car = Fcar0502::findOrFail($id);
        return view('backend.labs.nutritions.fcar0502s.detail',compact('car'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fcar = Fcar0502::findOrFail($id);
        return view('backend.labs.nutritions.fcar0502s.edit',compact('fcar'));
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
        $car = Fcar0502::find($id);

        if($car->sign != null && $request->file("sign")){
            if(file_exists(public_path('photos/na_fcar0502s/'.$car->sign))){

                unlink('photos/na_fcar0502s/'.$car->sign);

            }
        }

        if($request->file("sign")) {
            $file=$request->file("sign");
            $filename = time().'_'.$file->getClientOriginalName();
            $path=public_path('photos/na_fcar0502s');
            $file->move($path, $filename);

            $car->sign = $filename;
        }

        $car->job_number = $request->job_number;
            $car->report_no = $request->report_no;
            $car->sample_name = $request->sample_name;
            $car->received_date = $request->received_date;
            $car->analysis_date = $request->analysis_date;
            $car->issue_date = $request->issue_date;
            $car->results = $request->results;
            $car->moisture = $request->moisture;
            $car->moisture_ref = $request->moisture_ref;
            $car->moisture_result_g = $request->moisture_result_g;
            $car->moisture_result_ml = $request->moisture_result_ml;
            $car->ash = $request->ash;
            $car->ash_ref = $request->ash_ref;
            $car->ash_result_g = $request->ash_result_g;
            $car->ash_result_ml = $request->ash_result_ml;
            $car->protein = $request->protein;
            $car->protein_ref = $request->protein_ref;
            $car->protein_result_g = $request->protein_result_g;
            $car->protein_result_ml = $request->protein_result_ml;
            $car->fiber = $request->fiber;
            $car->fiber_ref = $request->fiber_ref;
            $car->fiber_result_g = $request->fiber_result_g;
            $car->fiber_result_ml = $request->fiber_result_ml;
            $car->fat = $request->fat;
            $car->fat_ref = $request->fat_ref;
            $car->fat_result_g = $request->fat_result_g;
            $car->fat_result_ml = $request->fat_result_ml;
            $car->carbo = $request->carbo;
            $car->carbo_ref = $request->carbo_ref;
            $car->carbo_result_g = $request->carbo_result_g;
            $car->carbo_result_ml = $request->carbo_result_ml;
            $car->energy = $request->energy;
            $car->energy_ref = $request->energy_ref;
            $car->energy_result_g = $request->energy_result_g;
            $car->energy_result_ml = $request->energy_result_ml;
            $car->na = $request->na;
            $car->na_ref = $request->na_ref;
            $car->na_result_g = $request->na_result_g;
            $car->na_result_ml = $request->na_result_ml;
            $car->remark = $request->remark;
            $car->name = $request->name;
            $car->position = $request->position;
            $car->check1 = $request->check1;
            $car->check2 = $request->check2;
            $car->one_package = $request->one_package;
            $car->energy_fact = $request->energy_fact;
            $car->protein_fact = $request->protein_fact;
            $car->fat_fact = $request->fat_fact;
            $car->carbo_fact = $request->carbo_fact;
            $car->na_fact = $request->na_fact;
            $car->save();

        return redirect()->back()
            ->with('success', 'Updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $car = Fcar0502::find($id);

        if($car->sign != null){
            if(file_exists(public_path('photos/na_fcar0502s/'.$car->sign))){

                unlink('photos/na_fcar0502s/'.$car->sign);

            }
        }

        Fcar0502::where('id',$id)->delete();
        Fcar0502Finance::where('fcar0502_id',$id)->delete();
        return back()->with('success', 'Deleted successfully!');
    }

    public function print($id)
    {
        $car = Fcar0502::find($id);
        return view('backend.labs.nutritions.fcar0502s.print',compact('car'));
    }
}
