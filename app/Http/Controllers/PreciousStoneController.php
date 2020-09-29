<?php

namespace App\Http\Controllers;

use App\Models\PreciousStone;
use Illuminate\Http\Request;

class PreciousStoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $stones = PreciousStone::all();

        return view('admin.stones.index', compact('stones'));

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
     * @param  \App\PreciousStone  $preciousStone
     * @return \Illuminate\Http\Response
     */
    public function show(PreciousStone $preciousStone)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PreciousStone  $preciousStone
     * @return \Illuminate\Http\Response
     */
    public function edit(PreciousStone $preciousStone)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PreciousStone  $preciousStone
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PreciousStone $preciousStone)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PreciousStone  $preciousStone
     * @return \Illuminate\Http\Response
     */
    public function destroy(PreciousStone $preciousStone)
    {
        //
    }
}
