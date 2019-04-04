@extends('layouts.app')
@section('title','个人中心')
@section('top_css','')
@section('content')
    <div class="main-content">
        <div class="user-show">
            <header class="user-header d-flex align-items-end bg-grey-blue py-3" style="background-image:url('https://yike.io/banners/shanghai.jpg');">
                <div class="align-items-center flex-row d-md-flex p-2 text-white w-100 position-relative container user-profile">
                    <img src="{{ config('app.url')  }}/img/avatar.jpg" class="avatar-120 avatar" alt="">
                    <div class="ml-md-3">
                        <h1 class="mt-2 mb-0">JunGE</h1>
                        <div class="my-1"></div>
                        <div class="extends text-white d-none d-md-block d-lg-flex">
                            <div class="mr-1">
                                <i class="fa fa-calendar-alt"></i>
                                加入于 1周前
                            </div>
                        </div>
                        <div class="pt-2">
                            <div class="d-flex justify-content-start flex-wrap"></div>
                        </div>
                    </div>
                </div>
            </header>
        </div>
    </div>
@endsection
