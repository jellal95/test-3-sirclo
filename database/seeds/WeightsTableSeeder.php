<?php

use Illuminate\Database\Seeder;

class WeightsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Weight::class, 6)->create();
    }
}
