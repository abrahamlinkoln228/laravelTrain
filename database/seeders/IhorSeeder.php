<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Ihor;

class IhorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ihor::factory(120)->create();
    }
}
