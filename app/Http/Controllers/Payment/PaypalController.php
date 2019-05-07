<?php

namespace App\Http\Controllers\Payment;

use App\Events\PaymentSuccess;
use App\Models\Donate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Mockery\Exception;
use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Rest\ApiContext;
use Auth;

class PaypalController extends Controller
{
    private $api_context;
    public function __construct()
    {
        $paypal_conf = \Config::get('paypal');
        $this->api_context = new ApiContext(new OAuthTokenCredential(
            $paypal_conf['client_id'],
            $paypal_conf['secret']
        ));
        $this->api_context->setConfig($paypal_conf['settings']);
    }

    public function done(Request $request, $donate)
    {
        $paymentID = trim($request->get('paymentId'));
        $payerID= trim($request->get('PayerID'));

        if (!isset($paymentID,$payerID,$donate)){
            alert()->error('支付失败');
            return redirect()->route('donate.show');
        }

        if (!$donate){
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
        $donate = Donate::find($donate);
        $donate->status = 1;
        $donate->payment_id = $paymentID;
        $donate->save();
        return redirect()->route('home');

    }

    public function cancel()
    {
        alert()->success('交易关闭');
        return redirect()->route('donate.show', ['user'=>Auth::id()]);
    }
}
