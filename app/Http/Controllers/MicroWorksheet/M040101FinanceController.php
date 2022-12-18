<?php

namespace App\Http\Controllers\MicroWorksheet;

use Exception;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\MicroWorksheets\M040101Finance;

class M040101FinanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:F-M04-01-01(Finance)', ['only' => ['index']]);
    }

    public function index()
    {
        $m040101_finances = M040101Finance::with('m040101')->get();
        return view('backend.finances.micro_worksheets.m040101s.index',compact('m040101_finances'));
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
        $m040101_finance = M040101Finance::find($id);
        return view('backend.finances.micro_worksheets.m040101s.detail',compact('m040101_finance'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $m040101_finance = M040101Finance::with('m040101')->find($id);
        return view('backend.finances.micro_worksheets.m040101s.edit',compact('m040101_finance'));
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
            $m040101_finance = M040101Finance::find($id);
            if($request->amount || $request->receive_voucher || $request->date || $request->remark || $request->test_type){
                $m040101_finance->remark = $request->remark;
                $m040101_finance->amount = $request->amount;
                $m040101_finance->date = $request->date;
                // $m040101_finance->receive_voucher = "FCar0501-" . $this->generate_numbers((int)$m040101_finance->id,1,7);
                $m040101_finance->voucher = $request->voucher;
                $m040101_finance->test_type = $request->test_type;
                $m040101_finance->save();
               }else{
                $m040101_finance->remark_2 = $request->remark_2;
                $m040101_finance->amount_2 = $request->amount_2;
                $m040101_finance->date_2 = $request->date_2;
                // $m040101_finance->voucher = "FCar0501-" . $this->generate_numbers((int)$m040101_finance->id,1,7);
                $m040101_finance->voucher_2 = $request->voucher_2;
                $m040101_finance->test_type_2 = $request->test_type_2;
                $m040101_finance->save();
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
        $m040101_finance = M040101Finance::find($id);
        return view('backend.finances.micro_worksheets.m040101s.second_add',compact('m040101_finance'));

    }


}
