<?php

namespace App\Http\Controllers;

use App\Models\Organization;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index() {
        return  view('welcome');
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
}
