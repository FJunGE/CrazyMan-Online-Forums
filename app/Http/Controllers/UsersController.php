<?php

namespace App\Http\Controllers;

use App\Handlers\ImageUploadHandler;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\UserRequest;
use Auth;
use Illuminate\Routing\Route;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('show');
    }

    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    public function edit(User $user)
    {
        return view('users.edit.edit', compact('user'));
    }

    /**
     * 更新用户信息
     * @param UserRequest $request
     * @param User $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UserRequest $request, User $user)
    {
        $user->update($request->all());

        alert()->success('数据更新成功');
        return redirect()->route('users.show', $user->id);
    }


    public function edit_image(User $user)
    {
        return view('users.edit.edit', compact('user'));
    }
    /**
     * 更新图像
     * @param User $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update_image(Request $request, User $user, ImageUploadHandler $imageUploadHandler)
    {
        if ($request->avatar){
            $result = $imageUploadHandler->save($request->avatar, $user->id, 'avatar');
            $data['avatar'] = $result['path'];

            $user->update($data);
            alert()->success('图像更新成功');
            return redirect()->route('users.show', $user->id);
        }
    }
}
