<?php

namespace App\Http\Controllers\Wastewater;

use Exception;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Wastewater\Fcar0500Finance;

class Fcar0500FinanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:F-CAR-05-00(Wastewater Results)(Finance)', ['only' => ['index']]);
    }

    public function index()
    {
        $fcar0500_finances = Fcar0500Finance::with('fcar0500')->get();
        return view('backend.finances.wastewater.fcar0500s.index',compact('fcar0500_finances'));
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
        $fcar0500_finance = Fcar0500Finance::find($id);
        return view('backend.finances.wastewater.fcar0500s.detail',compact('fcar0500_finance'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fcar0500_finance = Fcar0500Finance::with('fcar0500')->find($id);
        return view('backend.finances.wastewater.fcar0500s.edit',compact('fcar0500_finance'));
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
            $fcar0500_finance = Fcar0500Finance::find($id);
            if($request->amount || $request->receive_voucher || $request->date || $request->remark || $request->test_type){
                $fcar0500_finance->remark = $request->remark;
                $fcar0500_finance->amount = $request->amount;
                $fcar0500_finance->date = $request->date;
                // $fcar0500_finance->receive_voucher = "FCar0501-" . $this->generate_numbers((int)$fcar0500_finance->id,1,7);
                $fcar0500_finance->voucher = $request->voucher;
                $fcar0500_finance->test_type = $request->test_type;
                $fcar0500_finance->save();
               }else{
                $fcar0500_finance->remark_2 = $request->remark_2;
                $fcar0500_finance->amount_2 = $request->amount_2;
                $fcar0500_finance->date_2 = $request->date_2;
                // $fcar0500_finance->voucher = "FCar0501-" . $this->generate_numbers((int)$fcar0500_finance->id,1,7);
                $fcar0500_finance->voucher_2 = $request->voucher_2;
                $fcar0500_finance->test_type_2 = $request->test_type_2;
                $fcar0500_finance->save();
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
        $fcar0500_finance = Fcar0500Finance::find($id);
        return view('backend.finances.wastewater.fcar0500s.second_add',compact('fcar0500_finance'));

    }
}
