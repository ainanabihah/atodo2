<?php

namespace App\Http\Controllers;

use App\Models\Senarai;
use Illuminate\Http\Request;

class SenaraiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return inertia('Senarai/SenaraiIndex');
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
     * @param  \App\Models\Senarai  $senarai
     * @return \Illuminate\Http\Response
     */
    public function show(Senarai $senarai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Senarai  $senarai
     * @return \Illuminate\Http\Response
     */
    public function edit(Senarai $senarai)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Senarai  $senarai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Senarai $senarai)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Senarai  $senarai
     * @return \Illuminate\Http\Response
     */
    public function destroy(Senarai $senarai)
    {
        //
    }
}
