<?php

use Illuminate\Database\Seeder;
use App\gallery;
class gallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\gallery::class, 10)->create();
    }
}
