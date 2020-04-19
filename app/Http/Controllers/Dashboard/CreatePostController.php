<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Requests\Dashboard\PostFormRequest;
use App\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class CreatePostController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function __invoke(Request $request)
    {
        return view('dashboard.posts.create');
    }

    public function save(PostFormRequest $request)
    {
        $user = \Auth::user();
        $data = Post::filterRequest($request);
        $data = \Arr::only($data, ['title', 'message']);
        $user->posts()->create($data);

        return redirect()->route('dashboard.posts');
    }
}
