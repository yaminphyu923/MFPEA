<?php

namespace App\Http\Controllers\Oils;

use Exception;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Oils\Oilfcar0502Finance;

class Oilfcar0502FinanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:F-CAR-05-02(Oil Test)(Finance)', ['only' => ['index']]);
    }

    public function index()
    {
        $oilfcar0502_finances = Oilfcar0502Finance::with('oilfcar0502')->get();
        return view('backend.finances.oils.oilfcar0502s.index',compact('oilfcar0502_finances'));
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
        $oilfcar0502_finance = Oilfcar0502Finance::find($id);
        return view('backend.finances.oils.oilfcar0502s.detail',compact('oilfcar0502_finance'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $oilfcar0502_finance = Oilfcar0502Finance::with('oilfcar0502')->find($id);
        return view('backend.finances.oils.oilfcar0502s.edit',compact('oilfcar0502_finance'));
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
            $oilfcar0502_finance = Oilfcar0502Finance::find($id);
            if($request->amount || $request->receive_voucher || $request->date || $request->remark || $request->test_type){
                $oilfcar0502_finance->remark = $request->remark;
                $oilfcar0502_finance->amount = $request->amount;
                $oilfcar0502_finance->date = $request->date;
                // $oilfcar0502_finance->receive_voucher = "FCar0501-" . $this->generate_numbers((int)$oilfcar0502_finance->id,1,7);
                $oilfcar0502_finance->voucher = $request->voucher;
                $oilfcar0502_finance->test_type = $request->test_type;
                $oilfcar0502_finance->save();
               }else{
                $oilfcar0502_finance->remark_2 = $request->remark_2;
                $oilfcar0502_finance->amount_2 = $request->amount_2;
                $oilfcar0502_finance->date_2 = $request->date_2;
                // $oilfcar0502_finance->voucher = "FCar0501-" . $this->generate_numbers((int)$oilfcar0502_finance->id,1,7);
                $oilfcar0502_finance->voucher_2 = $request->voucher_2;
                $oilfcar0502_finance->test_type_2 = $request->test_type_2;
                $oilfcar0502_finance->save();
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
        $oilfcar0502_finance = Oilfcar0502Finance::find($id);
        return view('backend.finances.oils.oilfcar0502s.second_add',compact('oilfcar0502_finance'));

    }
}
