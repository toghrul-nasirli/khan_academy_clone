<?php

namespace Database\Seeders;

use App\Models\Supporter;
use Illuminate\Database\Seeder;

class SupporterSeeder extends Seeder
{
    public function run()
    {
        Supporter::factory(17)->create();
    }
}
