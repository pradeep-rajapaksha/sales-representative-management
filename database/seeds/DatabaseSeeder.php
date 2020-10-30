<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     * command: ex -> `php artisan make:seeder UserSeeder`
     * @return void
     */
    public function run()
    {
    	// 
        $this->call(UserSeeder::class);
        $this->call(SalesRepresentativeSeeder::class);
    }
}
