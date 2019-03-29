@extends('layouts.app')
@section('title','文章详情页')
@section('content')
    <div class="container topic-show">
        <div class="row mt-2">
            
            <div class="col-md-9">
                <div class="box box-radius box-flush box-body border-bottom" >
                    <header class="">
                        <h4 class="mb-3 pb-3 border-bottom">Laravel + Laravel-echo + EasyWeChat 实现微信扫码登录</h4>
                    </header>
                    <section class="markdown-body">
                        <span>扫码登录成为一种日趋流行的登录方式，它具有较高的安全性，同时又使我们从记忆大量的账号密码并手动输入的繁琐流程中解脱出来，有些平台甚至无账号也能扫码登录，连注册的麻烦都省了。</span>
                        <p>
                        <p>
                            对于接入微信开放平台的公众号应用来说，实现扫码登录是相当容易的，有 EasyWeChat SDK 加持，再按着官方的文档一把梭，很快就能完成。
                            然而本文所要讨论的是另一种情况，有时候出于某些原因，自己的公众号不能接入开放平台，但又想进行微信扫码登录，这种情况下显示就不能再换官方的套路来了。但只要我们稍作变通，就能实现这一需求。
                        </p>
                        <p>
                            在社区发帖请注意：
                            请传播美好的事物，这里拒绝低俗、诋毁、谩骂等相关信息 请尽量分享技术相关的话题，谢绝发布社会, 政治等相关新闻 这里绝对不讨论任何有关盗版软件、音乐、电影如何获得的问题

                            在高质量优秀社区的我们：
                            分享生活见闻, 分享知识 接触新技术, 讨论技术解决方案 为自己的创业项目找合伙人, 遇见志同道合的人 自发线下聚会, 加强社交 发现更好工作机会 甚至是开始另一个神奇的开源项目 本规定旨在为大家营造健康有序的社区环境，本社区保留该规定的最终解释权。

                            以上内容摘自《社区发帖和管理规范》，我们将会对一切社区不友善的行为零容忍，更多规范说明请移步：《社区发帖和管理规范》。
                        </p>
                    </section>
                    <div class="mt-3 pt-1 border-top">
                        <div class="d-flex justify-content-start">
                            <button class="btn btn-sm btn-light" title="点赞">
                                <i class="fa fa-thumbs-up text-success"></i>
                            </button>
                            <span class="align-self-center">15</span>

                            <button class="btn btn-sm btn-light ml-2" title="转发">
                                <i class="fa fa-share-square text-primary"></i>
                            </button>
                            <span class="align-self-center">15</span>

                            <button class="btn btn-sm btn-light ml-2" title="举报这篇文章">
                                <i class="fa fa-exclamation-circle text-danger"></i>
                            </button>

                            <button class="btn btn-sm btn-light ml-2" title="收藏">
                                <i class="fa fa-star text-warning"></i>
                                <span class="align-self-center">收藏</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="reply-count mt-5 ">
                    <div class="d-flex justify-content-center mb-1">
                        <h3>56</h3><span class="align-self-center ml-1">条评论</span>
                    </div>
                </div>
                <div class="box box-radius mb-3" >
                    @include('replies._list')
                </div>
                @include('replies.comment')

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