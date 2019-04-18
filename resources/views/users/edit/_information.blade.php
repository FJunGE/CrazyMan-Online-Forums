<div class="box box-radius box-body">
    <div class="border-bottom mb-2">
        <i class="fa fa-edit ml-1 mr-2"></i>
        <h5 class="d-inline-flex">编辑个人信息</h5>
    </div>
    <div class="card-body">
        <form action="{{ route('users.update', $user->id) }}" class="form-horizontal" method="POST" accept-charset="UTF-8">
            {{ csrf_field() }}
            @method('PUT')

            <div class="form-group d-flex justify-content-center">
                <div class="col-md-2 text-center">
                    <label for="name-field" class="col-form-label text-md-left">用户名</label>
                </div>
                <div class="col-md-10">
                    <input type="text" class="form-control" name="name" id="name-field" placeholder="用户名" value="{{ old('name',$user->name) }}">
                </div>
            </div>

            <div class="form-group d-flex justify-content-center">
                <div class="col-md-2 text-center">
                    <label for="email-field" class="col-form-label text-md-left">邮箱</label>
                </div>
                <div class="col-md-10">
                    <input type="text" class="form-control" name="email" id="email-field" disabled="disabled" placeholder="邮箱" value="{{ old('email',$user->email) }}">
                </div>
            </div>

            <div class="form-group d-flex justify-content-center">
                <div class="col-md-2 text-center">
                    <label for="gender-field" class="col-form-label text-md-left">性别</label>
                </div>
                <div class="col-md-10">
                    <select name="gender" id="gender-field" class="form-control">
                        <option value="1" @if($user->gender == 1) selected @endif>男</option>
                        <option value="2" @if($user->gender == 2) selected @endif>女</option>
                    </select>
                </div>
            </div>

            <div class="form-group d-flex justify-content-center">
                <div class="col-md-2 text-center">
                    <label for="company-field" class="col-form-label text-md-left">公司名称</label>
                </div>
                <div class="col-md-10">
                    <input type="text" class="form-control" name="company" id="company-field" placeholder="公司名称：腾讯" value="{{ old('company',$user->company) }}">
                </div>
            </div>

            <div class="form-group d-flex justify-content-center">
                <div class="col-md-2 text-center">
                    <label for="duty-field" class="col-form-label text-md-left">岗位职责</label>
                </div>
                <div class="col-md-10">
                    <input type="text" class="form-control" name="duty" id="duty-field" placeholder="工作岗位职责：php程序员" value="{{ old('duty',$user->duty) }}">
                </div>
            </div>

            <div class="form-group d-flex justify-content-center">
                <div class="col-md-2 text-center">
                    <label for="url-field" class="col-form-label text-md-left">个人站点</label>
                </div>
                <div class="col-md-10">
                    <input type="text" class="form-control" name="url_personal" id="url-field" placeholder="完整的连接地址：https://bbs.crazyman.com" value="{{ old('url_personal',$user->url_personal) }}">
                </div>
            </div>

            <div class="form-group d-flex justify-content-center">
                <div class="col-md-2 text-center">
                    <label for="describe-field" class="col-form-label text-md-left">个性签名</label>
                </div>
                <div class="col-md-10">
                    <textarea name="describe" id="describe-field" cols="30" rows="3" class="form-control" placeholder="自己的个性签名：一段自己的心情">{{ old('describe',$user->describe) }}</textarea>
                </div>
            </div>

            <div class="text-center mt-2">

                <button type="submit" class="btn btn-primary">修改信息</button>
            </div>
        </form>
    </div>
</div>