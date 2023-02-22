<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePoiTypeRequest;
use App\Http\Requests\UpdatePoiTypeRequest;
use App\Models\PoiType;

class PoiTypeController extends Controller
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
     * @param  \App\Http\Requests\StorePoiTypeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePoiTypeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PoiType  $poiType
     * @return \Illuminate\Http\Response
     */
    public function show(PoiType $poiType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PoiType  $poiType
     * @return \Illuminate\Http\Response
     */
    public function edit(PoiType $poiType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePoiTypeRequest  $request
     * @param  \App\Models\PoiType  $poiType
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePoiTypeRequest $request, PoiType $poiType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PoiType  $poiType
     * @return \Illuminate\Http\Response
     */
    public function destroy(PoiType $poiType)
    {
        //
    }
}
