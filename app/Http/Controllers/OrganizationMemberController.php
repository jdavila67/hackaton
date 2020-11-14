<?php

namespace App\Http\Controllers;

use App\Models\OrganizationMember;

class OrganizationMemberController extends Controller
{
    /*
     * id: organization id
     */
    public function index($id)
    {
        $members = OrganizationMember::where('org_id', '=', $id)->get();
        return view('organization.member.index', ['members' => $members]);
    }

    public function edit($org, $id) {
        $members = OrganizationMember::where([
            ['org_id', '=', $org],
            ['id', '=', $id]
        ])->first();
        return view('organization.member.edit', ['member' => $members]);
    }
}
