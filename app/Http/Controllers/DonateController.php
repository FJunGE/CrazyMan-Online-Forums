<?php

namespace App\Http\Controllers;

use App\Models\Donate;
use App\Models\PaymentMethods;
use Illuminate\Http\Request;
use PayPal\Api\Amount;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Exception\PayPalConnectionException;
use PayPal\Rest\ApiContext;
use alert;
use Auth;

class DonateController extends Controller
{
    private $api_context;
    private $currency;
    public function __construct()
    {
        $this->middleware('auth')->except('');
        $paypal_conf = \Config::get('paypal');
        $this->api_context = new ApiContext(new OAuthTokenCredential(
            $paypal_conf['client_id'],
            $paypal_conf['secret']
        ));
        $this->api_context->setConfig($paypal_conf['settings']);
        $this->currency = 'USD';
    }

    public function show(Request $request){
        $paymentMothods = PaymentMethods::all();
        $donates = Donate::where('user_id', $request->user)->orderBy('created_at','desc')->paginate(15);
        return view('donate.show',compact('donates','paymentMothods'));
    }

    public function store(Request $request){
        $this->validate($request, [
            'amount' => 'required|numeric',
            'payment_mothod' => 'required',
        ]);
    }


    public function paypal(Request $request){

        $paymentData = [
            'amount' => $request->amount,
            'type'   => 'Paypal',
            'status' => '未支付',
            'currency'=> $this->currency,
            'user_id'=> Auth::id(),
        ];
        $donate = Donate::create($paymentData);
        try{
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
            $redirectUrl->setReturnUrl(route('paypal.done',['donateId'=>$donate->id]))->setCancelUrl(route('paypal.cancel'));

            $payment = new Payment();
            $payment->setIntent('sale')->setPayer($payer)->setRedirectUrls($redirectUrl)->setTransactions([$transaction]);
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


        $approvalUrl = $payment->getApprovalLink();
        header("Location: {$approvalUrl}");
    }
}
