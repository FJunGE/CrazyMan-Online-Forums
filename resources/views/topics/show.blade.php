@extends('layouts.app')
@section('title','文章详情页')
@section('content')
    <div class="container topic-show">
        <div class="row mt-2">
            
            <div class="col-md-9">
                <div class="box box-radius box-flush box-body" >
                    <header class="">
                        <h4 class="mb-3 pb-3 border-bottom">Laravel + Laravel-echo + EasyWeChat 实现微信扫码登录</h4>
                    </header>
                    <section class="markdown-body">
                        <span>扫码登录成为一种日趋流行的登录方式，它具有较高的安全性，同时又使我们从记忆大量的账号密码并手动输入的繁琐流程中解脱出来，有些平台甚至无账号也能扫码登录，连注册的麻烦都省了。</span>
                    </section>
                </div>
                <div class="box box-radius box-body mt-3 mb-3" >
                    div
                </div>

                {{-- 左侧悬浮 --}}
                <div class="thread-toolbar">
                    <div id="clap" class="text-center" style="transform: scale(1, 1);">
                        <button class="btn btn-light"><i class="fa fa-thumbs-up"></i></button>
                    </div>
                    <div class="share-action mt-3 ">
                        <p class="text-center text-gray-40 text-14">分享</p>
                        <div class="text-center">
                            <button class="btn btn-light"><i class="fa fa-link"></i></button>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-light"><i class="fa fa-comments"></i></button>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-light"><i class="fa fa-heart"></i></button>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-light"><i class="fa fa-eye"></i></button>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-3 list-box">
                {{-- 右侧公告 --}}
                @include('topics._sidebar')
                @include('pages._sidebar')
            </div>
        </div>
    </div>
@endsection