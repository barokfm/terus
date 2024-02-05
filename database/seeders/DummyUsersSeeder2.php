<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DummyUsersSeeder2 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userData = [
            [
                'name'=>'Mas Admin',
                'email'=>'adminn@gmail.com',
                'role'=>'admin',
                'password'=>bcrypt('123456')
            ],
            [
                'name'=>'Mas kepala',
                'email'=>'kepala@gmail.com',
                'role'=>'kepala',
                'password'=>bcrypt('123456')
            ],
            [
                'name'=>'Mas sekertaris',
                'email'=>'sekertaris@gmail.com',
                'role'=>'sekertaris',
                'password'=>bcrypt('123456')

            ],
        ];
        foreach ($userData as $key => $val){
            User::create($val);
        }
    }
}
