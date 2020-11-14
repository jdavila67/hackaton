<?php

namespace App\Http\Controllers;

use App\Models\Organization;
use Illuminate\Http\Request;

class OrganizationController extends Controller
{
    // Mostrar lista de organizaciones
    public function index() {
        $organizations = Organization::all();
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
