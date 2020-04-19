<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Routing\Controller;

class IndexController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function __invoke()
    {
        return view('dashboard.index');
    }
}
