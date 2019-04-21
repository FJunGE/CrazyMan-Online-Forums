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

    public function edit(User $user, $active)
    {
        $this->authorize('update', $user);
        return view('users.edit.edit', compact('user','active'));
    }

    /**
     * 更新用户信息
     * @param UserRequest $request
     * @param User $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UserRequest $request, User $user)
    {
        $this->authorize('update', $user);
        $user->update($request->all());

        alert()->success('数据更新成功');
        return redirect()->route('users.show', $user->id);
    }


    /**
     * 更新图像
     * @param User $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update_image(Request $request, User $user, ImageUploadHandler $imageUploadHandler)
    {
        $this->authorize('update', $user);
        $str = '图像必须是 jpeg, bmp, png, gif 格式的图片';
        $this->validate($request,[
            'avatar' => 'mimes:jpeg,bmp,png,gif|dimensions:min_width=208,min_height=208',
            'background' => 'mimes:jpeg,bmp,png,gif|dimensions:min_width=1024,min_height=500',
        ],[
            'avatar.mimes'=>$str,
            'avatar.dimensions'=>'图片的清晰度不够，宽和高需要 208px 以上',

            'background.mimes'=>$str,
            'background.dimensions'=>'图片的清晰度不够，宽和高需要 1024px 以上',
        ]);

        if ($request->avatar || $request->background){
            $data = [];
            if ($request->avatar)
            {
                $result = $imageUploadHandler->save($request->avatar, 'avatar', $user->id, 416);
                $data['avatar'] = $result['path'];

            }

            if ($request->background){
                $result = $imageUploadHandler->save($request->background, 'background', $user->id, 1200);
                $data['background'] = $result['path'];
            }

            $user->update($data);
            alert()->success('图像更新成功');
        }else{
            return redirect()->back()->with('danger', '请上传图片');
        }


        return redirect()->route('users.show', $user->id);
    }
}
