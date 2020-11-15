<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /*
    * param id : organization id
    */
    public function index($id) {
        $events = Post::where('org_id', '=', $id)->get();
        return view('organization.posts.index',['posts' => $events, 'id' => $id]);
    }

    /*
     * param $id = organization id
     */
    public function edit($org, $id) {
        $event = Post::where([
            ['org_id','=', $org],
            ['id','=', $id]
        ])->first();

        return view('organization.posts.edit', ['id' => $org, 'post' => $event]);
    }

    /*
     * param $id = organization id
     */
    public function create($id) {
        return view('organization.posts.create', ['id' => $id]);
    }
}
