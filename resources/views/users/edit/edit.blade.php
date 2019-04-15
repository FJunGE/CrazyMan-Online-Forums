@extends('layouts.app')
@section('title','修改个人资料')
@section('content')
    <div class="user-edit">
        <div class="container">
            <div class="row mt-2">
                <div class="col-lg-3 mb-2">
                    <div class="box box-radius box-body">
                        <header class="mb-2">
                            <i class="fa fa-cog fa-fw"></i>
                            <b>设置</b>
                        </header>
                        <section>
                            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"><i class="fa fa-newspaper mr-2"></i>个人信息</a>
                                <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false"><i class="fa fa-image mr-2"></i>头像设置</a>
                                <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false"><i class="fa fa-bell mr-2"></i>消息通知</a>
                                <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="fa fa-lock mr-2"></i>密码修改</a>
                            </div>
                        </section>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="box box-radius box-body">
                        <div class="border-bottom mb-2">
                            <i class="fa fa-edit ml-2"></i>
                            <h5 class="d-inline-flex">个人信息修改</h5>
                        </div>
                        <div>
                            <form action="" class="form-horizontal" method="POST">
                                <div class="form-group">
                                    <label for="name" class="col-md-2 col-form-label text-md-left">用户名</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="name" placeholder="用户名">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection