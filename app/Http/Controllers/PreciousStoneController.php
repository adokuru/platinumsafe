<?php

namespace App\Http\Controllers;

use App\Models\PreciousStone;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
            if (auth()->user()->hasRole('Admin')) {
                $stones = PreciousStone::all();
                $users = User::all();
        
                return view('admin.stones.index', compact('stones','users'));
        }else{
            $id = Auth::id();
            $user = User::find($id);
            $stones = PreciousStone::where('user_id', $id)->get();
            return view('users.stones.index', compact('stones'));
        }

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
