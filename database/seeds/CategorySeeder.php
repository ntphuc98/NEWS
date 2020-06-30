<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$name = Str::random(10);
         DB::table('categories')->insert([
            'name' => $name,
            'link' => $name
        ]);
    }
}
