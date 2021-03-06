<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(UsersTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(CollectionsTableSeeder::class);
        $this->call(TypesTableSeeder::class);
        $this->call(CompanyTableSeeder::class);
        $this->call(SlidersTableSeeder::class);
        //$this->call(ProductsTableSeeder::class);

        Model::reguard();
    }
}
