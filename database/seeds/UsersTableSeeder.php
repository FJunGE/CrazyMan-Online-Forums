<?php

use Illuminate\Database\Seeder;

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
        $avatar = '/img/avatar.jpg';
        $genders = [
            'PHPer', 'JAVAer', 'PYTHONer', 'C++er'
        ];
        


    }
}
