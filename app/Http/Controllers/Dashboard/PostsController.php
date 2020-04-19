<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Routing\Controller;

class PostsController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     * @throws \Exception
     */
    public function __invoke()
    {
        $posts = auth()->user()->posts()->paginate(10);
        return view('dashboard.posts.index', compact('posts'));
    }
}
