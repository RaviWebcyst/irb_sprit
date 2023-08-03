<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = [
            [
               'name'=>'admin',
               'email'=>'admin@gmail.com',
                'is_admin'=>'1',
                'uid'=>'admin',
               'password'=> bcrypt('admin'),
            ],
            [
               'name'=>'user',
               'email'=>'user@gmail.com',
                'is_admin'=>'0',
                "spid"=>'admin',
                "uid"=>'AB12345',
               'password'=> bcrypt('11'),
            ],
        ];
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
