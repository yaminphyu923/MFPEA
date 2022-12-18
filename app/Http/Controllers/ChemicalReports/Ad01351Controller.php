<?php

namespace App\Http\Controllers\ChemicalReports;

use Exception;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ChemicalReports\Ad01351;
use App\Models\ChemicalReports\Ad01351Test;
use App\Models\ChemicalReports\Ad01351Finance;

class Ad01351Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:FIDSL-Ad-06-03-01351/22', ['only' => ['create']]);
    }

    public function index()
    {
        $ad01351s = Ad01351::with('customer')->get();
        return view('backend.labs.chemical_reports.ad01351s.show',compact('ad01351s'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customers = Customer::all();
        return view('backend.labs.chemical_reports.ad01351s.create',compact('customers'));
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
            $ad01351 = new Ad01351;

            if($request->file("sign")) {
                $file=$request->file("sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/cr_ad01351s');
                $file->move($path, $filename);

                $ad01351->sign = $filename;
            }

            $ad01351->company_name = $request->company_name;
            $ad01351->address = $request->address;
            $ad01351->phone = $request->phone;
            $ad01351->lab_received_date = $request->lab_received_date;
            $ad01351->sample_number = $request->sample_number;
            $ad01351->product_name = $request->product_name;
            $ad01351->code_no = $request->code_no;
            $ad01351->mfd = $request->mfd;
            $ad01351->exp = $request->exp;
            $ad01351->can_size = $request->can_size;
            $ad01351->test_performed_date = $request->test_performed_date;
            $ad01351->test_type = $request->test_type;
            $ad01351->issue_date = $request->issue_date;
            $ad01351->results = $request->results;
            $ad01351->customer_id = $request->customer_id;
            $ad01351->method = $request->method;
            $ad01351->checked_name = $request->checked_name;
            $ad01351->save();

            if($ad01351)
            {
                for($i=0;$i<count($request['test_parameter']);$i++)
                {
                    $test_fill = new Ad01351Test;
                    $test_fill->ad01351_id = $ad01351->id;
                    $test_fill->test_parameter = $request['test_parameter'][$i];
                    $test_fill->test_method = $request['test_method'][$i];
                    $test_fill->result = $request['result'][$i];
                    $test_fill->save();
                }

                $ad_finance = new Ad01351Finance;
                $ad_finance->ad01351_id = $ad01351->id;
                $ad_finance->save();

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
        $ad = Ad01351::with('customer')->find($id);
        $ad_tests = Ad01351Test::where('ad01351_id',$id)->get();
        return view('backend.labs.chemical_reports.ad01351s.detail',compact('ad','ad_tests'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ad = Ad01351::with('customer')->find($id);
        $customers = Customer::all();
        $ad_tests = Ad01351Test::where('ad01351_id',$id)->get();
        return view('backend.labs.chemical_reports.ad01351s.edit',compact('ad','customers','ad_tests'));
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
            $ad01351 = Ad01351::find($id);

            if($ad01351->sign != null && $request->file("sign")){
                if(file_exists(public_path('photos/cr_ad01351s/'.$ad01351->sign))){

                    unlink('photos/cr_ad01351s/'.$ad01351->sign);

                }
            }

            if($request->file("sign")) {
                $file=$request->file("sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/cr_ad01351s');
                $file->move($path, $filename);

                $ad01351->sign = $filename;
            }

            $ad01351->company_name = $request->company_name;
            $ad01351->address = $request->address;
            $ad01351->phone = $request->phone;
            $ad01351->lab_received_date = $request->lab_received_date;
            $ad01351->sample_number = $request->sample_number;
            $ad01351->product_name = $request->product_name;
            $ad01351->code_no = $request->code_no;
            $ad01351->mfd = $request->mfd;
            $ad01351->exp = $request->exp;
            $ad01351->can_size = $request->can_size;
            $ad01351->test_performed_date = $request->test_performed_date;
            $ad01351->test_type = $request->test_type;
            $ad01351->issue_date = $request->issue_date;
            $ad01351->results = $request->results;
            $ad01351->customer_id = $request->customer_id;
            $ad01351->method = $request->method;
            $ad01351->checked_name = $request->checked_name;
            $ad01351->save();

            if($ad01351)
            {
                if(isset($request['test_parameter']))
                {
                    if(count($request['test_parameter']) > 0)
                    {
                        for($i=0;$i<count($request['test_parameter']);$i++)
                        {
                            if(isset($request['ad_test_id'][$i]))
                            {
                                $additional['test_parameter'] = $request['test_parameter'][$i];
                                $additional['test_method'] = $request['test_method'][$i];
                                $additional['result'] = $request['result'][$i];
                                $update_additional = Ad01351Test::where('id',$request['ad_test_id'][$i])
                                                    ->update($additional);
                            }

                        }
                    }
                }


            }

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
    public function destroy($id)
    {
        $ad = Ad01351::find($id);
        if($ad->sign != null){
            if(file_exists(public_path('photos/cr_ad01351s/'.$ad->sign))){

                unlink('photos/cr_ad01351s/'.$ad->sign);

            }
        }

        Ad01351::where('id',$id)->delete();

        Ad01351Test::where('ad01351_id',$id)->delete();

        Ad01351Finance::where('ad01351_id',$id)->delete();
        return back()->with('success', 'Deleted successfully!');
    }

    public function print($id)
    {
        $ad = Ad01351::find($id);
        $ad_tests = Ad01351Test::where('ad01351_id',$id)->get();
        return view('backend.labs.chemical_reports.ad01351s.print',compact('ad','ad_tests'));
    }
}
