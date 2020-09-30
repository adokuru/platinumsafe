<?php

namespace App\Http\Controllers;

use App\Models\FineArt;
use App\Models\PreciousStone;
use App\Models\Storage;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
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
            $stones = PreciousStone::all()->count();
            $art = FineArt::all()->count();
            $storage = Storage::all()->count();
            $countUser = User::role('User')->count();
            $users = User::role('User')->orderBy('id', 'desc')->take(5)->get();
            return(view('admin.index', compact('stones', 'art', 'storage','users','countUser')));
        }else{
            $id = Auth::id();
            $user = User::find($id); 
            $stones = PreciousStone::where('user_id', $id)->count();
            $art = FineArt::where('user_id', $id)->count();
            $storage = Storage::where('user_id', $id)->count();
            $countUser = User::role('User')->count();
            $stoned = PreciousStone::where('user_id', $id)->orderBy('id', 'desc')->take(2)->get();
            $arted = FineArt::where('user_id', $id)->orderBy('id', 'desc')->take(2)->get();
            $stored = Storage::where('user_id', $id)->orderBy('id', 'desc')->take(2)->get();

         

            return(view('users.index',compact('stones', 'art', 'storage','stoned','arted','stored')));
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
