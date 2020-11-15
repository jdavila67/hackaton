<?php

namespace App\Http\Controllers;

use App\Models\PostComments;

class PostCommentsController extends Controller
{
    /*
   * param id : organization id
   */
    public function index($id) {
        $comments = PostComments::where('post_id', '=', $id)->get();
        return view('organization.comments.index',['comments' => $comments, 'id' => $id]);
    }

    /*
     * param $id = organization id
     */
    public function edit($post, $id) {
        $comment=  PostComments::where([
            ['post_id','=', $post],
            ['id','=', $id]
        ])->first();

        return view('organization.comments.edit', ['id' => $id, 'comment' => $comment]);
    }

    /*
     * param $id = organization id
     */
    public function create($id) {
        return view('organization.comments.create', ['id' => $id]);
    }
}
