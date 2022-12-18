<?php

namespace App\Http\Controllers\Stock;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\StockCLEquipmentList;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\PurchaseUsedCLEquipmentList;
use App\Exports\StockCLEquipmentListsExport;

class CLEquipmentListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:Chemical-Lab-Equipment-List', ['only' => ['index']]);
    }

    public function index()
    {
        $cl_equipment_lists = StockCLEquipmentList::all();
        return view('backend.stocks.cl_equipment_lists.index',compact('cl_equipment_lists'));
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
            $cl_equipment_list = new StockCLEquipmentList;
            $cl_equipment_list->product_name = $request->product_name;
            $cl_equipment_list->model_no = $request->model_no;
            $cl_equipment_list->capacity = $request->capacity;
            $cl_equipment_list->power_supply = $request->power_supply;
            $cl_equipment_list->manufacture_name = $request->manufacture_name;
            $cl_equipment_list->country = $request->country;
            $cl_equipment_list->supplier = $request->supplier;
            $cl_equipment_list->identification = $request->identification;
            $cl_equipment_list->brand = $request->brand;
            $cl_equipment_list->total_stock = $request->total_stock;
            $cl_equipment_list->remark = $request->remark;
            $cl_equipment_list->save();

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
        $cl_equipment_list = StockCLEquipmentList::find($id);
        return view('backend.stocks.cl_equipment_lists.detail',compact('cl_equipment_list'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cl_equipment_list = StockCLEquipmentList::find($id);
        return view('backend.stocks.cl_equipment_lists.edit',compact('cl_equipment_list'));
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
            $cl_equipment_list = StockCLEquipmentList::find($id);
            $cl_equipment_list->product_name = $request->product_name;
            $cl_equipment_list->model_no = $request->model_no;
            $cl_equipment_list->capacity = $request->capacity;
            $cl_equipment_list->power_supply = $request->power_supply;
            $cl_equipment_list->manufacture_name = $request->manufacture_name;
            $cl_equipment_list->country = $request->country;
            $cl_equipment_list->supplier = $request->supplier;
            $cl_equipment_list->identification = $request->identification;
            $cl_equipment_list->brand = $request->brand;
            $cl_equipment_list->total_stock = $request->total_stock;
            $cl_equipment_list->remark = $request->remark;
            $cl_equipment_list->save();

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
        StockCLEquipmentList::where('id',$id)->delete();

        PurchaseUsedCLEquipmentList::where('cl_equipment_list_id',$id)->delete();
        return back()->with('success', 'Deleted successfully!');
    }

    public function purchase($id)
    {
        $cl_equipment_list = StockCLEquipmentList::find($id);
        $pu_cl_equipment_lists = PurchaseUsedCLEquipmentList::where('purchase_stock','!=',0)->get();
        return view('backend.stocks.cl_equipment_lists.purchase',compact('cl_equipment_list','pu_cl_equipment_lists'));
    }

    public function used($id)
    {
        $cl_equipment_list = StockCLEquipmentList::find($id);
        $pu_cl_equipment_lists = PurchaseUsedCLEquipmentList::where('used_stock','!=',0)->get();
        return view('backend.stocks.cl_equipment_lists.used',compact('cl_equipment_list','pu_cl_equipment_lists'));
    }

    public function export()
    {
        return Excel::download(new StockCLEquipmentListsExport, 'chemical_lab_equipment_lists.xlsx');
    }
}
