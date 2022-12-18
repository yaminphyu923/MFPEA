<?php

namespace App\Http\Controllers\GCAnalysis;

use Exception;
use Illuminate\Http\Request;
use App\Models\Car0501Finance;
use App\Http\Controllers\Controller;

class Car0501FinanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:F-CAR-05-01(Finance)', ['only' => ['index']]);
    }

    public function index()
    {
        $car0501_finances = Car0501Finance::where('status',0)->get();
        return view('backend.finances.gc_analyses.car0501s.index',compact('car0501_finances'));
    }

    public function index17()
    {
        $car0501_finances = Car0501Finance::where('status',1)->get();
        return view('backend.finances.gc_analyses.car0501s_17.index',compact('car0501_finances'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $car0501_finance = Car0501Finance::find($id);
        if($car0501_finance->status == 0){
            return view('backend.finances.gc_analyses.car0501s.detail',compact('car0501_finance'));
        }else{
            return view('backend.finances.gc_analyses.car0501s_17.detail',compact('car0501_finance'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $car0501_finance = Car0501Finance::find($id);
        if($car0501_finance->status == 0){
            return view('backend.finances.gc_analyses.car0501s.edit',compact('car0501_finance'));
        }else{
            return view('backend.finances.gc_analyses.car0501s_17.edit',compact('car0501_finance'));
        }

    }

    public function secondAdd($id)
    {
        $car0501_finance = Car0501Finance::find($id);
        if($car0501_finance->status == 0){
            return view('backend.finances.gc_analyses.car0501s.second_add',compact('car0501_finance'));
        }else{
            return view('backend.finances.gc_analyses.car0501s_17.second_add',compact('car0501_finance'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function generate_numbers($start, $count, $digits) {

		for ($n = $start; $n < $start+$count; $n++) {

			$result = str_pad($n, $digits, "0", STR_PAD_LEFT);

		}
		return $result;
	}

    public function update(Request $request, $id)
    {
        try {
            $car0501_finance = Car0501Finance::find($id);
           if($request->amount || $request->receive_voucher || $request->date || $request->remark || $request->test_type){
            $car0501_finance->remark = $request->remark;
            $car0501_finance->amount = $request->amount;
            $car0501_finance->date = $request->date;
            // $car0501_finance->receive_voucher = "FCar0501-" . $this->generate_numbers((int)$car0501_finance->id,1,7);
            $car0501_finance->receive_voucher = $request->receive_voucher;
            $car0501_finance->test_type = $request->test_type;
            $car0501_finance->save();
           }else{
            $car0501_finance->remark_2 = $request->remark_2;
            $car0501_finance->amount_2 = $request->amount_2;
            $car0501_finance->date_2 = $request->date_2;
            // $car0501_finance->receive_voucher = "FCar0501-" . $this->generate_numbers((int)$car0501_finance->id,1,7);
            $car0501_finance->receive_voucher_2 = $request->receive_voucher_2;
            $car0501_finance->test_type_2 = $request->test_type_2;
            $car0501_finance->save();
           }
            return redirect()->back()
                ->with('success', 'Added successfully!');
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
        //
    }
}
