<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for($i=0;$i<10;$i++){            
            $startDate = $faker->dateTimeBetween('-2 years', 'now');
            $endDate = $faker->dateTimeBetween($startDate, '+6 months');

            $newProject = new Project();

            $newProject->name = $faker->sentence(3);

            $newProject->customer = $faker->company();

            $newProject->description = $faker->paragraph(5);

            $newProject->start_date = $startDate;

            $newProject->end_date = $endDate;

            $newProject->save();
        }
    }
}
