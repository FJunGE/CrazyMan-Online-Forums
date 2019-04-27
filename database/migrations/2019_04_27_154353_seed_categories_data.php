<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SeedCategoriesData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $categories = [
            1 => [
                'name' => '资源分享',
                'description' => 'CrazyMan 资源分享，分享各类资源，学习，生活，娱乐，技术教程',
                'icon' => 'fa-share-alt',
            ],
            2 => [
                'name' => '技术问答',
                'description' => 'CrazyMan 技术问答，互帮互助，学习系统的有效提高',
                'icon' => 'fa-question-circle',
            ],
            3 => [
                'name' => '教程文章',
                'description' => 'CrazyMan 教程文章，分享最全面的教程文章',
                'icon' => 'fa-book',
            ],
            4 => [
                'name' => '社区公告',
                'description' => 'CrazyMan 社区公告，公告列表',
                'icon' => 'fa-bullhorn',
            ],
        ];

        DB::table('categories')->insert($categories);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('categories')->truncate();
    }
}
