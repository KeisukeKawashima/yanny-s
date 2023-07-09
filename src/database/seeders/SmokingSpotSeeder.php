<?php

namespace Database\Seeders;

use App\Models\SmokingSpot;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SmokingSpotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        SmokingSpot::factory()->count(10)->create();
    }
}
