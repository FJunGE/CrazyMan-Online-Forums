<?php

use App\Models\Topic;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Topic::class, function (Faker $faker) {

    // 随机生成句子
    $sentence = $faker->sentence();

    // 随机获取一个月以内的时间
    $updated_at = $faker->dateTimeThisMonth();

    // 创建时间不能大于更新时间
    $created_at = $faker->dateTimeThisMonth($updated_at);

    // 随机数
    $ramdon_number = Str::random(100);
    $boolean_ramdon = Str::random(1);

    return [
        'body' => $faker->text(),
        'title' => $sentence,
        'excerpt' => $sentence,
        'reply_count' => $ramdon_number,
        'view_count' => $ramdon_number,
        'collection' => $ramdon_number,
        'fabulous' => $ramdon_number,
        'forward' => $ramdon_number,
        'is_good' => $boolean_ramdon,
        'is_top' => $boolean_ramdon,
        'created_at' => $created_at,
        'updated_at' => $updated_at,
    ];
});
