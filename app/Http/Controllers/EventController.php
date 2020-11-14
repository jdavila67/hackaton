<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /*
     * param id : organization id
     */
    public function index($id) {
        $events = Event::where('org_id', '=', $id)->get();
        return view('organization.events.index',['events' => $events, 'id' => $id]);
    }

    /*
     * param $id = organization id
     */
    public function edit($org, $id) {
        $event = Event::where([
            ['org_id','=', $org],
            ['id','=', $id]
        ])->first();

        return view('organization.events.edit', ['id' => $org, 'event' => $event]);
    }

    /*
     * param $id = organization id
     */
    public function create($id) {
        return view('organization.events.create');
    }
}
