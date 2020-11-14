<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrganizationController extends Controller
{
    // Mostrar lista de organizaciones
    public function index() {
        return view('organization.index');
    }

    // vista crear organizacion
    public function create() {
        return view('organization.create');
    }
}
