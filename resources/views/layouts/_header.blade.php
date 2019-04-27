<nav class="navbar navbar-expand-md navbar-light navbar-laravel">
    <div class="container">
        <a class="navbar-brand text-22 d-flex align-items-center antialiased active" href="{{ route('home') }}">
            <img alt="image" src="{{ config('app.url','http://localhost')  }}/img/crazyman-logo.png" height="35" class="mr-2 avatar-40">
            <span class="text-muted ml-1">{{ config('app.name', 'CrazyMan') }}</span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-center col-md-8 navbar-collapse-1" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav justify-content-center dropdown">
                <li class="nav-item"><a href="{{ route('home') }}" class="nav-link">首页</a></li>
                <li class="nav-item">
                    <a href="navbarDropdown1" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        分类 <span class="caret"></span>
                    </a>
                    <div class="dropdown-menu text-center" aria-labelledby="navbarDropdown1" style="min-width: 7rem;left: 32px;">
                        <a class="dropdown-item" href=""><i class="fa fa-share-alt mr-2"></i>资源分享</a>
                        <a class="dropdown-item" href=""><i class="fa fa-question-circle mr-2"></i>技术问答</a>
                        <a class="dropdown-item" href=""><i class="fa fa-book mr-2"></i>教程文章</a>
                        <a class="dropdown-item" href=""><i class="fa fa-bullhorn mr-2"></i>社区公告</a>
                    </div>
                </li>
                <li class="nav-item"><a href="" class="nav-link">关于</a></li>
                <li class="nav-item"><a href="" class="nav-link">商城</a></li>
                <li class="nav-item">
                    <form action="" class="search-form form-inline my-2 my-lg-0">
                        {{ csrf_field() }}
                        <input type="text" class="form-control mr-sm-n2 my-lg-0" placeholder="搜索">
                        <button class="form-control mr-sm-n2 btn btn-primary my-lg-0">搜索</button>
                    </form>
                </li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            @if (Auth::user() ->avatar)
                                <img src="{{ config('app.url').Auth::user()->avatar }}" class="avatar-30 img-responsive img-circle mr-1" alt="">
                                @else
                                <img src="{{ config('app.url') }}/img/avatar.jpg" class="avatar-30 img-responsive img-circle mr-1" alt="">
                            @endif

                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu text-center" aria-labelledby="navbarDropdown">

                            <a class="dropdown-item" href="{{ route('users.show',Auth::user()) }}"><i class="fa fa-address-card mr-1"></i>个人中心</a>
                            <a class="dropdown-item" href="{{ route('users.edit',['user'=>Auth::user(),'active'=>'info']) }}"><i class="fa fa-edit mr-1"></i>修改资料</a>

                            <div class="dropdown-divider"></div>

                            <form action="{{ route('logout') }}"  method="POST">
                                {{ csrf_field() }}
                                <button class="btn btn-danger btn-block" type="submit" name="button">
                                    退出
                                </button>
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>