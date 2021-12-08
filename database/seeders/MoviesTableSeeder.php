<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Movie::create([
            'name' => 'A New Hope',
            'year' => '1977'
        ]);

        // App\Movie::create([
        //     'name' => 'The Empire Strikes Back',
        //     'year' => '1980'
        // ]);
    }
}
