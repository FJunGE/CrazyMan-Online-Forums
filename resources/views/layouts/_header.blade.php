<nav class="navbar navbar-expand-md navbar-light navbar-laravel">
    <div class="container">
        <a class="navbar-brand text-22 d-flex align-items-center antialiased active" href="{{ url('/') }}">
            <img alt="image" src="{{ config('app.url','http://localhost')  }}/img/crazyman-logo.png" height="35" class="mr-2 avatar-40">
            <span class="text-muted ml-1">{{ config('app.name', 'CrazyMan') }}</span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-center col-md-8 navbar-collapse-1" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav justify-content-center">
                <li class="nav-item"><a href="" class="nav-link">首页</a></li>
                <li class="nav-item"><a href="" class="nav-link">分类</a></li>
                <li class="nav-item"><a href="" class="nav-link">关于</a></li>
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
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>