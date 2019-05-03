@extends('layouts.app')
@section('title','资金捐赠')
@section('content')
    <div class="container box box-radius box-body" style="background: white">
        <h5 class="">您的每一笔捐赠，将成为我们最大的动力，CrayMan团队由衷的感谢您</h5>
        <form action="{{ route('donate.paypal') }}" class="form-horizontal form" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <div class="">
                    <input type="number" step="0.01" class="form-control" name="amount" id="money-field" placeholder="捐款的金额" value="" style="max-width: 50%">
                </div>
            </div>
            <div class="form-group">
                <label class="radio-inline mr-5">
                    <input type="radio" name="Payment" value="paypal"> PayPal
                </label>
                <label class="radio-inline mr-5">
                    <input type="radio" name="Payment" value="alipay"> AliPay
                </label>
                <label class="radio-inline">
                    <input type="radio" name="Payment" value="wechatpay"> WechatPay
                </label>
            </div>
            <div>
                <button type="submit" class="btn btn-primary">去支付</button>
            </div>

        </form>
    </div>
    <div class="box box-radius box-body mt-3" style="background: white">
        <h5 class="p-2">捐赠记录</h5>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">
                <div class="d-flex justify-content-between ">
                    <span>10.USD</span>
                    <span>2019-05-03 17:53:36</span>
                    <span>Paypal</span>
                    <span>交易成功</span>
                </div>
            </li>
            <li class="list-group-item">
                <div class="d-flex justify-content-between ">
                    <span>10.USD</span>
                    <span>2019-05-03 17:53:36</span>
                    <span>Paypal</span>
                    <a href="#">交易关闭</a>
                </div>
            </li>
        </ul>
    </div>
@endsection
