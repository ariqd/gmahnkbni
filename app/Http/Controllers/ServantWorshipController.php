<?php

namespace App\Http\Controllers;

use App\Models\ServantWorship;
use Illuminate\Http\Request;

class ServantWorshipController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ServantWorship  $servantWorship
     * @return \Illuminate\Http\Response
     */
    public function show(ServantWorship $servantWorship)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ServantWorship  $servantWorship
     * @return \Illuminate\Http\Response
     */
    public function edit(ServantWorship $servantWorship)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Worship  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        dd($request->all());
        dd($id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ServantWorship  $servantWorship
     * @return \Illuminate\Http\Response
     */
    public function destroy(ServantWorship $servantWorship)
    {
        //
    }
}
