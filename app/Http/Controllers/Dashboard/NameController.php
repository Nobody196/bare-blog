<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Requests\Dashboard\NameFormRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class NameController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function __invoke(NameFormRequest $request)
    {
        $user = \Auth::user();
        $data = User::filterRequest($request);
        $data = \Arr::only($data, ['name']);
        $user->update($data);

        return redirect()->route('dashboard.index');
    }
}
