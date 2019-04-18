<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Auth;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|between:3,25|regex:/^[A-Za-z0-9\-\_]+$/|unique:users,name,'. Auth::id(),
            'gender' => 'required',
            'describe' => 'max:100',
            'company'  => 'max:25',
            'duty'  => 'max:10',
            'url_personal'  =>  'nullable|url',
            'url_github'  =>  'url',
            'url_weibo'  =>  'url',
            'url_twitter'  =>  'url',
            'url_linkedin'  =>  'url',
            'url_steam'  =>  'url',
        ];
    }

    public function messages()
    {
        return [
            'name.unique' => '用户名已被占用，请重新填写',
            'name.regex' => '用户名只支持英文、数字、横杠和下划线。',
            'name.between' => '用户名必须介于 3 - 25 个字符之间。',
            'name.required' => '用户名不能为空。',
            'describe.max'   => '个性签名不能大于 2 个字',
            'company.max'   => '公司名称不你那个超出 25 个字',
            'duty.max'   => '职称不能超出 10 个字',
            'url_personal.url'   => '个人站点地址错误，请填写正确连接地址',
            'url_github.url'   => 'Github地址错误，请填写正确连接地址',
            'url_weibo.url'   => '微博地址错误，请填写正确连接地址',
            'url_twitter.url'   => 'Twitter地址错误，请填写正确连接地址',
            'url_linkedin.url'   => 'Linkedin地址错误，请填写正确连接地址',
            'url_steam.url'   => 'Steam.地址错误，请填写正确连接地址',
        ];
    }
}
