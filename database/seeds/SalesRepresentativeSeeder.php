<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class SalesRepresentativeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Tom Cruise',
            'email' => 'tom.cruise@email.com',
            'telephone' => '0123456789',
            'joined_on' => '2020-01-01',
            'role_id' => 2, // Role: Sales Representative
            'salse_route_id' => 1, // Sales Route
            'status' => 'active', 
            // 'password' => Hash::make('password'), // Password: for future implementation
            'created_at' => date('Y-m-d H:i:s', strtotime("now")),
        ]);
    }
}
