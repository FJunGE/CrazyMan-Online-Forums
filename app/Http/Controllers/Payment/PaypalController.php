<?php

namespace App\Http\Controllers\Payment;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PaypalController extends Controller
{
    public function done(Request $request)
    {
        $paymentID = trim($request->get('paymentId'));
        $payerID= trim($request->get('PayerID'));

        if (!$result && !$paymentID && !$payerID){
            return redirect()->route('donate.show');
        }

        if (!isset($paymentID,$payerID,$result)){
            alert()->danger('支付失败');
            return redirect()->route('donate.show');
        }

        if (!$result){
            session('success',"交易关闭， 交易id：$paymentID, 支付者：$payerID");
            return redirect()->route('donate.show');
        }

        $payment = Payment::get($paymentID, $this->api_context);
        $execute = new PaymentExecution();
        $execute->setPayerId($payerID);

        try{
            $payment->execute($execute, $this->api_context);
        }catch(Exception $e){
            session('success',"交易关闭， 交易id：$paymentID, 支付者：$payerID");
        }

        event(new PaymentSuccess());
        return redirect()->route('home');

    }

    public function cancel()
    {

    }
}
