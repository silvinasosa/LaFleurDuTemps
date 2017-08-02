<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $categories = collect(['Corpiños', 'Bombachas', 'Culottes', 'Conjuntos', 'Bodysuits']);

        $categories->each(function ($value) {
         factory(Category::class)->create([
             'name' => ucfirst($value),
             'slug' => str_slug($value)
         ]);
      });
    }
}
