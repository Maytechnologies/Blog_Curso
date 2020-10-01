<?php

namespace Database\Seeders;

use App\Models\Curso;
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
      
       $this->call(CursoSeeder::class);     

    }
}
