<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(AutorSeeder::class);
        $this->call(EditorialSeeder::class);
        $this->call(LibroSeeder::class);
       
    }
}
