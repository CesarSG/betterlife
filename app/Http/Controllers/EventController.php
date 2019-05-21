<?php

namespace BetterLife\Http\Controllers;

use BetterLife\Cause;

use BetterLife\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{

    public function info($id)
    {
        $causes = Cause::all();
        foreach ($causes as $cause) {
            $pct = ($cause->current_money * 100)/$cause->goal;
            $cause->pct = $pct;
        }
        $event = Event::findOrFail($id);
        return view('admin.event.eventInfo', compact('event'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $causes = Cause::all();
        $events = Event::all();
        return view('admin.event.eventIndex', compact('events', 'causes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $causes = Cause::all();
        return view('admin.event.eventForm', compact('causes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $event = Event::create($request->except('cause_id'));
        $event->causes()->attach($request->cause_id);
        /*dd($request->all());
        $event = new Event();
        $event->name = $request->input('name');
        $event->date_begin = $request->input('date_begin');
        $event->date_final = $request->input('date_final');
        $event->location = $request->input('location');
        $event->description = $request->input('description');
        $event->save();*/

        return redirect()->route('evento.index')
                            ->with(['message'=>'Evento registrado correctamente']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \BetterLife\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \BetterLife\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $causes = Cause::all();
        $event = Event::findOrFail($id);
        return view('admin.event.eventForm', compact('event', 'causes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \BetterLife\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \BetterLife\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        //
    }
}
