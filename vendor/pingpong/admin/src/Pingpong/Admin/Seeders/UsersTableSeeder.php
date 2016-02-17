<?php

namespace Pingpong\Admin\Seeders;

use Illuminate\Database\Seeder;
use Pingpong\Admin\Entities\User;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $user = User::create([
            'email' => 'admin@appts.local',
            'password' => 'password',
        ]);

        $user->addRole(1);
    }
}
