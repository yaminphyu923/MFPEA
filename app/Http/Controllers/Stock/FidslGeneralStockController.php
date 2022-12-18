<?php

namespace App\Http\Controllers\Stock;

use Illuminate\Http\Request;
use App\Models\FidslGeneralStock;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\FidslGeneralStocksExport;
use App\Models\PurchaseUsedFidslGeneralStock;

class FidslGeneralStockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:FIDSL-General-Stock-List', ['only' => ['index']]);
    }

    public function index()
    {
        $f_general_stocks = FidslGeneralStock::all();
        return view('backend.stocks.fidsl_general_stocks.index',compact('f_general_stocks'));
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
         // $validator = Validator::make($request->all(), [
        //     'name' => 'required',
        //     'email' => 'required',
        //     'phone' => 'required',
        //     'academic_year_id' => 'required',
        //     'password' => 'required|required_with:confirm_password|same:confirm_password',
        // ]);

        // if ($validator->fails()) {
        //     return redirect()->back()
        //         ->with('errorForm', $validator->errors()->getMessages())
        //         ->withInput();
        // }

        try {
            $f_general_stock = new FidslGeneralStock;
            $f_general_stock->product_name = $request->product_name;
            $f_general_stock->date = $request->date;
            $f_general_stock->total_stock = $request->total_stock;
            $f_general_stock->remark = $request->remark;
            $f_general_stock->save();

            return redirect()->back()
                ->with('success', 'Created successfully!');
        } catch (Exception $e){
            return redirect()->back()
                ->with('error', $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fidsl_general_stock = FidslGeneralStock::find($id);
        return view('backend.stocks.fidsl_general_stocks.detail',compact('fidsl_general_stock'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fidsl_general_stock = FidslGeneralStock::find($id);
        return view('backend.stocks.fidsl_general_stocks.edit',compact('fidsl_general_stock'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $f_general_stock = FidslGeneralStock::find($id);
            $f_general_stock->product_name = $request->product_name;
            $f_general_stock->date = $request->date;
            $f_general_stock->total_stock = $request->total_stock;
            $f_general_stock->remark = $request->remark;
            $f_general_stock->save();

            return redirect()->back()
                ->with('success', 'Updated successfully!');
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
        FidslGeneralStock::where('id',$id)->delete();
        return back()->with('success', 'Deleted successfully!');
    }

    public function export()
    {
        return Excel::download(new FidslGeneralStocksExport, 'fidsl_genenral_stocks.xlsx');
    }

    public function purchase($id)
    {
        $fidsl_general_stock = FidslGeneralStock::find($id);
        $p_f_general_stocks = PurchaseUsedFidslGeneralStock::where('fidsl_general_stock_id',$id)
                                                            ->where('purchase_stock','!=',0)
                                                            ->get();
        return view('backend.stocks.fidsl_general_stocks.purchase',compact('fidsl_general_stock','p_f_general_stocks'));
    }

    public function used($id)
    {
        $fidsl_general_stock = FidslGeneralStock::find($id);
        $p_f_general_stocks = PurchaseUsedFidslGeneralStock::where('fidsl_general_stock_id',$id)
                                                            ->where('used_stock','!=',0)
                                                            ->get();
        return view('backend.stocks.fidsl_general_stocks.used',compact('fidsl_general_stock','p_f_general_stocks'));
    }



}
