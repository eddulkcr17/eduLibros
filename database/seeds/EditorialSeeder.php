<?php

use Illuminate\Database\Seeder;
//AGREANDO EL MODELO DE EDITORIAL
use App\Editorial;

class EditorialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//INSTANCION LA INFORMACION FLASA DE EDITORIAL
       factory(Editorial::class,14)->create();
    }
}
