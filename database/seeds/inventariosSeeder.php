<?php

use Illuminate\Database\Seeder;
use App\inventario;
class inventariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\inventario::class, 30)->create();
    }
}
