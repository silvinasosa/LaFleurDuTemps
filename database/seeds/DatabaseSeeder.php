<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      \DB::table('categories')->insert([
        ['name' => 'Soutiens'],
        ['name' => 'Culottes'],
        ['name' => 'Conjuntos'],
        ['name' => 'Bodysuits']
      ]);
    }
}
