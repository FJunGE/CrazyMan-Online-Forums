<div class="box box-radius box-body">
    <div class="border-bottom mb-2">
        <i class="fa fa-edit ml-1 mr-2"></i>
        <h5 class="d-inline-flex">图形设置</h5>
    </div>
    <div class="card-body">
        <form action="{{ route('users.update_image', $user->id) }}" class="form-horizontal" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
            {{ csrf_field() }}
            @method('PUT')

            @if($user->avatar)
                <img src="{{ config('aoo.url').$user->avatar }}" class="thumbnail img-thumbnail" alt="{{ $user->avatar }}" width="300">
            @endif

            <div class="form-group d-flex justify-content-start">
                <input type="file" name="avatar">
            </div>

            <div class="mt-2">
                <button type="submit" class="btn btn-primary">修改信息</button>
            </div>
        </form>
    </div>
</div>