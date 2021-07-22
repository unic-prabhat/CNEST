<?php

namespace App\Http\Controllers;

use App\newfuleType;
use Illuminate\Http\Request;

class NewfuleTypeController extends Controller
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
        $data = new newfuleType();
        $data->name = $request->input('name');
        $data->price = $request->input('price');
        $data->save();
        return 'Success';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\newfuleType  $newfuleType
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = newfuleType::find($id)->delete();
        return 'Success';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\newfuleType  $newfuleType
     * @return \Illuminate\Http\Response
     */
    public function edit(newfuleType $newfuleType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\newfuleType  $newfuleType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, newfuleType $newfuleType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\newfuleType  $newfuleType
     * @return \Illuminate\Http\Response
     */
    public function destroy(newfuleType $newfuleType)
    {
        //
    }
}
