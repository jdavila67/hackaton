<?php

namespace App\Http\Controllers;

use App\Models\Organization;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //
    public function index() {
        $events = DB::table('events')->orderBy('event_date')->take(6)->get();
        return  view('welcome', ['events' => $events]);
    }

    public function about() {
        return  view('about');
    }

    public function donation() {
        return  view('donation');
    }

    public function organization() {
        /*$organizations = Organization::all();
        if(!$organizations) return redirect(route('home'));*/
        return  view('organization');
    }

    public function  profile($id) {
        $data = Organization::find($id);
        if(!$data) return redirect(route('home.organization'));
        return  view('organization_profile', ['data' => $data]);
    }

    public function event() {
        return  view('event');
    }

    public function post() {
        return view('post');
    }
}
