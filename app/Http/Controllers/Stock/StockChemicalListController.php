<?php

namespace App\Http\Controllers\Stock;

use Illuminate\Http\Request;
use App\Models\StockChemicalList;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\StockChemicalListsExport;
use App\Models\StockPurchaseUsedChemicalList;

class StockChemicalListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:Chemical-Lab-Chemical-List', ['only' => ['index']]);
    }

    public function index()
    {
        $chemical_lists = StockChemicalList::all();
        return view('backend.stocks.chemical_lists.index',compact('chemical_lists'));
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
        try {
            $chemical_list = new StockChemicalList;
            $chemical_list->chemical_name = $request->chemical_name;
            $chemical_list->description = $request->description;
            $chemical_list->brand = $request->brand;
            $chemical_list->country = $request->country;
            $chemical_list->serial_no = $request->serial_no;
            $chemical_list->package = $request->package;
            $chemical_list->qty = $request->qty;
            $chemical_list->qty_gkgl = $request->qty_gkgl;
            $chemical_list->unit = $request->unit;
            $chemical_list->formula = $request->formula;
            $chemical_list->total_stock = $request->total_stock;
            $chemical_list->remark = $request->remark;
            $chemical_list->save();

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
        $chemical_list = StockChemicalList::find($id);
        return view('backend.stocks.chemical_lists.detail',compact('chemical_list'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $chemical_list = StockChemicalList::find($id);
        return view('backend.stocks.chemical_lists.edit',compact('chemical_list'));
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
            $chemical_list = StockChemicalList::find($id);
            $chemical_list->chemical_name = $request->chemical_name;
            $chemical_list->description = $request->description;
            $chemical_list->brand = $request->brand;
            $chemical_list->country = $request->country;
            $chemical_list->serial_no = $request->serial_no;
            $chemical_list->package = $request->package;
            $chemical_list->qty = $request->qty;
            $chemical_list->qty_gkgl = $request->qty_gkgl;
            $chemical_list->unit = $request->unit;
            $chemical_list->formula = $request->formula;
            $chemical_list->total_stock = $request->total_stock;
            $chemical_list->remark = $request->remark;
            $chemical_list->save();

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
        StockChemicalList::where('id',$id)->delete();

        StockPurchaseUsedChemicalList::where('stock_chemical_list_id',$id)->delete();
        return back()->with('success', 'Deleted successfully!');
    }

    public function purchase($id)
    {
        $chemical_list = StockChemicalList::find($id);
        $stock_pu_chemical_lists = StockPurchaseUsedChemicalList::where('stock_chemical_list_id',$id)
                                                                ->where('purchase_stock','!=',0)->get();
        return view('backend.stocks.chemical_lists.purchase',compact('chemical_list','stock_pu_chemical_lists'));
    }

    public function used($id)
    {
        $chemical_list = StockChemicalList::find($id);
        $stock_pu_chemical_lists = StockPurchaseUsedChemicalList::where('stock_chemical_list_id',$id)
                                                                ->where('used_stock','!=',0)->get();
        return view('backend.stocks.chemical_lists.used',compact('chemical_list','stock_pu_chemical_lists'));
    }

    public function chemicalListExport()
    {
        return Excel::download(new StockChemicalListsExport, 'chemical_lists.xlsx');
    }
}
