<?php

namespace App\Http\Controllers\HMMineral;

use Exception;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Finances\HMMCar0500Finance;

class Car0500FinanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:F-CAR-05-00(Finance)', ['only' => ['index']]);
    }

    public function index()
    {
        $car0500_finances = HMMCar0500Finance::with('hmmCar0500')->get();
        return view('backend.finances.hmms.car0500s.index',compact('car0500_finances'));
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
        $car0500_finance = HMMCar0500Finance::find($id);
        return view('backend.finances.hmms.car0500s.detail',compact('car0500_finance'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $car0500_finance = HMMCar0500Finance::find($id);
        return view('backend.finances.hmms.car0500s.edit',compact('car0500_finance'));
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
            $car_finance = HMMCar0500Finance::find($id);
            if($request->amount || $request->voucher || $request->date || $request->remark || $request->test_type){
                $car_finance->remark = $request->remark;
                $car_finance->amount = $request->amount;
                $car_finance->date = $request->date;
                // $car_finance->receive_voucher = "FCar0501-" . $this->generate_numbers((int)$car_finance->id,1,7);
                $car_finance->voucher = $request->voucher;
                $car_finance->test_type = $request->test_type;
                $car_finance->save();
               }else{
                $car_finance->remark_2 = $request->remark_2;
                $car_finance->amount_2 = $request->amount_2;
                $car_finance->date_2 = $request->date_2;
                // $car_finance->voucher = "FCar0501-" . $this->generate_numbers((int)$car_finance->id,1,7);
                $car_finance->voucher_2 = $request->voucher_2;
                $car_finance->test_type_2 = $request->test_type_2;
                $car_finance->save();
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
        $car0500_finance = HMMCar0500Finance::find($id);
        return view('backend.finances.hmms.car0500s.second_add',compact('car0500_finance'));

    }
}
