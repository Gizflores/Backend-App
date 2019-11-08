<?php

use Illuminate\Database\Seeder;
use App\likedislike;

class likedislikeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\likedislike::class, 100)->create();
    }
}
