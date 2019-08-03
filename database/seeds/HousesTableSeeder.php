<?php

use Illuminate\Database\Seeder;

class HousesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('houses')->insert([
            'name' => 'The Victoria',
            'price' => 374662,
            'bedrooms' => 4,
            'bathrooms' => 2,
            'storeys' => 2,
            'garages' => 2,
        ]);
        DB::table('houses')->insert([
            'name' => 'The Xavier',
            'price' => 513268,
            'bedrooms' => 4,
            'bathrooms' => 2,
            'storeys' => 1,
            'garages' => 2,
        ]);
        DB::table('houses')->insert([
            'name' => 'The Como',
            'price' => 454990,
            'bedrooms' => 4,
            'bathrooms' => 3,
            'storeys' => 2,
            'garages' => 3,
        ]);
        DB::table('houses')->insert([
            'name' => 'The Aspen',
            'price' => 384356,
            'bedrooms' => 4,
            'bathrooms' => 2,
            'storeys' => 2,
            'garages' => 2,
        ]);
        DB::table('houses')->insert([
            'name' => 'The Lucretia',
            'price' => 572002,
            'bedrooms' => 4,
            'bathrooms' => 3,
            'storeys' => 2,
            'garages' => 2,
        ]);
        DB::table('houses')->insert([
            'name' => 'The Toorak',
            'price' => 521951,
            'bedrooms' => 5,
            'bathrooms' => 2,
            'storeys' => 1,
            'garages' => 2,
        ]);
        DB::table('houses')->insert([
            'name' => 'The Skyscape',
            'price' => 263604,
            'bedrooms' => 3,
            'bathrooms' => 2,
            'storeys' => 2,
            'garages' => 2,
        ]);
        DB::table('houses')->insert([
            'name' => 'The Clifton',
            'price' => 386103,
            'bedrooms' => 3,
            'bathrooms' => 2,
            'storeys' => 1,
            'garages' => 1,
        ]);
        DB::table('houses')->insert([
            'name' => 'The Geneva',
            'price' => 390600,
            'bedrooms' => 4,
            'bathrooms' => 3,
            'storeys' => 2,
            'garages' => 2,
        ]);
    }
}
