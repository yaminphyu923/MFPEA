<?php

namespace App\Http\Controllers\Stock;

use Exception;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Stocks\MlGeneralStock;
use App\Exports\MlGeneralStocksExport;
use App\Models\Stocks\PurchaseUsedMlGeneralStock;

class MLGeneralStockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:Micro-Lab-General-Stock', ['only' => ['index']]);
    }

    public function index()
    {
        $ml_general_stocks = MlGeneralStock::all();
        return view('backend.stocks.ml_general_stocks.index',compact('ml_general_stocks'));
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
            $ml_general_stock = new MlGeneralStock;
            $ml_general_stock->item_name = $request->item_name;
            $ml_general_stock->description = $request->description;
            $ml_general_stock->date = $request->date;
            $ml_general_stock->stock = $request->stock;
            $ml_general_stock->new = $request->new;
            $ml_general_stock->usage = $request->usage;
            $ml_general_stock->total_stock = $request->total_stock;
            $ml_general_stock->remark = $request->remark;
            $ml_general_stock->save();

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
        $ml_general_stock = MlGeneralStock::find($id);
        return view('backend.stocks.ml_general_stocks.detail',compact('ml_general_stock'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ml_general_stock = MlGeneralStock::find($id);
        return view('backend.stocks.ml_general_stocks.edit',compact('ml_general_stock'));
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
            $ml_general_stock = MlGeneralStock::find($id);
            $ml_general_stock->item_name = $request->item_name;
            $ml_general_stock->description = $request->description;
            $ml_general_stock->date = $request->date;
            $ml_general_stock->stock = $request->stock;
            $ml_general_stock->new = $request->new;
            $ml_general_stock->usage = $request->usage;
            $ml_general_stock->total_stock = $request->total_stock;
            $ml_general_stock->remark = $request->remark;
            $ml_general_stock->save();

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
        MlGeneralStock::where('id',$id)->delete();
        return back()->with('success', 'Deleted successfully!');
    }

    public function export()
    {
        return Excel::download(new MlGeneralStocksExport, 'ml_genenral_stocks.xlsx');
    }

    public function purchase($id)
    {
        $ml_general_stock = MlGeneralStock::find($id);
        $ml_general_stocks = PurchaseUsedMlGeneralStock::where('ml_general_stock_id',$id)
                                                            ->where('purchase_stock','!=',0)
                                                            ->get();
        return view('backend.stocks.ml_general_stocks.purchase',compact('ml_general_stock','ml_general_stocks'));
    }

    public function used($id)
    {
        $ml_general_stock = MlGeneralStock::find($id);
        $ml_general_stocks = PurchaseUsedMlGeneralStock::where('ml_general_stock_id',$id)
                                                            ->where('used_stock','!=',0)
                                                            ->get();
        return view('backend.stocks.ml_general_stocks.used',compact('ml_general_stock','ml_general_stocks'));
    }
}
