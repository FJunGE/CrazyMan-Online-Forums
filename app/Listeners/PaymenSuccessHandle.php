<?php

namespace App\Listeners;

use App\Events\PaymentSuccess;
use App\Models\Donate;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class PaymenSuccessHandle
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  PaymentSuccess  $event
     * @return void
     */
    public function handle(PaymentSuccess $event)
    {
        alert()->success('交易成功，感谢您我的恩人');
    }
}
