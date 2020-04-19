<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Requests\Dashboard\PostFormRequest;
use App\Post;
use Illuminate\Routing\Controller;

class PostController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @param Post $post
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function __invoke($post)
    {
        //Easy way to make it so they can only edit their own post instead of
        $post = auth()->user()->posts()->find($post);
        return view('dashboard.posts.post', compact('post'));
    }

    public function save(PostFormRequest $request, Post $post)
    {
        $user = \Auth::user();
        $data = Post::filterRequest($request);
        $data = \Arr::only($data, ['title', 'message']);
        $user->posts()->find($post->id)->update($data);

        return redirect()->route('dashboard.post', $post);
    }
}
