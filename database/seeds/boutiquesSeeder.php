<?php

use Illuminate\Database\Seeder;

class boutiquesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\boutique::class, 100)->create();
    }
}
