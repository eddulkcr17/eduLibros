<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Rols')->insert([
            'hejr_nombre' => strtoupper("Administrador"),
          
        ]);

        DB::table('Rols')->insert([
            'hejr_nombre' => strtoupper("Vendedor"),
          
        ]);
    
    }
}
