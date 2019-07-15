<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    public function create()
    {
        return view('users.create');
    }

    // User $user 接收model参数
    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    // Request $request 接收表单提交的参数
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:50',
            'email' =>'required|email|unique:users|max:255',
            'password' => 'required|confirmed|min:6'
        ]);
        return;
    }
}
