<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoriesTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //limpia la tabla del modelo
        Category::truncate();
        //llena la tabla con la siguiente
        Category::create(['category' => "Error"]);
        Category::create(['category' => "Feedback"]);
        Category::create(['category' => "Notice"]);
        Category::create(['category' => "Random"]);
        Category::create(['category' => "Warning"]);

    }
}
