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
<<<<<<< HEAD
=======
                'uid'=>'admin',
>>>>>>> 2176a109c70b61d8e7618e17d75440b582ce73ee
               'password'=> bcrypt('admin'),
            ],
            [
               'name'=>'user',
               'email'=>'user@gmail.com',
                'is_admin'=>'0',
<<<<<<< HEAD
=======
                "spid"=>'admin',
                "uid"=>'AB12345',
>>>>>>> 2176a109c70b61d8e7618e17d75440b582ce73ee
               'password'=> bcrypt('11'),
            ],
        ];
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
