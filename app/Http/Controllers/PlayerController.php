<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(Auth::check()&& Auth::user()->role != 'admin'){
            $players = Player::get();
        }else{
            $players = Player::orderBy('visibility',1 )->get();
        }
        return view('Player.index',compact('players'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Player.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $photo_name= $request->file('photo')->store('player/photos','public');
        $player = new Player();
        $player->name = $request -> input('name');
        $player->photo = $photo_name;
        $player->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('player.show',compact('player'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view ('player.edit',compact('player'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $player->name = $request->input('name');
        $player->photo = $request->input('photo');
        $player->save();

        return redirect()->route('players.index',$player);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function edit_visibility(string $id)
    {
        return view('player.edit_visibility');
    }
    public function update_visibility(Request $request, string $id)
    {
        $player->visible = $requet->input('visible');
        $player->save();

        return redirect()->route('players.index');
    }
}
