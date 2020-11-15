<?php

namespace App\Http\Controllers;

use App\Models\Volunteer;
use Illuminate\Http\Request;

class VolunteerController extends Controller
{
    /*
    * param id : organization id
    */
    public function index($id) {
        $volunteers = Volunteer::where('org_id', '=', $id)->get();
        return view('organization.volunteers.index',['volunteers' => $volunteers, 'id' => $id]);
    }

    /*
     * param $id = organization id
     */
    public function edit($org, $id) {
        $volunteer = Volunteer::where([
            ['org_id','=', $org],
            ['id','=', $id]
        ])->first();

        return view('organization.volunteers.edit', ['id' => $org, 'volunteer' => $volunteer]);
    }

    public function delete($org, $id) {
        $volunteer = Volunteer::where([
            ['org_id','=', $org],
            ['id','=', $id]
        ])->delete();

        return view('organization.volunteers.edit', ['id' => $org, 'volunteer' => $volunteer]);
    }

    public function create($id) {
        return view('organization.volunteers.create', ['id' => $id]);
    }
}
