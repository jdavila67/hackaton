<?php

namespace App\Http\Controllers;

use App\Models\Organization;
use App\Models\UserOrganization;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrganizationController extends Controller
{
    // Mostrar lista de organizaciones
    public function index() {
        $organizationsUser = UserOrganization::where('user_id','=', Auth::user()->id)->get('org_id')->toArray();
        $organizations = Organization::whereIn('id', $organizationsUser)->get();
        return view('organization.index',['organizations' => $organizations]);
    }

    // vista crear organizacion
    public function create() {
        return view('organization.create');
    }

    public function edit($id) {
        $organization = Organization::find($id);
        return view('organization.edit', ['organization' => $organization]);
    }
}
