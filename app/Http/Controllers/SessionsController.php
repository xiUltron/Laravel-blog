<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requsets;
use Illuminate\Support\Facades\Auth;

class SessionsController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('sessions.create');
    }

    /**
     * @param Request $request
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email|max:255',
            'password' => 'required'
        ]);

        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($credentials)) {
            session()->flash('success', '欢迎回来！');
            return redirect()->route('users.show', [Auth::user()]);
        } else {
            session()->flash('danger', '很抱歉！邮箱或密码有误！');
            return redirect()->back();
        }
        return;
    }
}
