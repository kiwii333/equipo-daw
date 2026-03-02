<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Event::orderBy();
        return view('events.index',compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('events.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $event = new Event();
        $events->name = $request->input('name');
        $events->description = $request->input('description');
        $events->location = $request->input('location');
        $events->map = $request->input('map');
        $events->date = $request->input('date');
        $events->hour = $request->input('hour');
        $events->time = $request->input('time');
        $events->type = $request->input('type');
        $events->tags = $request->input('tags');
        $events->type = $request->input('type');
        $events->tags = $request->input('tags');
        $event->save();

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('events.show',compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('events.edit',compact('event'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $events->name = $request->input('name');
        $events->description = $request->input('description');
        $events->location = $request->input('location');
        $events->map = $request->input('map');
        $events->date = $request->input('date');
        $events->hour = $request->input('hour');
        $events->time = $request->input('time');
        $events->type = $request->input('type');
        $events->tags = $request->input('tags');
        $events->type = $request->input('type');
        $events->tags = $request->input('tags');
        $event->save();

        return redirect()->route('players.show',$event);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $event;
    }
}
