<?php

use Illuminate\Database\Seeder;

class MessagesTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     	//maximo de categorias
        $maxCategories = Category::count();     //limpia la tabla del modelo
       
        Message::truncate();
           
           for ($i=1; $i <= 10; $i++) 
           { 
            	Message::create([
            		'nombre' => "Usuario {$i}",
            		'email' => "usuario{$i}@email.com"
            		'mensaje' => "Este es el mensaje {$i}"
            		'category_id' => rand(1, $maxCategories)
            	]);
            }
       } 
     
       
    }

