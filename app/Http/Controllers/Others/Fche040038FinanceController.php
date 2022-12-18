<?php

namespace App\Http\Controllers\Others;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Others\Fche040038Finance;
use Exception;

class Fche040038FinanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:FIDSL-Che-04-00/38(Finance)', ['only' => ['index']]);
    }

    public function index()
    {
        $fche040038_finances = Fche040038Finance::with('fche040038')->get();
        return view('backend.finances.others.fche040038s.index',compact('fche040038_finances'));
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
        $fche040038_finance = Fche040038Finance::find($id);
        return view('backend.finances.others.fche040038s.detail',compact('fche040038_finance'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fche040038_finance = Fche040038Finance::with('fche040038')->find($id);
        return view('backend.finances.others.fche040038s.edit',compact('fche040038_finance'));
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
            $fche040038_finance = Fche040038Finance::find($id);
            if($request->amount || $request->receive_voucher || $request->date || $request->remark || $request->test_type){
                $fche040038_finance->remark = $request->remark;
                $fche040038_finance->amount = $request->amount;
                $fche040038_finance->date = $request->date;
                // $fche040038_finance->receive_voucher = "FCar0501-" . $this->generate_numbers((int)$fche040038_finance->id,1,7);
                $fche040038_finance->voucher = $request->voucher;
                $fche040038_finance->test_type = $request->test_type;
                $fche040038_finance->save();
               }else{
                $fche040038_finance->remark_2 = $request->remark_2;
                $fche040038_finance->amount_2 = $request->amount_2;
                $fche040038_finance->date_2 = $request->date_2;
                // $fche040038_finance->voucher = "FCar0501-" . $this->generate_numbers((int)$fche040038_finance->id,1,7);
                $fche040038_finance->voucher_2 = $request->voucher_2;
                $fche040038_finance->test_type_2 = $request->test_type_2;
                $fche040038_finance->save();
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
        $fche040038_finance = Fche040038Finance::find($id);
        return view('backend.finances.others.fche040038s.second_add',compact('fche040038_finance'));

    }
}
