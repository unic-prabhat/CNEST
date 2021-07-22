<?php

namespace App\Http\Controllers;

use App\QtnRadiatorMeasurementLocation;
use Illuminate\Http\Request;

class QtnRadiatorMeasurementLocationController extends Controller
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
        $data = new QtnRadiatorMeasurementLocation();
        $data->uniqid=$request->input('main_uniqid');
        $data->rml_location=$request->input('rml_location');
        $data->rml_height=$request->input('rml_height');
        $data->rml_width=$request->input('rml_width');
        $data->rml_psd=$request->input('rml_psd');
        $data->save();
        return 'Success';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\QtnRadiatorMeasurementLocation  $qtnRadiatorMeasurementLocation
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data=QtnRadiatorMeasurementLocation::find($id);
        $data->delete();
        return 'Success';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\QtnRadiatorMeasurementLocation  $qtnRadiatorMeasurementLocation
     * @return \Illuminate\Http\Response
     */
    public function edit(QtnRadiatorMeasurementLocation $qtnRadiatorMeasurementLocation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\QtnRadiatorMeasurementLocation  $qtnRadiatorMeasurementLocation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, QtnRadiatorMeasurementLocation $qtnRadiatorMeasurementLocation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\QtnRadiatorMeasurementLocation  $qtnRadiatorMeasurementLocation
     * @return \Illuminate\Http\Response
     */
    public function destroy(QtnRadiatorMeasurementLocation $qtnRadiatorMeasurementLocation)
    {
        //
    }
}
