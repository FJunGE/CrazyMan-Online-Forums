@extends('layouts.app')
@section('title','首页')
@section('content')
    <div class="container index-list">
        <div class="row mt-2">

            <div class="col-md-9">
                <div class="box box-flush box-radius">
                    <div class="box-body">
                        <ul class="nav nav-pills">
                            <li class="nav-item"><a href="" class="nav-link active">最新</a></li>
                            <li class="nav-item"><a href="" class="nav-link">最热</a></li>
                            <li class="nav-item"><a href="" class="nav-link">精华</a></li>
                        </ul>
                    </div>
                    @include('pages._list')
                </div>
            </div>
            <div class="col-md-3 list-box">
                @include('pages._sidebar')
            </div>
        </div>
    </div>
@endsection
