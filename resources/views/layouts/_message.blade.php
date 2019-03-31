{{-- 闪存：将数据存放到session中，并且只会保存到下一个http请求之前
    闪存数据主要是保存短期数据，如提示数据
 --}}
@foreach (['danger','warning','success','info'] as $msg)
    @if (session()->has($msg))
        <div class="flash-message">
            <p class="alert alert-{{ $msg }}">
                {{ session()->get($msg) }}
            </p>
        </div>
    @endif
@endforeach
