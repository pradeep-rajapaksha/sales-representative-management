<?php

use Illuminate\Database\Seeder;

class SalseRouteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('salse_routes')->insert([
            'name' => 'Barnes Place',
            'comments' => '',
            'status' => 'active',
        ]);
        DB::table('salse_routes')->insert([
            'name' => 'Bauddhaloka Mawatha',
            'comments' => '',
            'status' => 'active',
        ]);
        DB::table('salse_routes')->insert([
            'name' => 'Union Place',
            'comments' => '',
            'status' => 'active',
        ]);
    }
}
