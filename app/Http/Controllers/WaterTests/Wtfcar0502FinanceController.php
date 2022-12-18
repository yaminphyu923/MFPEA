<?php

namespace App\Http\Controllers\WaterTests;

use Exception;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\WaterTests\Wtfcar0502Finance;

class Wtfcar0502FinanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:F-CAR-05-02(Water Test)(Finance)', ['only' => ['index']]);
    }

    public function index()
    {
        $wtfcar0502_finances = Wtfcar0502Finance::with('wtfcar0502')->get();
        return view('backend.finances.water_tests.wtfcar0502s.index',compact('wtfcar0502_finances'));
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
        $wtfcar0502_finance = Wtfcar0502Finance::find($id);
        return view('backend.finances.water_tests.wtfcar0502s.detail',compact('wtfcar0502_finance'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $wtfcar0502_finance = Wtfcar0502Finance::with('wtfcar0502')->find($id);
        return view('backend.finances.water_tests.wtfcar0502s.edit',compact('wtfcar0502_finance'));
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
            $wtfcar0502_finance = Wtfcar0502Finance::find($id);
            if($request->amount || $request->receive_voucher || $request->date || $request->remark || $request->test_type){
                $wtfcar0502_finance->remark = $request->remark;
                $wtfcar0502_finance->amount = $request->amount;
                $wtfcar0502_finance->date = $request->date;
                // $wtfcar0502_finance->receive_voucher = "FCar0501-" . $this->generate_numbers((int)$wtfcar0502_finance->id,1,7);
                $wtfcar0502_finance->voucher = $request->voucher;
                $wtfcar0502_finance->test_type = $request->test_type;
                $wtfcar0502_finance->save();
               }else{
                $wtfcar0502_finance->remark_2 = $request->remark_2;
                $wtfcar0502_finance->amount_2 = $request->amount_2;
                $wtfcar0502_finance->date_2 = $request->date_2;
                // $wtfcar0502_finance->voucher = "FCar0501-" . $this->generate_numbers((int)$wtfcar0502_finance->id,1,7);
                $wtfcar0502_finance->voucher_2 = $request->voucher_2;
                $wtfcar0502_finance->test_type_2 = $request->test_type_2;
                $wtfcar0502_finance->save();
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

    public function secondAdd($id)
    {
        $wtfcar0502_finance = Wtfcar0502Finance::find($id);
        return view('backend.finances.water_tests.wtfcar0502s.second_add',compact('wtfcar0502_finance'));

    }
}
