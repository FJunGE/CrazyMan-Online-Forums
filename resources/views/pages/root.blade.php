@extends('layouts.app')
@section('title','首页')
@section('content')
    <div class="container index-list">
        <div class="row mt-3">

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
            <div class="col-md-3" >
                <div class="box box-radius mb-2">
                    <div class="thread-items mb-2">论坛公告</div>
                    <div>内容</div>
                </div>
                <div class="box" style="border:1px solid">1231</div>
            </div>
        </div>
    </div>
@endsection
