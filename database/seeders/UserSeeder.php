<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::insert(
            [[
                'name'=>'admin',
                'email'=>'admin@admin.com',
                'password'=>bcrypt('password'),
                'role'=>'admin'
            ],[
                'name'=>'manager',
                'email'=>'manager@manager.com',
                'password'=>bcrypt('password'),
                'role'=>'manager'
            ],[
                'name'=>'kasir',
                'email'=>'kasir@kasir.com',
                'password'=>bcrypt('password'),
                'role'=>'kasir'
            ],]
        );
    }
}
