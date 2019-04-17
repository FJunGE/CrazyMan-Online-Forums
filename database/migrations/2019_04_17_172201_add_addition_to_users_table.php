<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAdditionToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('wechat')->nullable();
            $table->enum('gender',[1,2]);
            $table->string('company')->nullable();
            $table->string('duty')->nullable();
            $table->string('url_personal')->nullable();
            $table->string('url_github')->nullable();
            $table->string('url_weibo')->nullable();
            $table->string('url_twitter')->nullable();
            $table->string('url_linkedin')->nullable();
            $table->string('url_steam')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('wechat');
            $table->dropColumn('gender');
            $table->dropColumn('company');
            $table->dropColumn('duty');
            $table->dropColumn('url_personal');
            $table->dropColumn('url_github');
            $table->dropColumn('url_weibo');
            $table->dropColumn('url_twitter');
            $table->dropColumn('url_linkedin');
            $table->dropColumn('url_steam');
        });
    }
}
