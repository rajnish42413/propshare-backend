<?php

use Illuminate\Database\Seeder;

class MediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	for ($i=0; $i <= 100; $i++) { 
	    	DB::table('media')->insert([
	            'original' => 'https://source.unsplash.com/1600x900/?model',
	            'caption' => "dummy image caption here",
	            'entity' => "user",
	            'entity_id' => 1,
	            'status' => 1
	        ]);
    	}
    }
}
