<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
			'name' => 'Flats'
		]);

		Category::create([
			'name' => 'Bby Flats'
		]);

		Category::create([
			'name' => 'Tennis'
		]);

		Category::create([
			'name' => 'Bby Tennis'
		]);

		Category::create([
			'name' => 'Plataformas'
		]);

		Category::create([
			'name' => 'Zapatilla en pico'
		]);

		Category::create([
			'name' => 'Zapatilla redonda'
		]);

		Category::create([
			'name' => 'Sandalias'
		]);
    }
}
