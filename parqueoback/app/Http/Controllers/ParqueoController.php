<?php

namespace App\Http\Controllers;

use App\Models\Parqueo;
use App\Http\Requests\StoreParqueoRequest;
use App\Http\Requests\UpdateParqueoRequest;

class ParqueoController extends Controller
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
     * @param  \App\Http\Requests\StoreParqueoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreParqueoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Parqueo  $parqueo
     * @return \Illuminate\Http\Response
     */
    public function show($placa)
    {
        return Parqueo::where('placa',$placa)->get();
//        return $placa;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Parqueo  $parqueo
     * @return \Illuminate\Http\Response
     */
    public function edit(Parqueo $parqueo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateParqueoRequest  $request
     * @param  \App\Models\Parqueo  $parqueo
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateParqueoRequest $request, Parqueo $parqueo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Parqueo  $parqueo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Parqueo $parqueo)
    {
        //
    }
}
