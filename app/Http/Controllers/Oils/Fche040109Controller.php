<?php

namespace App\Http\Controllers\Oils;

use Exception;
use Illuminate\Http\Request;
use App\Models\Oils\Fche040109;
use App\Http\Controllers\Controller;
use App\Models\Oils\Fche040109Finance;

class Fche040109Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:FIDSL-Che-04-01/09', ['only' => ['create']]);
    }
    public function index()
    {
        $fches = Fche040109::all();
        return view('backend.labs.oils.fche040109s.show',compact('fches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.labs.oils.fche040109s.create');
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
            $fche = new Fche040109;

            if($request->file("analysed_sign")) {
                $file=$request->file("analysed_sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/oil_fche040109s/analysed_sign');
                $file->move($path, $filename);

                $fche->analysed_sign = $filename;
            }

            if($request->file("checked_sign")) {
                $file=$request->file("checked_sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/oil_fche040109s/checked_sign');
                $file->move($path, $filename);

                $fche->checked_sign = $filename;
            }

            $fche->job_number = $request->job_number;
            $fche->sample_name = $request->sample_name;
            $fche->received_date = $request->received_date;
            $fche->initiated_date = $request->initiated_date;
            $fche->reported_date = $request->reported_date;
            $fche->method = $request->method;
            $fche->temperature = $request->temperature;
            $fche->temperature_test1 = $request->temperature_test1;
            $fche->temperature_test2 = $request->temperature_test2;
            $fche->brix_one = $request->brix_one;
            $fche->brix_one_test1 = $request->brix_one_test1;
            $fche->brix_one_test2 = $request->brix_one_test2;
            $fche->index_one = $request->index_one;
            $fche->index_one_test1 = $request->index_one_test1;
            $fche->index_one_test2 = $request->index_one_test2;
            $fche->result = $request->result;
            $fche->result_test1 = $request->result_test1;
            $fche->result_test2 = $request->result_test2;
            $fche->index_two = $request->index_two;
            $fche->index_two_test1 = $request->index_two_test1;
            $fche->index_two_test2 = $request->index_two_test2;
            $fche->brix_two = $request->brix_two;
            $fche->brix_two_test1 = $request->brix_two_test1;
            $fche->brix_two_test2 = $request->brix_two_test2;
            $fche->analysed_name = $request->analysed_name;
            $fche->analysed_date = $request->analysed_date;
            $fche->checked_name = $request->checked_name;
            $fche->checked_date = $request->checked_date;
            $fche->save();

            if($fche)
            {
                $fche_finance = new Fche040109Finance;
                $fche_finance->fche040109_id = $fche->id;
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
        $che = Fche040109::find($id);
        return view('backend.labs.oils.fche040109s.detail',compact('che'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $che = Fche040109::find($id);
        return view('backend.labs.oils.fche040109s.edit',compact('che'));
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
            $fche = Fche040109::find($id);
            if($fche->analysed_sign != null && $request->file("analysed_sign")){
                if(file_exists(public_path('photos/oil_fche040109s/analysed_sign/'.$fche->analysed_sign))){

                    unlink('photos/oil_fche040109s/analysed_sign/'.$fche->analysed_sign);

                }
            }

            if($fche->checked_sign != null && $request->file("checked_sign")){
                if(file_exists(public_path('photos/oil_fche040109s/checked_sign/'.$fche->checked_sign))){

                    unlink('photos/oil_fche040109s/checked_sign/'.$fche->checked_sign);

                }
            }

            if($request->file("analysed_sign")) {
                $file=$request->file("analysed_sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/oil_fche040109s/analysed_sign');
                $file->move($path, $filename);

                $fche->analysed_sign = $filename;
            }

            if($request->file("checked_sign")) {
                $file=$request->file("checked_sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/oil_fche040109s/checked_sign');
                $file->move($path, $filename);

                $fche->checked_sign = $filename;
            }

            $fche->job_number = $request->job_number;
            $fche->sample_name = $request->sample_name;
            $fche->received_date = $request->received_date;
            $fche->initiated_date = $request->initiated_date;
            $fche->reported_date = $request->reported_date;
            $fche->method = $request->method;
            $fche->temperature = $request->temperature;
            $fche->temperature_test1 = $request->temperature_test1;
            $fche->temperature_test2 = $request->temperature_test2;
            $fche->brix_one = $request->brix_one;
            $fche->brix_one_test1 = $request->brix_one_test1;
            $fche->brix_one_test2 = $request->brix_one_test2;
            $fche->index_one = $request->index_one;
            $fche->index_one_test1 = $request->index_one_test1;
            $fche->index_one_test2 = $request->index_one_test2;
            $fche->result = $request->result;
            $fche->result_test1 = $request->result_test1;
            $fche->result_test2 = $request->result_test2;
            $fche->index_two = $request->index_two;
            $fche->index_two_test1 = $request->index_two_test1;
            $fche->index_two_test2 = $request->index_two_test2;
            $fche->brix_two = $request->brix_two;
            $fche->brix_two_test1 = $request->brix_two_test1;
            $fche->brix_two_test2 = $request->brix_two_test2;
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
        $che = Fche040109::find($id);

        if($che->analysed_sign != null){
            if(file_exists(public_path('photos/oil_fche040109s/analysed_sign/'.$che->analysed_sign))){

                unlink('photos/oil_fche040109s/analysed_sign/'.$che->analysed_sign);

            }
        }

        if($che->checked_sign != null){
            if(file_exists(public_path('photos/oil_fche040109s/checked_sign/'.$che->checked_sign))){

                unlink('photos/oil_fche040109s/checked_sign/'.$che->checked_sign);

            }
        }

        Fche040109::where('id',$id)->delete();
        Fche040109Finance::where('fche040109_id',$id)->delete();

        return back()->with('success', 'Deleted successfully!');
    }

    public function print($id)
    {
        $che = Fche040109::find($id);
        return view('backend.labs.oils.fche040109s.print',compact('che'));
    }
}
