@extends('layouts.app')
@section('title','个人中心')
@section('content')
    <div class="user-show">
        {{-- 个人信息 --}}
        <header class="user-header d-flex align-items-end bg-grey-blue py-3" style="background-image:url('https://ss1.bdstatic.com/70cFvXSh_Q1YnxGkpoWK1HF6hhy/it/u=2489492398,1961915359&fm=26&gp=0.jpg');">
            <div class="align-items-center flex-row d-md-flex p-2 text-white w-100 position-relative container user-profile">
                <div class="m-auto text-center">
                    <img src="{{ config('app.url')  }}/img/avatar.jpg" class="avatar-120 avatar" alt="">
                    <div class="md-3">
                        <h1 class="mt-2 mb-0 d-inline-flex">{{ $user->name }}</h1>
                        @if($user->gender == 1)
                            <i class="fa fa-mars ml-1" style="color: #1d68a7"></i>
                            @else
                            <i class="fa fa-venus ml-1" style="color: rgb(239,18,98)"></i>
                        @endif
                        <div class="my-1"></div>
                        <div class="extends text-white d-none d-md-block d-lg-flex">
                            <div class="m-auto">
                                <i class="fa fa-calendar-alt mr-1"></i>
                                <span class="shadow">加入于 {{ $user->created_at->diffForHumans() }}</span>
                            </div>
                        </div>
                        <div class="extends text-white mt-2 d-md-block d-lg-flex">
                            <div class="m-auto">
                                <span class="shadow">{{ $user->describe }}</span>
                            </div>
                        </div>
                        <div class="mt-2">
                            <a href="" class="text-white mr-2" title="github"><i class="fab fa-github fa-2x"></i></a>
                            <a href="" class="text-white mr-2" title="微博"><i class="fab fa-weibo fa-2x"></i></a>
                            <a href="" class="text-white mr-2" title="推特"><i class="fab fa-twitter fa-2x"></i></a>
                            <a href="" class="text-white mr-2" title="公众号"><i class="fab fa-weixin fa-2x"></i></a>
                            <a href="" class="text-white mr-2" title="领英"><i class="fab fa-linkedin fa-2x"></i></a>
                            <a href="" class="text-white mr-2" title="Steam"><i class="fab fa-steam fa-2x"></i></a>
                            @if($user->url_personal)
                                <a href="{{ $user->user_personal }}" class="text-white mr-2" title="{{ $user->name }}的个人站点"><i class="fa fa-desktop fa-2x"></i></a>
                            @endif
                        </div>
                        <div class="pt-2">
                            <div class="d-flex justify-content-start flex-wrap"></div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="bg-white user-show-navbar mb-1">
            <div class="container d-flex">
                <div class="pt-1 nav nav-tab-line text-center shadow-6 align-items-stretch d-inline-flex">
                    <div class="nav-item"><a href="" class="nav-link active">最新动态</a></div>
                    <div class="nav-item"><a href="" class="nav-link">讨论 <span class="text-gray-70 pl-1">0</span></a></div>
                    <div class="nav-item"><a href="" class="nav-link">关注 <span class="text-gray-70 pl-1">0</span></a></div>
                    <div class="nav-item"><a href="" class="nav-link">粉丝 <span class="text-gray-70 pl-1">0</span></a></div>

                </div>
                <div class="ml-auto align-items-center pt-1">
                    <div style="padding: 0.5rem">标签</div>
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
