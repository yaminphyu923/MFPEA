<?php

namespace App\Http\Controllers\Stock;

use Exception;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Stocks\MlPetrifilmStock;
use App\Exports\MlPetrifilmStocksExport;
use App\Models\Stocks\PurchaseUsedMlPetrifilmStock;

class MlPetrifilmStockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:Micro-Lab-Petrifilm-List', ['only' => ['index']]);
    }

    public function index()
    {
        $ml_petrifilm_stocks = MlPetrifilmStock::all();
        return view('backend.stocks.ml_petrifilm_stocks.index',compact('ml_petrifilm_stocks'));
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
            $ml_petrifilm_stock = new MlPetrifilmStock;
            $ml_petrifilm_stock->item_name = $request->item_name;
            $ml_petrifilm_stock->description = $request->description;
            $ml_petrifilm_stock->date = $request->date;
            $ml_petrifilm_stock->stock = $request->stock;
            $ml_petrifilm_stock->new = $request->new;
            $ml_petrifilm_stock->usage = $request->usage;
            $ml_petrifilm_stock->balance = $request->balance;
            $ml_petrifilm_stock->total_stock = $request->total_stock;
            $ml_petrifilm_stock->remark = $request->remark;
            $ml_petrifilm_stock->save();

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
        $ml_petrifilm_stock = MlPetrifilmStock::find($id);
        return view('backend.stocks.ml_petrifilm_stocks.detail',compact('ml_petrifilm_stock'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ml_petrifilm_stock = MlPetrifilmStock::find($id);
        return view('backend.stocks.ml_petrifilm_stocks.edit',compact('ml_petrifilm_stock'));
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
            $ml_petrifilm_stock = MlPetrifilmStock::find($id);
            $ml_petrifilm_stock->item_name = $request->item_name;
            $ml_petrifilm_stock->description = $request->description;
            $ml_petrifilm_stock->date = $request->date;
            $ml_petrifilm_stock->stock = $request->stock;
            $ml_petrifilm_stock->new = $request->new;
            $ml_petrifilm_stock->usage = $request->usage;
            $ml_petrifilm_stock->balance = $request->balance;
            $ml_petrifilm_stock->total_stock = $request->total_stock;
            $ml_petrifilm_stock->remark = $request->remark;
            $ml_petrifilm_stock->save();

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
        MlPetrifilmStock::where('id',$id)->delete();
        return back()->with('success', 'Deleted successfully!');
    }

    public function export()
    {
        return Excel::download(new MlPetrifilmStocksExport, 'ml_petrifilm_stocks.xlsx');
    }

    public function purchase($id)
    {
        $ml_petrifilm_stock = MlPetrifilmStock::find($id);
        $ml_petrifilm_stocks = PurchaseUsedMlPetrifilmStock::where('ml_petrifilm_stock_id',$id)
                                                            ->where('purchase_stock','!=',0)
                                                            ->get();
        return view('backend.stocks.ml_petrifilm_stocks.purchase',compact('ml_petrifilm_stock','ml_petrifilm_stocks'));
    }

    public function used($id)
    {
        $ml_petrifilm_stock = MlPetrifilmStock::find($id);
        $ml_petrifilm_stocks = PurchaseUsedMlPetrifilmStock::where('ml_petrifilm_stock_id',$id)
                                                            ->where('used_stock','!=',0)
                                                            ->get();
        return view('backend.stocks.ml_petrifilm_stocks.used',compact('ml_petrifilm_stock','ml_petrifilm_stocks'));
    }
}
