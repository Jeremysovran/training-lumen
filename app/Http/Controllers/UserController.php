<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Laravel\Lumen\Routing\Controller as BaseController;
use App\Models\User;
use App\Models\Post;
use App\Models\Comment;

class UserController extends BaseController {
    public function user(Request $request, $id){
        $userById = User::find($id);
        $allComments = Comment::all();
        $allPosts = DB::select("
        SELECT *
        FROM post
        ORDER BY `post`.created_at DESC");

        return view('user', [
            'comments' => $allComments,
            'users' => $userById,
            'allPost' => $allPosts
            ]);
    }
    public function userPost(Request $request){
      
        $text = $request->input('text', '');
        $picture = $request->input('picture', '');
        $post = new Post();
        $post->text = $text;
        $post->picture = $picture;
        $post->save();
        return redirect()->route('user', ['id' => 1]); 
    }
    public function commentPost(Request $request, $id){
        $commenter = $request->input('commenter', '');
       $comment = new Comment();
       $comment->commenter = $commenter;
       $comment->post_id = $id;
       $comment->save();
       return redirect()->route('user', ['id' => 1]);    
    }
}