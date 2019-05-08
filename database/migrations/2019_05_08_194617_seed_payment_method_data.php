<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SeedPaymentMethodData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $datas = [
            1=>['method' => 'Paypal'],
            2=>['method' => 'AliPay'],
            3=>['method' => 'WechatPay'],
        ];

        DB::table('payment_methods')->insert($datas);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('payment_methods')->truncate();
    }
}
