@extends('layouts.app')
@section('title','修改个人资料')
@section('content')
    <div class="user-edit">
        <div class="container">
            @include('layouts._errors')
            <div class="row mt-2">
                <div class="col-lg-3 mb-2">
                    @include('users.edit._nav')
                </div>
                <div class="col-lg-9">
                    @switch($active)
                        @case ('info')
                            @include('users.edit._information',['user'=>$user])
                        @break

                        @case ('image')
                            @include('users.edit._image')
                        @break

                        @case ('password')
                            @include('users.edit._password')
                        @break
                    @endswitch
                </div>
            </div>
        </div>
    </div>
@endsection