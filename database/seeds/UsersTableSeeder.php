<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = app(Faker\Generator::class);
        // 职位填充
        $dutys = [
            'PHPer', 'JAVAer', 'PYTHONer', 'C++er'
        ];

        $users = factory(User::class)->times(10)->make()->each(function ($user, $index) use ($faker, $dutys){
           $user->duty = $faker->randomElement($dutys);
        });

        // 让隐藏的字段显示，并转成数组
        $users = $users->makeVisible(['password', 'remember_token'])->toArray();

        // 添加数据
        User::insert($users);

        $user = User::first();
        $user->name = 'Junge';
        $user->email = '1520577057@qq.com';
        $user->avatar = '/uploads/images/avatar/201904/27/2_1556358973_CewWBYqJc9.jpg';
        $user->background =  '/uploads/images/background/201904/27/2_1556359062_u0ISuOHEDZ.jpg';
        $user->level = 50;
        $user->gender = 1;
        $user->company = '腾讯';
        $user->duty = 'PHPER';
        $user->save();
    }
}
