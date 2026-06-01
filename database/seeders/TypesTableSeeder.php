<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $types = [
            'Web Design',
            'UI/UX Design',
            'Front End Development',
            'Back End Development',
            'Full Stack Development',
            'Graphic Design',
            'Mobile Development',
            'E-Commerce',
        ];

        foreach($types as $type){
            $newType = new Type();
            
            $newType->name = $type;
            $newType->description = $faker->sentence();

            $newType->save();
        }
    }
}
