<div class="box box-radius box-body">
    <div class="border-bottom mb-2">
        <i class="fa fa-edit ml-1 mr-2"></i>
        <h5 class="d-inline-flex">密码修改</h5>
    </div>
    <div class="card-body">
        <form action="{{ route('users.update', $user->id) }}" class="form-horizontal" method="POST" accept-charset="UTF-8">
            {{ csrf_field() }}
            @method('PUT')

            <div class="form-group d-flex justify-content-center">
                <div class="col-md-2 text-center">
                    <label for="name-password" class="col-form-label text-md-left">旧密码</label>
                </div>
                <div class="col-md-10">
                    <input type="password" class="form-control" name="old_password" id="name-password" value="">
                </div>
            </div>

            <div class="form-group d-flex justify-content-center">
                <div class="col-md-2 text-center">
                    <label for="name-password" class="col-form-label text-md-left">新密码</label>
                </div>
                <div class="col-md-10">
                    <input type="password" class="form-control" name="password" id="name-password" value="">
                </div>
            </div>
            <div class="form-group d-flex justify-content-center">
                <div class="col-md-2 text-center">
                    <label for="name-password" class="col-form-label text-md-left">再次确认密码</label>
                </div>
                <div class="col-md-10">
                    <input type="password" class="form-control" name="password" id="name-password" value="">
                </div>
            </div>



            <div class="text-center mt-2">

                <button type="submit" class="btn btn-primary">修改信息</button>
            </div>
        </form>
    </div>
</div>