<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=array(
            array(
                'name'=>'Admin',
                'email'=>'admin@mail.com',
                'password'=>Hash::make('admin'),
                'role'=>'admin',
                'status'=>'active'
            ),
            array(
                'name'=>'User',
                'email'=>'user@mail.com',
                'password'=>Hash::make('user'),
                'role'=>'user',
                'status'=>'active'
            ),
        );

        DB::table('users')->insert($data);

    }
}
