<?php

namespace App\Http\Controllers;

use App\Events\PaymentSuccess;
use App\Models\Donate;
use Illuminate\Http\Request;
use PayPal\Api\Amount;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Exception\PayPalConnectionException;
use PayPal\Rest\ApiContext;
use alert;
use App\Http\Middleware\LimitFromRepeatSubmit;

class DonateController extends Controller
{
    private $api_context;
    private $currency;
    public function __construct()
    {
//        $this->middleware('auth')->except('show');
        $paypal_conf = \Config::get('paypal');
        $this->api_context = new ApiContext(new OAuthTokenCredential(
            $paypal_conf['client_id'],
            $paypal_conf['secret']
        ));
        $this->api_context->setConfig($paypal_conf['settings']);
        $this->currency = 'USD';
    }

    public function show(){
        return view('donate.show');
    }

    public function paypal(Request $request){
        $payer = new Payer();
        $payer->setPaymentMethod('paypal');

        $item = new Item();
        $item->setName('捐赠资金')->setCurrency('USD')->setQuantity(1)->setPrice($request->get('amount'));

        $itemList =  new ItemList();
        $itemList->setItems([$item]);

        $amount = new Amount();
        $amount->setCurrency($this->currency)->setTotal($request->get('amount'));

        $transaction = new Transaction();
        $transaction->setAmount($amount)->setItemList($itemList)->setDescription('捐赠CrazyMan网站资金');

        $redirectUrl = new RedirectUrls();
        $redirectUrl->setReturnUrl(route('paypal.done',['donateId'=>1]))->setCancelUrl(route('paypal.cancel'));

        $payment = new Payment();
        $payment->setIntent('sale')->setPayer($payer)->setRedirectUrls($redirectUrl)->setTransactions([$transaction]);
        try{
            $payment->create($this->api_context);
        }catch(PayPalConnectionException $e){
            if (config('app.debug')){
                alert()->error('连接失败，稍后在尝试');
                return redirect()->route('donate.show');
            }else{
                alert()->error('支付失败，请尝试其他支付方式');
                return redirect()->route('donate.show');
            }
        }

        $paymentData = [
            'amount' => $request->amount,
            'type'   => 'Paypal',
            'status' => '未支付',
            'currency'=> $this->currency,
            'user_id'=>1,
        ];
        Donate::create($paymentData);
        $approvalUrl = $payment->getApprovalLink();
        header("Location: {$approvalUrl}");
    }
}
