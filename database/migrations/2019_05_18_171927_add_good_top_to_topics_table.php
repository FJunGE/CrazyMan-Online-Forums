<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddGoodTopToTopicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('topics', function (Blueprint $table) {
            $table->boolean('is_good')->default(false)->comment('是否是精品');
            $table->boolean('is_top')->default(false)->comment('是否置顶');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('topics', function (Blueprint $table) {
            $table->dropColumn('is_good');
            $table->dropColumn('is_top');
        });
    }
}
