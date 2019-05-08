@extends('layouts.app')
@section('title','资金捐赠')
@section('content')
    <div class="container box box-radius box-body" style="background: white">
        <h5 class="">您的每一笔捐赠，将成为我们最大的动力，CrayMan团队由衷的感谢您</h5>
        <form action="{{ route('donate.paypal') }}" class="form-horizontal form" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <div class="">
                    {{--<input type="hidden" value="{{ \Illuminate\Support\Str::random(40) }}">--}}
                    <input type="number" step="0.01" class="form-control" name="amount" id="money-field" placeholder="捐款的金额" value="" style="max-width: 50%">
                </div>
            </div>
            <div class="form-group">
                @foreach($paymentMothods as $mothod)
                    <label class="radio-inline mr-5">
                        <input type="radio" name="payment_mothod" value="{{ $mothod->id }}"> {{ $mothod->method }}
                    </label>
                @endforeach
            </div>
            <div>
                <button type="submit" class="btn btn-primary">去支付</button>
            </div>

        </form>
    </div>
    <div class="box box-radius box-body mt-3" style="background: white">
        <h5 class="p-2">捐赠记录</h5>
        <ul class="list-group list-group-flush">
            @if(empty($donate))
                <span class="text-center">暂无记录</span>
            @else
                @foreach($donates as $donate)
                    <li class="list-group-item">
                        <div class="d-flex justify-content-between ">
                            <span>${{ number_format($donate->amount,2) }}</span>
                            <span>{{ $donate->created_at }}</span>
                            <span>{{ $donate->type }}</span>
                            @if($donate->status == '未支付')
                                <a href="">{{ $donate->status }}</a>
                            @else
                                <span>{{ $donate->status }}</span>
                            @endif
                        </div>
                    </li>
                @endforeach
            @endif
        </ul>
    </div>
@endsection
