<?php

namespace App\Http\Controllers\Aw;

use Exception;
use App\Models\Ad0201;
use App\Models\Customer;
use App\Models\AdFinance;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Ad0201Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:FIDSL-Ad-02-01', ['only' => ['create']]);
    }

    public function index()
    {
        $ads = Ad0201::all();
        return view('backend.labs.admin_worksheets.ad0201s.show',compact('ads'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customers = Customer::all();
        return view('backend.labs.admin_worksheets.ad0201s.create',compact('customers'));
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
            $ad = new Ad0201;

            $ad->job_number = $request->job_number;
            $ad->customer_id = $request->customer_id;
            $ad->sample_name_code = $request->sample_name_code;
            $ad->sample_description = $request->sample_description;
            $ad->sample_type = $request->sample_type;
            $ad->sample_amount = $request->sample_amount;
            $ad->arrival_temperature = $request->arrival_temperature;
            $ad->pakaging_type = $request->pakaging_type;
            $ad->physical_condition_package = $request->physical_condition_package;
            $ad->admin_receiver = $request->admin_receiver;
            $ad->admin_date_received = $request->admin_date_received;
            $ad->lab_date_received = $request->lab_date_received;
            $ad->lab_receiver = $request->lab_receiver;
            $ad->lab_received = $request->lab_received;
            $ad->storage_method = $request->storage_method;
            $ad->test_type = $request->test_type;
            $ad->performed_duration = $request->performed_duration;
            $ad->disposal_date = $request->disposal_date;
            $ad->prepared_by = $request->prepared_by;
            $ad->prepared_position = $request->prepared_position;
            $ad->verified_by = $request->verified_by;
            $ad->verified_position = $request->verified_position;
            $ad->save();


            if($ad)
            {
                $ad_finance = new AdFinance;
                $ad_finance->aw_branch = $request->aw_branch;
                $ad_finance->ad0201_id = $ad->id;
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
        $ad = Ad0201::find($id);
        return view('backend.labs.admin_worksheets.ad0201s.detail',compact('ad'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ad = Ad0201::find($id);
        return view('backend.labs.admin_worksheets.ad0201s.edit',compact('ad'));
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
            $ad = Ad0201::find($id);

            $ad->job_number = $request->job_number;
            $ad->sample_name_code = $request->sample_name_code;
            $ad->sample_description = $request->sample_description;
            $ad->sample_type = $request->sample_type;
            $ad->sample_amount = $request->sample_amount;
            $ad->arrival_temperature = $request->arrival_temperature;
            $ad->pakaging_type = $request->pakaging_type;
            $ad->physical_condition_package = $request->physical_condition_package;
            $ad->admin_receiver = $request->admin_receiver;
            $ad->admin_date_received = $request->admin_date_received;
            $ad->lab_date_received = $request->lab_date_received;
            $ad->lab_receiver = $request->lab_receiver;
            $ad->lab_received = $request->lab_received;
            $ad->storage_method = $request->storage_method;
            $ad->test_type = $request->test_type;
            $ad->performed_duration = $request->performed_duration;
            $ad->disposal_date = $request->disposal_date;
            $ad->prepared_by = $request->prepared_by;
            $ad->prepared_position = $request->prepared_position;
            $ad->verified_by = $request->verified_by;
            $ad->verified_position = $request->verified_position;
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
        Ad0201::where('id',$id)->delete();
        AdFinance::where('ad0201_id',$id)->delete();
        return back()
                ->with('success', 'Deleted successfully!');
    }

    public function print($id)
    {
        $ad = Ad0201::find($id);
        return view('backend.labs.admin_worksheets.ad0201s.print',compact('ad'));
    }
}
