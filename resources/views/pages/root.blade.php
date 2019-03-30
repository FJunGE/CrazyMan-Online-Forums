@extends('layouts.app')
@section('title','首页')
@section('content')
    <div class="container index-list">
        <div class="row mt-2">

            <div class="col-md-9">
                <div class="box box-radius">
                    <img class="first-slide" src="https://static.laravelacademy.org/wp-statics/images/carousel/LaravelAcademy.jpg" alt="First slide" style="width: 100%">
                </div>
                {{-- 列表数据 --}}
                <div class="box box-flush box-radius mt-4">
                    <div class="box-body">
                        <ul class="nav nav-pills">
                            <li class="nav-item"><a href="" class="nav-link active">最新</a></li>
                            <li class="nav-item"><a href="" class="nav-link">最热</a></li>
                            <li class="nav-item"><a href="" class="nav-link">精华</a></li>
                        </ul>
                    </div>
                    @include('pages._list')
                </div>

                {{-- 左侧悬浮 --}}
                <div class="thread-toolbar">
                    <div id="clap" class="text-center" style="transform: scale(1, 1);">
                        <button class="btn btn-light" title="发表一篇自己的文章"><i class="fa fa-pen-alt"></i></button>
                    </div>
                    <div class="share-action mt-3">
                        <p class="text-center text-gray-40 text-14">发贴</p>
                        <div class="text-center">
                            <button class="btn btn-light" title="登录/注册"><i class="fa fa-user-circle"></i></button>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-light" title="签到"><i class="fa fa-magic"></i></button>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-light"><i class="fa fa-chevron-up"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 list-box">
                @include('pages._sidebar')
            </div>
        </div>
    </div>
@endsection
