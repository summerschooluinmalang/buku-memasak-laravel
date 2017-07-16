<?php

use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        App\Category::insert([
        	['name' => 'General'],
        	['name'=> 'Job'],
        	['name' => 'Event'],
        	['name' => 'Trend'],
        ]);
    }
}
