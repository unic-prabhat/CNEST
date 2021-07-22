<?php

namespace App\Http\Controllers;

use App\QtnTowelRailMeasurement;
use Illuminate\Http\Request;

class QtnTowelRailMeasurementController extends Controller
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
        $data = new QtnTowelRailMeasurement();
        $data->uniqid=$request->input('main_uniqid');
        $data->trm_location=$request->input('trm_location');
        $data->trm_height=$request->input('trm_height');
        $data->trm_width=$request->input('trm_width');
        $data->trm_color=$request->input('trm_color');
        $data->save();
        return 'Success';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\QtnTowelRailMeasurement  $qtnTowelRailMeasurement
     * @return \Illuminate\Http\Response
     */
     public function show($id)
     {
         $data=QtnTowelRailMeasurement::find($id);
         $data->delete();
         return 'Success';
     }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\QtnTowelRailMeasurement  $qtnTowelRailMeasurement
     * @return \Illuminate\Http\Response
     */
    public function edit(QtnTowelRailMeasurement $qtnTowelRailMeasurement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\QtnTowelRailMeasurement  $qtnTowelRailMeasurement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, QtnTowelRailMeasurement $qtnTowelRailMeasurement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\QtnTowelRailMeasurement  $qtnTowelRailMeasurement
     * @return \Illuminate\Http\Response
     */
    public function destroy(QtnTowelRailMeasurement $qtnTowelRailMeasurement)
    {
        //
    }
}
