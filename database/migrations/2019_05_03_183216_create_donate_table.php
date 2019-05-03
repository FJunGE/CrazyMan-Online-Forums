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
        Schema::create('donate', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('amount');
            $table->string('type');
            $table->enum('status',['已支付','取消支付','支付失败']);
            $table->string('currency')->comment('币种');
            $table->integer('is_email');
            $table->integer('user_id');
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
        Schema::dropIfExists('donate');
    }
}
