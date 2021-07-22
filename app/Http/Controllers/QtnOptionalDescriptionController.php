<?php

namespace App\Http\Controllers;

use App\QtnOptionalDescription;
use Illuminate\Http\Request;

class QtnOptionalDescriptionController extends Controller
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


      $data = new QtnOptionalDescription();
      $data->uniqid=$request->input('main_uniqid');
      $data->oe_description=$request->input('oe_description');
      $data->oe_quantity=$request->input('oe_quantity');
      $data->oe_price=$request->input('oe_price');
      $data->total_oe_price=$request->input('oe_quantity')*$request->input('oe_price');
      $data->save();
      return 'Success';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\QtnOptionalDescription  $qtnOptionalDescription
     * @return \Illuminate\Http\Response
     */
     public function show($id)
     {
         $data=QtnOptionalDescription::find($id);
         $data->delete();
         return 'Success';
     }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\QtnOptionalDescription  $qtnOptionalDescription
     * @return \Illuminate\Http\Response
     */
    public function edit(QtnOptionalDescription $qtnOptionalDescription)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\QtnOptionalDescription  $qtnOptionalDescription
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, QtnOptionalDescription $qtnOptionalDescription)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\QtnOptionalDescription  $qtnOptionalDescription
     * @return \Illuminate\Http\Response
     */
    public function destroy(QtnOptionalDescription $qtnOptionalDescription)
    {
        //
    }



}
