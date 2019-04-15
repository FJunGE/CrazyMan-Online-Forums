@extends('layouts.app')
@section('title','个人中心')
@section('content')
    <div class="user-show">
        {{-- 个人信息 --}}
        <header class="user-header d-flex align-items-end bg-grey-blue py-3" style="background-image:url('http://img.3dmgame.com/uploads/images/news/20181124/1543042277_150670.jpg');">
            <div class="align-items-center flex-row d-md-flex p-2 text-white w-100 position-relative container user-profile">
                <img src="{{ config('app.url')  }}/img/avatar.jpg" class="avatar-120 avatar" alt="">
                <div class="ml-md-3">
                    <h1 class="mt-2 mb-0">{{ $user->name }}</h1>
                    <div class="my-1"></div>
                    <div class="extends text-white d-none d-md-block d-lg-flex">
                        <div class="mr-1">
                            <i class="fa fa-calendar-alt"></i>
                            加入于 {{ $user->created_at }}
                        </div>
                    </div>
                    <div class="pt-2">
                        <div class="d-flex justify-content-start flex-wrap"></div>
                    </div>
                </div>
            </div>
        </header>
        <div class="bg-white user-show-navbar mb-1">
            <div class="container">
                <div class="pt-1 nav nav-tab-line text-center shadow-6 align-items-stretch">
                    <div class="nav-item"><a href="" class="nav-link active">最新动态</a></div>
                    <div class="nav-item"><a href="" class="nav-link">讨论 <span class="text-gray-70 pl-1">0</span></a></div>
                    <div class="nav-item"><a href="" class="nav-link">关注 <span class="text-gray-70 pl-1">0</span></a></div>
                    <div class="nav-item"><a href="" class="nav-link">粉丝 <span class="text-gray-70 pl-1">0</span></a></div>
                </div>
            </div>
        </div>
        <div class="pt-4">
            <div class="row">
                <div class="col-lg-9">
                    <div class="list-box">
                        @include('users._list_replie')
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="list-box">
                        @include('users._sidebar')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
