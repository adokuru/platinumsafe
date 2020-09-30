<?php

namespace App\Http\Controllers;

use App\Models\FineArt;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FineArtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (auth()->user()->hasRole('Admin')) {
            $arts = FineArt::all();
            $users = User::all();
    
                return view('admin.arts.index', compact('arts','users'));
        }else{
            $id = Auth::id();
            $user = User::find($id);
            $arts = FineArt::where('user_id', $id)->get();
            return view('users.arts.index', compact('arts'));
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
     * @param  \App\FineArt  $fineArt
     * @return \Illuminate\Http\Response
     */
    public function show(FineArt $fineArt)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FineArt  $fineArt
     * @return \Illuminate\Http\Response
     */
    public function edit(FineArt $fineArt)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FineArt  $fineArt
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FineArt $fineArt)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FineArt  $fineArt
     * @return \Illuminate\Http\Response
     */
    public function destroy(FineArt $fineArt)
    {
        //
    }
}
