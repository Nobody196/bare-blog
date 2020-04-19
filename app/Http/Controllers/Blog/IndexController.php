<?php

namespace App\Http\Controllers\Blog;

use App\Post;
use Illuminate\Routing\Controller;

class IndexController extends Controller
{
    /**
     * Show the application index.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function __invoke()
    {
        $posts = Post::paginate(10);
        return view('index', compact('posts'));
    }
}
