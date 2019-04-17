@extends('layouts.app')
@section('title','修改个人资料')
@section('content')
    <div class="user-edit">
        <div class="container">
            <div class="row mt-2">
                <div class="col-lg-3 mb-2">
                    @include('users.edit._nav')
                </div>
                <div class="col-lg-9">
                    @include('users.edit._information')
                </div>
            </div>
        </div>
    </div>
@endsection