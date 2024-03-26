<?php

namespace Database\Seeders;

use App\Models\Technology;
use Faker\Generator;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Generator $faker): void
    {
        $labels = ['HTML', 'CSS', 'Bootstrap', 'Javascript', 'Vue', 'PHP', 'Laravel'];
        foreach ($labels as $label) {
            $technology = new Technology();
            $technology->label = $label;
            $technology->color = $faker;
        }
    }
}
