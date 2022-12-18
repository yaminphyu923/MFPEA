<?php

namespace App\Http\Controllers\Others;

use Exception;
use Illuminate\Http\Request;
use App\Models\Others\F05Finance;
use App\Http\Controllers\Controller;

class F05FinanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:F-CAR-05-01(Finance)(Other Test)', ['only' => ['index']]);
    }

    public function index()
    {
        $f05_finances = F05Finance::with('f05')->get();
        return view('backend.finances.others.f05s.index',compact('f05_finances'));
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
        $f05_finance = F05Finance::find($id);
        return view('backend.finances.others.f05s.detail',compact('f05_finance'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $f05_finance = F05Finance::with('f05')->find($id);
        return view('backend.finances.others.f05s.edit',compact('f05_finance'));
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
            $f05_finance = F05Finance::find($id);
            if($request->amount || $request->receive_voucher || $request->date || $request->remark || $request->test_type){
                $f05_finance->remark = $request->remark;
                $f05_finance->amount = $request->amount;
                $f05_finance->date = $request->date;
                // $f05_finance->receive_voucher = "FCar0501-" . $this->generate_numbers((int)$f05_finance->id,1,7);
                $f05_finance->voucher = $request->voucher;
                $f05_finance->test_type = $request->test_type;
                $f05_finance->save();
               }else{
                $f05_finance->remark_2 = $request->remark_2;
                $f05_finance->amount_2 = $request->amount_2;
                $f05_finance->date_2 = $request->date_2;
                // $f05_finance->voucher = "FCar0501-" . $this->generate_numbers((int)$f05_finance->id,1,7);
                $f05_finance->voucher_2 = $request->voucher_2;
                $f05_finance->test_type_2 = $request->test_type_2;
                $f05_finance->save();
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
        $f05_finance = F05Finance::find($id);
        return view('backend.finances.others.f05s.second_add',compact('f05_finance'));

    }
}
