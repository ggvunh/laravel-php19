<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            ['id' => 1, 'name' => 'iPhone', 'cost' => 200000],
            ['id' => 2, 'name' => 'iPad', 'cost' => 500000],
            ['id' => 3, 'name' => 'iMac', 'cost' => 700000],
            ['id' => 4, 'name' => 'Apple Watch', 'cost' => 900000],
        ]);
    }
}
