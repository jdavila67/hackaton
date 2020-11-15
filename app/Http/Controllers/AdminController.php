<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use App\Models\Event;
use App\Models\Organization;
use App\Models\Volunteer;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function donation() {
        return view('admin.donation', ['data' => Donation::all()]);
    }

    public function dashboard() {
        $donation = Donation::all()->sum('amount');
        $organization = Organization::all()->count();
        $voluntarios = Volunteer::all()->count();
        $event = Event::all()->count();

        return view('dashboard', [
            'donation' => $donation,
            'organization' => $organization,
            'voluntarios' => $voluntarios,
            'event' => $event
        ]);
    }
}
