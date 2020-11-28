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
        DB::table('users')->insert([
            [
                'name' => 'ジョブズ',
                'email' => 'user1@example.com',
                'sex' => '0',
                'self_introduction' => 'ジョブズです',
                'img_name' => 'sample001.jpg',
                'password' => Hash::make('password123'),
            ],
            [
                'name' => 'ザッカーバーグ',
                'email' => 'user2@example.com',
                'sex' => '1',
                'self_introduction' => 'ザッカーバーグです',
                'img_name' => 'sample002.jpg',
                'password' => Hash::make('password123'),
            ],
            [
                'name' => 'ジェフペゾフ',
                'email' => 'user3@example.com',
                'sex' => '0',
                'self_introduction' => 'ジェフですです',
                'img_name' => 'sample003.jpg',
                'password' => Hash::make('password123'),
            ],
            [
                'name' => 'イーロン',
                'email' => 'user4@example.com',
                'sex' => '0',
                'self_introduction' => 'イーロンです',
                'img_name' => 'sample004.jpeg',
                'password' => Hash::make('password123'),
            ],
            [
                'name' => 'Takabo',
                'email' => 'takaki55730317@gmail.com',
                'sex' => '0',
                'self_introduction' => 'Hi,there!',
                'img_name' => 'IMG_74151606528225.JPG',
                'password' => Hash::make('password123'),
            ],
            [
                'name' => 'Pepe',
                'email' => 'takaki_5573031@yahoo.co.jp',
                'sex' => '1',
                'self_introduction' => 'Nice to mee you!',
                'img_name' => 'pepe777.jpg',
                'password' => Hash::make('password123'),
            ],
        ]);
    }
}
