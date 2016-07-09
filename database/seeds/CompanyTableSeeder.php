<?php

use Illuminate\Database\Seeder;
use App\Company;

class CompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Company::create([
        	'name' => 'Pretord Fashion',
        	'mission' => 'Misión de la empresa',
        	'vision' => 'Visión de la empresa',
        	'description' => 'MEXICO HACE MODA Únete a nuestro equipo de ventas EN LINEA, y se testigo de las sonrisas que ofrecen nuestros productos en todos territorios...',
        	'logo' => 'img/page/logo.png'
        ]);
    }
}
