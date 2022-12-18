<?php

namespace App\Http\Controllers\MicroWorksheet;

use Exception;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\MicroWorksheets\F03m06Finance;

class F03m06FinanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:FIDSL-03-M-06(Finance)', ['only' => ['index']]);
    }

    public function index()
    {
        $f03m06_finances = F03m06Finance::with('f03m06')->get();
        return view('backend.finances.micro_worksheets.f03m06s.index',compact('f03m06_finances'));
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
        $f03m06_finance = F03m06Finance::find($id);
        return view('backend.finances.micro_worksheets.f03m06s.detail',compact('f03m06_finance'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $f03m06_finance = F03m06Finance::with('f03m06')->find($id);
        return view('backend.finances.micro_worksheets.f03m06s.edit',compact('f03m06_finance'));
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
            $f03m06_finance = F03m06Finance::find($id);
            if($request->amount || $request->receive_voucher || $request->date || $request->remark || $request->test_type){
                $f03m06_finance->remark = $request->remark;
                $f03m06_finance->amount = $request->amount;
                $f03m06_finance->date = $request->date;
                // $f03m06_finance->receive_voucher = "FCar0501-" . $this->generate_numbers((int)$f03m06_finance->id,1,7);
                $f03m06_finance->voucher = $request->voucher;
                $f03m06_finance->test_type = $request->test_type;
                $f03m06_finance->save();
               }else{
                $f03m06_finance->remark_2 = $request->remark_2;
                $f03m06_finance->amount_2 = $request->amount_2;
                $f03m06_finance->date_2 = $request->date_2;
                // $f03m06_finance->voucher = "FCar0501-" . $this->generate_numbers((int)$f03m06_finance->id,1,7);
                $f03m06_finance->voucher_2 = $request->voucher_2;
                $f03m06_finance->test_type_2 = $request->test_type_2;
                $f03m06_finance->save();
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
        $f03m06_finance = F03m06Finance::find($id);
        return view('backend.finances.micro_worksheets.f03m06s.second_add',compact('f03m06_finance'));

    }


}
