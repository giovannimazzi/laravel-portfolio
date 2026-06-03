<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

class TechnologiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $technologies = [
            'HTML',
            'CSS',
            'Bootstrap',
            'JavaScript',
            'Vue.js',
            'React',
            'PHP',
            'Laravel',
            'MySQL',
            'Docker',
        ];

        foreach($technologies as $technology){
            $newTech = new Technology();

            $newTech->name = $technology;
            $newTech->color = $faker->hexColor();

            $newTech->save();
        }
    }
}
