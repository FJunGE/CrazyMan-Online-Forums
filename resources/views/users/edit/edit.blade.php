@extends('layouts.app')
@section('title','修改个人资料')
@section('top_css','py-4 container')
@section('content')
    <div class="user-edit">
        <div class="container">
            <div class="row mt-2">
                <div class="col-lg-3">
                    <div class="box box-radius box-body">
                        <header class="mb-2">
                            <i class="fa fa-cog fa-fw"></i>
                            <b>设置</b>
                        </header>
                        <section>
                            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">个人账号</a>
                                <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</a>
                                <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</a>
                                <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a>
                            </div>
                        </section>
                    </div>
                </div>
                <div class="col-lg-9"></div>
            </div>
        </div>
    </div>
@endsection