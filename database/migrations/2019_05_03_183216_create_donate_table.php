<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->float('amount')->default(0);
            $table->string('type');
            $table->integer('status')->default(0)->comment('0=>未支付，1=>已支付，3=>支付异常，4=>取消支付');
            $table->string('currency')->comment('币种');
            $table->boolean('is_email')->default(false);
            $table->integer('user_id');
            $table->string('payment_id')->nullable(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('donates');
    }
}
