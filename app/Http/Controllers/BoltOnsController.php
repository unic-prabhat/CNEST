<?php

namespace App\Http\Controllers;

use App\BoltOns;
use Illuminate\Http\Request;

class BoltOnsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return 123;
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
        $data= new BoltOns();
        $data->name=$request->input('name');
        $data->value=$request->input('value');
        $data->save();
        return 'Success';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BoltOns  $boltOns
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $data= BoltOns::find($id)->delete();
      return 'Success';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BoltOns  $boltOns
     * @return \Illuminate\Http\Response
     */
    public function edit(BoltOns $boltOns)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BoltOns  $boltOns
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BoltOns $boltOns)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BoltOns  $boltOns
     * @return \Illuminate\Http\Response
     */
    public function destroy(BoltOns $boltOns)
    {
        //
    }
}
