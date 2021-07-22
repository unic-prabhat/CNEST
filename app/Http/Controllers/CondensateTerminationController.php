<?php

namespace App\Http\Controllers;

use App\CondensateTermination;
use Illuminate\Http\Request;

class CondensateTerminationController extends Controller
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
        $data= new CondensateTermination();
        $data->name=$request->input('name');
        $data->save();
        return 'Success';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CondensateTermination  $condensateTermination
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data= CondensateTermination::find($id);
        $data->delete();
        return 'Success';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CondensateTermination  $condensateTermination
     * @return \Illuminate\Http\Response
     */
    public function edit(CondensateTermination $condensateTermination)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CondensateTermination  $condensateTermination
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CondensateTermination $condensateTermination)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CondensateTermination  $condensateTermination
     * @return \Illuminate\Http\Response
     */
    public function destroy(CondensateTermination $condensateTermination)
    {
        //
    }
}
