<?php

use Illuminate\Database\Seeder;
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
                'name'=>'Hamidnabil',
                'email'=>'admin@mail.com',
                'password'=>Hash::make('Hamidnabil'),
                'role'=>'admin',
                'status'=>'active'
            ),
            array(
                'name'=>'User A',
                'email'=>'User@mail.com',
                'password'=>Hash::make('User A'),
                'role'=>'user',
                'status'=>'active'
            ),
        );

        DB::table('users')->insert($data);
    }
}
