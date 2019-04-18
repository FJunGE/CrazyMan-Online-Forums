<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\UserRequest;
use Auth;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('');
    }

    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    public function edit(User $user)
    {
        return view('users.edit.edit', compact('user'));
    }

    public function update(UserRequest $request, User $user)
    {
        $user->update($request->all());

        alert()->success('数据更新成功');

        return redirect()->route('users.show', $user->id);
    }
}
