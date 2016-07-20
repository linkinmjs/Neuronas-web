<?php
namespace App\Http\Controllers;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * @param Request $request
     * @param Guard $guard
     * @return RedirectResponse
     */
    public function login(Request $request, Guard $guard)
    {
        if ($guard->attempt([
            'name'     => $request->input('login.name'),
            'password' => $request->input('login.password'),
        ])) {
            return redirect()->intended();
        }
        return back();
    }

    /**
     * @param Guard $guard
     * @return RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function logout (Guard $guard){
        $guard->logout();
        return redirect('/');
    }
}
