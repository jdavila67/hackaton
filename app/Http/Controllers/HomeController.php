<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Organization;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //
    public function index()
    {
        $events = DB::table('events')->orderBy('event_date')->take(6)->get();
        return view('welcome', ['events' => $events]);
    }

    public function about()
    {
        return view('about');
    }

    public function donation()
    {
        return view('donation');
    }

    public function organization()
    {
        /*$organizations = Organization::all();
        if(!$organizations) return redirect(route('home'));*/
        return view('organization');
    }

    public function profile($id)
    {
        $data = Organization::find($id);
        if (!$data) return redirect(route('home.organization'));
        return view('organization_profile', ['data' => $data]);
    }

    public function perfil($name) {
        $data = Organization::where('name', '=', $name)->first();
        if (!$data) return redirect(route('home.organization'));
        return view('organization_profile', ['data' => $data]);
    }

    public function event()
    {
        return view('event');
    }

    public function event_org($id) {
        return view('event_org', ['events' => Event::where('org_id', '=', $id)->get()]);
    }

    public function event_profile($id)
    {
        // get event
        $event = Event::find($id);

        // get organization
        $organization = $event->organizations;

        // get tags
        $tags = $organization->organizationTags->pluck('tag');

        // get organization with tags
        $organizations = Organization::whereHas('organizationTags', function($query) use ($tags) {
            $query->whereIn('tag', $tags);
        })->where('id', '!=', $organization->id)->get();

        return view('event_profile', ['data' => Event::find($id), 'organizations' => $organizations]);
    }

    public function post()
    {
        return view('post');
    }
}
