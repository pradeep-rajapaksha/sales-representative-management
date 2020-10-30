<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Pradeep Rajapaksha',
            'email' => 'pradeepprasanna.rajapaksha4@gmail.com',
            'telephone' => '0712929212',
            'joined_on' => '2020-01-01',
            'role_id' => 1, // Role: Sales Manager (Admin)
            'status' => 'active', 
            'password' => Hash::make('password'),
            'created_at' => date('Y-m-d H:i:s', strtotime("now")),
        ]);
    }
}
