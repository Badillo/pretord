<?php

use Illuminate\Database\Seeder;
use App\Collection;

class CollectionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Collection::create([
        	'name' => 'Última temporada'
        ]);

        Collection::create([
        	'name' => 'Mom i love u'
        ]);

        Collection::create([
        	'name' => 'Mom i love u Glam'
        ]);

        Collection::create([
        	'name' => 'Mom i love u TENNI'
        ]);

        Collection::create([
        	'name' => 'MAGNUM'
        ]);

        Collection::create([
        	'name' => 'QUEEN'
        ]);
        
    }
}
