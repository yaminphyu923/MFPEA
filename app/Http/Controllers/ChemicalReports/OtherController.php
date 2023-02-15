<?php

namespace App\Http\Controllers\ChemicalReports;

use Exception;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ChemicalReports\Other;
use App\Models\ChemicalReports\OtherTest;

class OtherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:other_test_report', ['only' => ['create']]);
    }

    public function index()
    {
        $others = Other::get();
        return view('backend.labs.chemical_reports.others.index',compact('others'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.labs.chemical_reports.others.create');
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
            $other = new Other;

            if($request->file("sign")) {
                $file=$request->file("sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/cr_others');
                $file->move($path, $filename);

                $other->sign = $filename;
            }

            $other->title = $request->title;
            $other->company_name = $request->company_name;
            $other->address = $request->address;
            $other->phone = $request->phone;
            $other->lab_received_date = $request->lab_received_date;
            $other->sample_number = $request->sample_number;
            $other->product_name = $request->product_name;
            $other->test_performed_date = $request->test_performed_date;
            $other->test_type = $request->test_type;
            $other->issue_date = $request->issue_date;
            $other->results = $request->results;
            $other->method = $request->method;
            $other->date = $request->date;
            $other->checked_name = $request->checked_name;
            $other->position = $request->position;
            $other->save();

            if($other)
            {
                for($i=0;$i<count($request['test_parameter']);$i++)
                {
                    $other_test = new OtherTest;
                    $other_test->other_id = $other->id;
                    $other_test->test_parameter = $request['test_parameter'][$i];
                    $other_test->test_method = $request['test_method'][$i];
                    $other_test->result = $request['result'][$i];
                    $other_test->save();
                }
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
        $other = Other::find($id);
        $other_tests = OtherTest::where('other_id',$id)->get();
        return view('backend.labs.chemical_reports.others.detail',compact('other','other_tests'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $other = Other::find($id);
        $other_tests = OtherTest::where('other_id',$id)->get();
        return view('backend.labs.chemical_reports.others.edit',compact('other','other_tests'));
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
            $other = Other::find($id);

            if($other->sign != null && $request->file("sign")){
                if(file_exists(public_path('photos/cr_others/'.$other->sign))){

                    unlink('photos/cr_others/'.$other->sign);

                }
            }

            if($request->file("sign")) {
                $file=$request->file("sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/cr_others');
                $file->move($path, $filename);

                $other->sign = $filename;
            }

            $other->title = $request->title;
            $other->company_name = $request->company_name;
            $other->address = $request->address;
            $other->phone = $request->phone;
            $other->lab_received_date = $request->lab_received_date;
            $other->sample_number = $request->sample_number;
            $other->product_name = $request->product_name;
            $other->test_performed_date = $request->test_performed_date;
            $other->test_type = $request->test_type;
            $other->issue_date = $request->issue_date;
            $other->results = $request->results;
            $other->method = $request->method;
            $other->date = $request->date;
            $other->checked_name = $request->checked_name;
            $other->position = $request->position;
            $other->save();

            if($other)
            {
                if(isset($request['test_parameter']))
                {
                    if(count($request['test_parameter']) > 0)
                    {
                        for($i=0;$i<count($request['test_parameter']);$i++)
                        {
                            if(isset($request['other_test_id'][$i]))
                            {
                                $additional['test_parameter'] = $request['test_parameter'][$i];
                                $additional['test_method'] = $request['test_method'][$i];
                                $additional['result'] = $request['result'][$i];
                                $update_additional = OtherTest::where('id',$request['other_test_id'][$i])
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
    public function destroy(Request $request,$id)
    {
        $other = Other::find($id);
        if($other->sign != null){
            if(file_exists(public_path('photos/cr_others/'.$other->sign))){

                unlink('photos/cr_others/'.$other->sign);

            }
        }

        Other::where('id',$id)->delete();

        OtherTest::where('other_id',$id)->delete();

        return back()->with('success', 'Deleted successfully!');
    }

    public function print($id)
    {
        $other = Other::find($id);
        $other_tests = OtherTest::where('other_id',$id)->get();
        return view('backend.labs.chemical_reports.others.print',compact('other','other_tests'));
    }
}
