<?php

namespace App\Http\Controllers;

use App\QtnTowelRailValves;
use Illuminate\Http\Request;

class QtnTowelRailValvesController extends Controller
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
      $data = new QtnTowelRailValves();
      $data->uniqid=$request->input('main_uniqid');
      $data->torv_type=$request->input('torv_type');
      $data->torv_angel=$request->input('torv_angel');
      $data->torv_number=$request->input('torv_number');
      $data->save();
      return 'Success';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\QtnTowelRailValves  $qtnTowelRailValves
     * @return \Illuminate\Http\Response
     */
     public function show($id)
     {
         $data=QtnTowelRailValves::find($id);
         $data->delete();
         return 'Success';
     }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\QtnTowelRailValves  $qtnTowelRailValves
     * @return \Illuminate\Http\Response
     */
    public function edit(QtnTowelRailValves $qtnTowelRailValves)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\QtnTowelRailValves  $qtnTowelRailValves
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, QtnTowelRailValves $qtnTowelRailValves)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\QtnTowelRailValves  $qtnTowelRailValves
     * @return \Illuminate\Http\Response
     */
    public function destroy(QtnTowelRailValves $qtnTowelRailValves)
    {
        //
    }
}
