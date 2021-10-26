<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Auth;
use Gate;
use Illuminate\Support\Facades\Storage;


class EventController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except'=>['index', 'showEvent']]);
    }

    public function index()
    {
        $events = Event::all();
        return view("pages.home", compact('events'));
    }

    public function form()
    {
        return view("pages.add-event");
    }

    public function storeEvent(Request $request){
        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'date' => 'required',
            'img' => 'mimes: jpg,jpeg,png|required|max:10000'
        ]);
        $path = $request->file('img')->store('public/images');
        $filename = str_replace('public/',"",$path);

        Event::create([
            'title' => request('title'),
            'description' => request('description'),
            'Data' => request('date'),
            'img' => $filename,
            'owner' => Auth::id()
        ]);
        return redirect("/");
    }

    public function showEvent(Event $event){
        return view("pages.event", compact('event'));
    }

    public function editEvent(Event $event){
        return view("pages.edit-event", compact('event'));
    }

    public function updateEvent(Request $request, Event $event) {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'Data' => 'required'
        ]);

        Event::where('id', $event->id)->update($request->only(['title', 'description', 'Data']));
        
        if($request->file('img') != null) {
            Storage::delete('public/'.$event->img);
            $path_to_img = $request->file('img')->store('public/images');
            $filename = str_replace('public/', '' , $path_to_img);
            Event::where('id', $event->id)->update(['img' => $filename]);
        }

        return redirect('/');
    }
    
    public function viewRemove(Event $event) {
        return view('pages.viewRemove', compact('event'));
    }

    public function deleteEvent(Event $event){
        if (Gate::allows('delete', $event)) {
            Storage::delete('public/'.$event->img);
            $event->delete();
            return redirect('/');
        }
        dd('Tu neesi savininkas');
    }

    
}
