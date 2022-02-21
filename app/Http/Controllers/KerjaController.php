<?php

namespace App\Http\Controllers;

use App\Models\Kerja;
use Illuminate\Http\Request;

class KerjaController extends Controller
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
        $validated = $request->validate([
            'name' => 'required|string',
            'senarai_id' => 'required|exists:senarais,id',
        ]);

        $new = new Kerja();
        $new->name = $validated['name'];
        $new->senarai_id = $validated['senarai_id'];
        $new->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kerja  $kerja
     * @return \Illuminate\Http\Response
     */
    public function show(Kerja $kerja)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kerja  $kerja
     * @return \Illuminate\Http\Response
     */
    public function edit(Kerja $kerja)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kerja  $kerja
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kerja $kerja)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kerja  $kerja
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kerja $kerja)
    {
        $kerja->delete();

        return redirect()->back();
    }
}
