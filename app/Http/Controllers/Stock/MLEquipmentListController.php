<?php

namespace App\Http\Controllers\Stock;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\StockMLEquipmentList;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\FidslGeneralStocksExport;
use App\Models\PurchaseUsedMLEquipmentList;
use App\Exports\StockMLEquipmentListsExport;

class MLEquipmentListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:Micro-Lab-Equipment-List', ['only' => ['index']]);
    }

    public function index()
    {
        $ml_equipment_lists = StockMLEquipmentList::all();
        return view('backend.stocks.lab_equipment_lists.index',compact('ml_equipment_lists'));
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
            $ml_equipment_list = new StockMLEquipmentList;
            $ml_equipment_list->equipment_name = $request->equipment_name;
            $ml_equipment_list->brand = $request->brand;
            $ml_equipment_list->model = $request->model;
            $ml_equipment_list->serial_no = $request->serial_no;
            $ml_equipment_list->id_no = $request->id_no;
            $ml_equipment_list->supplier = $request->supplier;
            $ml_equipment_list->purchase_donate_date = $request->purchase_donate_date;
            $ml_equipment_list->installation_date = $request->installation_date;
            $ml_equipment_list->location = $request->location;
            $ml_equipment_list->total_stock = $request->total_stock;
            $ml_equipment_list->remark = $request->remark;
            $ml_equipment_list->save();

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
        $ml_equipment_list = StockMLEquipmentList::find($id);
        return view('backend.stocks.lab_equipment_lists.detail',compact('ml_equipment_list'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ml_equipment_list = StockMLEquipmentList::find($id);
        return view('backend.stocks.lab_equipment_lists.edit',compact('ml_equipment_list'));
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
            $ml_equipment_list = StockMLEquipmentList::find($id);
            $ml_equipment_list->equipment_name = $request->equipment_name;
            $ml_equipment_list->brand = $request->brand;
            $ml_equipment_list->model = $request->model;
            $ml_equipment_list->serial_no = $request->serial_no;
            $ml_equipment_list->id_no = $request->id_no;
            $ml_equipment_list->supplier = $request->supplier;
            $ml_equipment_list->purchase_donate_date = $request->purchase_donate_date;
            $ml_equipment_list->installation_date = $request->installation_date;
            $ml_equipment_list->location = $request->location;
            $ml_equipment_list->total_stock = $request->total_stock;
            $ml_equipment_list->remark = $request->remark;
            $ml_equipment_list->save();

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
        StockMLEquipmentList::where('id',$id)->delete();

        PurchaseUsedMLEquipmentList::where('ml_equipment_list_id',$id)->delete();
        return back()->with('success', 'Deleted successfully!');
    }

    public function purchase($id)
    {
        $ml_equipment_list = StockMLEquipmentList::find($id);
        $pu_ml_equipment_lists = PurchaseUsedMLEquipmentList::where('ml_equipment_list_id',$id)->where('purchase_stock','!=',0)->get();
        return view('backend.stocks.lab_equipment_lists.purchase',compact('ml_equipment_list','pu_ml_equipment_lists'));
    }

    public function used($id)
    {
        $ml_equipment_list = StockMLEquipmentList::find($id);
        $pu_ml_equipment_lists = PurchaseUsedMLEquipmentList::where('ml_equipment_list_id',$id)->where('used_stock','!=',0)->get();
        return view('backend.stocks.lab_equipment_lists.used',compact('ml_equipment_list','pu_ml_equipment_lists'));
    }

    public function mlEquipmentListExport()
    {
        return Excel::download(new StockMLEquipmentListsExport, 'StockMicroLabEquipmentLists.xlsx');
    }
}
