<?php

use Illuminate\Database\Seeder;
use App\Slider;

class SlidersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	for ($i = 1; $i < 25 ; $i++) { 
    		Slider::create([
	        	'image' => 'img/sliders/img'.$i.'.jpg',
	        	'thumbnail' => 'img/sliders/img'.$i.'_thumb.jpg',
	        ]);
    	}
    }
}
