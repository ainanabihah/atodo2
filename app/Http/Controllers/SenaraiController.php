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
        $user = auth()->user();
        return inertia('Senarai/SenaraiIndex',[
            // 'senarais' => Senarai::all(),
            'senarais' => $user->senarais,
        ]);
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
            'name' => 'required|string'
        ]);

        $user = auth()->user();
        //shortcut style
        //$new = new Senarai(['name' => $validated['name']]);
        //$user->senarais()->save($new);

        $new = new Senarai();
        $new ->name = $validated['name'];
        $new->user_id = $user->id;
        $new->save();

        return redirect()->back();
    }





    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Senarai  $senarai
     * @return \Illuminate\Http\Response
     */
    public function show(Senarai $senarai)
    {
        $this->authorize('view',$senarai);

        // dd($senarai);
        return inertia('Senarai/SenaraiShow' ,[
            'kerjas' => $senarai->kerjas,
            'senarai' => $senarai,
        ]);
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
        $senarai->delete();

        return redirect()->back();
    }
}
