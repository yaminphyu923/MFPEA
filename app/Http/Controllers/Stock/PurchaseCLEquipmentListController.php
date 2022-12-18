<?php

namespace App\Http\Controllers\Stock;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\StockCLEquipmentList;
use App\Models\PurchaseUsedCLEquipmentList;

class PurchaseCLEquipmentListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
            $purchase_chemical_list = new PurchaseUsedCLEquipmentList;
            $purchase_chemical_list->cl_equipment_list_id = $request->cl_equipment_list_id;
            $purchase_chemical_list->purchase_stock = $request->purchase_stock;
            $purchase_chemical_list->purchase_date = $request->purchase_date;
            $purchase_chemical_list->save();

            if($purchase_chemical_list){
                $chemical_list = StockCLEquipmentList::find($request->cl_equipment_list_id);
                $chemical_list->total_stock = (int)$chemical_list->total_stock + (int)$request->purchase_stock;
                $chemical_list->update();
            }

            return redirect()->back()
                ->with('success', 'Added successfully!');
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        PurchaseUsedCLEquipmentList::where('id',$id)->delete();
        return 'success';
    }
}
