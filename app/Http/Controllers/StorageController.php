<?php

namespace App\Http\Controllers;

use App\Models\Storage;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StorageController extends Controller
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
        $storages = Storage::all();
        $users = User::all();

        return view('admin.storage.index', compact('storages','users'));
    }else{
        $id = Auth::id();
        $user = User::find($id);
        $storages = Storage::where('user_id', $id)->get();
        return view('users.storage.index', compact('storages'));
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
    public function store(Request $request, Storage $storage)
    {
        //
        $storage = Storage::create($request->all());

        return redirect()->route('storage.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Storage  $storage
     * @return \Illuminate\Http\Response
     */
    public function show(Storage $storage)
    {
        //
        return view('show.storage', compact('storage'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Storage  $storage
     * @return \Illuminate\Http\Response
     */
    public function edit(Storage $storage)
    {
        //
        return view('admin.storage.edit', compact('storage'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Storage  $storage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Storage $storage)
    {
        //
        $storage->update($request->all());

        return redirect()->route('storage.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Storage  $storage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Storage $storage)
    {
        //
        $storage->delete();

        return redirect()->route('storage.index');
    }
}
