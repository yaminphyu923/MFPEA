<?php

namespace App\Http\Controllers\Aw;

use Exception;
use App\Models\Ad0101;
use App\Models\Customer;
use App\Models\AdFinance;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Ad0101Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:FIDSL-Ad-01-01', ['only' => ['create']]);
    }

    public function index()
    {
        $ads = Ad0101::all();
        return view('backend.labs.admin_worksheets.ad0101s.aw_ad0101show',compact('ads'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customers = Customer::all();
        return view('backend.labs.admin_worksheets.ad0101s.aw_ad0101create',compact('customers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $validator = Validator::make($request->all(), [
        //     'name' => 'required',
        //     'email' => 'required',
        //     'phone' => 'required',
        //     'academic_year_id' => 'required',
        //     'password' => 'required|required_with:confirm_password|same:confirm_password',
        // ]);

        // if ($validator->fails()) {
        //     return redirect()->back()
        //         ->with('errorForm', $validator->errors()->getMessages())
        //         ->withInput();
        // }

        try {
            $ad = new Ad0101;
            if($request->file("signature")) {
                $file=$request->file("signature");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/aw0101s');
                $file->move($path, $filename);

                $ad->signature = $filename;
            }

            $ad->company_name = $request->company_name;
            $ad->customer_id = $request->customer_id;
            $ad->address = $request->address;
            $ad->contact_person = $request->contact_person;
            $ad->sample_name_code = $request->sample_name_code;
            $ad->sample_description = $request->sample_description;
            $ad->package_type = $request->package_type;
            $ad->request_type = $request->request_type;
            $ad->sampling_procedure = $request->sampling_procedure;
            $ad->decision_rule = $request->decision_rule;
            $ad->test_method = $request->test_method;
            $ad->sample_quantity = $request->sample_quantity;
            $ad->tf_received_date = $request->tf_received_date;
            $ad->sample_received_date = $request->sample_received_date;
            $ad->sample_number = $request->sample_number;
            $ad->received_quality = $request->received_quality;
            $ad->temperature_sa = $request->temperature_sa;
            $ad->physical_sp = $request->physical_sp;
            $ad->lab_report_date = $request->lab_report_date;
            $ad->job_number = $request->job_number;
            $ad->name = $request->name;
            $ad->save();

            if($ad)
            {
                $ad_finance = new AdFinance;
                $ad_finance->aw_branch = $request->aw_branch;
                $ad_finance->ad0101_id = $ad->id;
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
        $ad = AD0101::find($id);
        return view('backend.labs.admin_worksheets.ad0101s.aw_ad0101detail',compact('ad'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ad = AD0101::find($id);
        $customers = Customer::all();
        return view('backend.labs.admin_worksheets.ad0101s.aw_ad0101edit',compact('ad','customers'));
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
        // $validator = Validator::make($request->all(), [
        //     'name' => 'required',
        //     'email' => 'required',
        //     'phone' => 'required',
        //     'academic_year_id' => 'required',
        //     'password' => 'required|required_with:confirm_password|same:confirm_password',
        // ]);

        // if ($validator->fails()) {
        //     return redirect()->back()
        //         ->with('errorForm', $validator->errors()->getMessages())
        //         ->withInput();
        // }

        try {
            $ad = Ad0101::find($id);
            if($ad->signature != null && $request->file("signature")){
                if(file_exists(public_path('photos/aw0101s/'.$ad->signature))){

                    unlink('photos/aw0101s/'.$ad->signature);

                }
            }

            if($request->file("signature")) {
                $file=$request->file("signature");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/aw0101s');
                $file->move($path, $filename);

                $ad->signature = $filename;
            }

            $ad->company_name = $request->company_name;
            $ad->customer_id = $request->customer_id;
            $ad->address = $request->address;
            $ad->contact_person = $request->contact_person;
            $ad->sample_name_code = $request->sample_name_code;
            $ad->sample_description = $request->sample_description;
            $ad->package_type = $request->package_type;
            $ad->request_type = $request->request_type;
            $ad->sampling_procedure = $request->sampling_procedure;
            $ad->decision_rule = $request->decision_rule;
            $ad->test_method = $request->test_method;
            $ad->sample_quantity = $request->sample_quantity;
            $ad->tf_received_date = $request->tf_received_date;
            $ad->sample_received_date = $request->sample_received_date;
            $ad->sample_number = $request->sample_number;
            $ad->received_quality = $request->received_quality;
            $ad->temperature_sa = $request->temperature_sa;
            $ad->physical_sp = $request->physical_sp;
            $ad->lab_report_date = $request->lab_report_date;
            $ad->job_number = $request->job_number;
            $ad->name = $request->name;
            $ad->save();
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
        $ad = Ad0101::find($id);
        if($ad->signature != null){
            if(file_exists(public_path('photos/aw0101s/'.$ad->signature))){

                unlink('photos/aw0101s/'.$ad->signature);

            }
        }

        Ad0101::where('id',$id)->delete();

        AdFinance::where('ad0101_id',$id)->delete();
        return back()
                ->with('success', 'Deleted successfully!');
    }

    public function print($id)
    {
        $ad = Ad0101::find($id);
        return view('backend.labs.admin_worksheets.ad0101s.aw_ad0101print',compact('ad'));
    }
}
