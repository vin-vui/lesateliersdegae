<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Event::all();
        return view('back.events.index')->with(compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('back.events.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'date' => 'required',
            'price' => 'required',
            'location' => 'required',
            'location_url' => 'nullable',
            'external_url' => 'nullable',
            'external_url_title' => 'nullable',
            'image' => 'required',
            'image_alt' => 'required',
            'is_published' => 'required',
        ]);


        $event = new Event();

        $event->name = $validated['name'];
        $event->description = $validated['description'];
        $event->date = $validated['date'];
        $event->price = $validated['price'];
        $event->location = $validated['location'];
        $event->location_url = $validated['location_url'];
        $event->external_url = $validated['external_url'];
        $event->external_url_title = $validated['external_url_title'];
        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('public/events');
            $event->image = asset('storage/events/' . basename($validated['image']));
        }
        $event->image_alt = $validated['image_alt'];
        $event->is_published = $validated['is_published'];

        $event->save();

        return redirect()->route('events.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        return view('back.events.edit')->with(compact('event'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Event $event)
    {
        $validated = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'date' => 'required',
            'price' => 'required',
            'location' => 'required',
            'location_url' => 'nullable',
            'external_url' => 'nullable',
            'external_url_title' => 'nullable',
            'image' => 'nullable',
            'image_alt' => 'required',
            'is_published' => 'required',
        ]);

        $event->name = $validated['name'];
        $event->description = $validated['description'];
        $event->date = $validated['date'];
        $event->price = $validated['price'];
        $event->location = $validated['location'];
        $event->location_url = $validated['location_url'];
        $event->external_url = $validated['external_url'];
        $event->external_url_title = $validated['external_url_title'];
        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('public/events');
            $event->image = asset('storage/events/' . basename($validated['image']));
        }
        $event->image_alt = $validated['image_alt'];
        $event->is_published = $validated['is_published'];

        $event->save();

        return redirect()->route('events.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        $event->delete();
        return redirect()->route('events.index');
    }
}
