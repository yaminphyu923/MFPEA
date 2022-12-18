<?php

namespace App\Http\Controllers\Others;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Others\Fche040122Finance;
use Exception;

class Fche040122FinanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:FIDSL-Che-04-01/22(Finance)', ['only' => ['index']]);
    }

    public function index()
    {
        $fche040122_finances = Fche040122Finance::with('fche040122')->get();
        return view('backend.finances.others.fche040122s.index',compact('fche040122_finances'));
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
        $fche040122_finance = Fche040122Finance::find($id);
        return view('backend.finances.others.fche040122s.detail',compact('fche040122_finance'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fche040122_finance = Fche040122Finance::with('fche040122')->find($id);
        return view('backend.finances.others.fche040122s.edit',compact('fche040122_finance'));
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
            $fche040122_finance = Fche040122Finance::find($id);
            if($request->amount || $request->receive_voucher || $request->date || $request->remark || $request->test_type){
                $fche040122_finance->remark = $request->remark;
                $fche040122_finance->amount = $request->amount;
                $fche040122_finance->date = $request->date;
                // $fche040122_finance->receive_voucher = "FCar0501-" . $this->generate_numbers((int)$fche040122_finance->id,1,7);
                $fche040122_finance->voucher = $request->voucher;
                $fche040122_finance->test_type = $request->test_type;
                $fche040122_finance->save();
               }else{
                $fche040122_finance->remark_2 = $request->remark_2;
                $fche040122_finance->amount_2 = $request->amount_2;
                $fche040122_finance->date_2 = $request->date_2;
                // $fche040122_finance->voucher = "FCar0501-" . $this->generate_numbers((int)$fche040122_finance->id,1,7);
                $fche040122_finance->voucher_2 = $request->voucher_2;
                $fche040122_finance->test_type_2 = $request->test_type_2;
                $fche040122_finance->save();
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
        $fche040122_finance = Fche040122Finance::find($id);
        return view('backend.finances.others.fche040122s.second_add',compact('fche040122_finance'));

    }
}
