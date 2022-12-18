<?php

namespace App\Http\Controllers\Stock;

use Exception;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\StockMLEquipmentList;
use App\Models\PurchaseUsedMLEquipmentList;

class PurchaseMLEquipmentListController extends Controller
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
            $el = new PurchaseUsedMLEquipmentList;
            $el->ml_equipment_list_id = $request->ml_equipment_list_id;
            $el->purchase_stock = $request->purchase_stock;
            $el->purchase_date = $request->purchase_date;
            $el->save();

            if($el){
                $ml_el = StockMLEquipmentList::find($request->ml_equipment_list_id);
                $ml_el->total_stock = (int)$ml_el->total_stock + (int)$request->purchase_stock;
                $ml_el->update();
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
        PurchaseUsedMLEquipmentList::where('id',$id)->delete();
        return 'success';
    }
}
