<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Laravel\Lumen\Routing\Controller as BaseController;


class MainController extends BaseController {

    public function home(){

        $allPosts = Post::all();


        return view('index', [
           'allPost' => $allPosts,
             ]);
    }
}