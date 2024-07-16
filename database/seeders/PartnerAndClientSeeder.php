<?php

namespace Database\Seeders;

use App\Models\PartnerAndClient;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PartnerAndClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PartnerAndClient::factory()->count(10)->create();
    }
}
