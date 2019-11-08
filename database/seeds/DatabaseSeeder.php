<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     * 
     *
     * @return void
     */
    public function run()
    {       
        $this->call(boutiquesSeeder::class);
        $this->call(usuariosSeeder::class);   
        $this->call(categoriasSeeder::class); 
        $this->call(inventariosSeeder::class); 
        $this->call(likedislikeSeeder::class);        
        $this->call(gallerySeeder::class);        
    }
}
/* 

        $this->call(boutiquesSeeder::class);
        $this->call(usuariosSeeder::class);   
        $this->call(categoriasSeeder::class); 
        $this->call(inventariosSeeder::class); 
        $this->call(gallerySeeder::class);        
        $this->call(likedislikeSeeder::class);   
*/