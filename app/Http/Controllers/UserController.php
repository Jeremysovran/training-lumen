<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;



use Laravel\Lumen\Routing\Controller as BaseController;
use App\Models\User;
use App\Models\Post;
use App\Models\Comment;

class UserController extends BaseController {
    public function user(Request $request, $id){
        $userById = User::find($id);
        $allPosts = Post::all();
        $allComments = Comment::all();


        return view('user', [
            'comments' => $allComments,
            'users' => $userById,
            'allPost' => $allPosts
            ]);
    }
}