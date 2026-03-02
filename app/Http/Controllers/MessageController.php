<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $messages = Message::get();
        return view ('mess.index',compact('messages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('mess.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $mess = new Mess();
        $mess->name = $request->input('name');
        $mess->subject = $requet->input('subject');
        $mess->text = $requet->input('text');
        $mess->save();
        return view('mess.store',compact('mess'));

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view ('mess.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view ('mess.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $mess->name = $request->input('name');
        $mess->subject = $requet->input('subject');
        $mess->text = $requet->input('text');
        $mess->save();
        return redirect()->route('messages.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
