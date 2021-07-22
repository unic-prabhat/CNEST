<?php

namespace App\Http\Controllers;

use App\QtnThermostaticRadiatorValves;
use Illuminate\Http\Request;

class QtnThermostaticRadiatorValvesController extends Controller
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
      $data = new QtnThermostaticRadiatorValves();
      $data->uniqid=$request->input('main_uniqid');
      $data->trv_size=$request->input('trv_size');
      $data->trv_type=$request->input('trv_type');
      $data->trv_quantity=$request->input('trv_quantity');
      $data->save();
      return 'Success';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\QtnThermostaticRadiatorValves  $qtnThermostaticRadiatorValves
     * @return \Illuminate\Http\Response
     */
     public function show($id)
     {
         $data=QtnThermostaticRadiatorValves::find($id);
         $data->delete();
         return 'Success';
     }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\QtnThermostaticRadiatorValves  $qtnThermostaticRadiatorValves
     * @return \Illuminate\Http\Response
     */
    public function edit(QtnThermostaticRadiatorValves $qtnThermostaticRadiatorValves)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\QtnThermostaticRadiatorValves  $qtnThermostaticRadiatorValves
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, QtnThermostaticRadiatorValves $qtnThermostaticRadiatorValves)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\QtnThermostaticRadiatorValves  $qtnThermostaticRadiatorValves
     * @return \Illuminate\Http\Response
     */
    public function destroy(QtnThermostaticRadiatorValves $qtnThermostaticRadiatorValves)
    {
        //
    }
}
