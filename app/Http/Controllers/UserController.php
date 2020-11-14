<?php

namespace App\Http\Controllers;

use App\Models\UserOrganization;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public function index() {
        $organizationUser = UserOrganization::where('user_id', '=', Auth::user()->id)->get('org_id')->toArray();
        $userOrganization = UserOrganization::whereIn('org_id', $organizationUser)->get('user_id')->toArray();
        $users = User::whereIn('id', $userOrganization)->get();
        return view('user.index', ['users' => $users]);
    }

    public function create()
    {
        return view('user.create');
    }

    public function edit($id) {
        $user = User::find($id);
        return view('user.edit', ['user' => $user]);
    }
}
