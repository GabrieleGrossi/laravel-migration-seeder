<?php

namespace Database\Seeders;
use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;
class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {   
        for($i=0; $i <= 9; $i++){
            Train::create([                
                'agency'=>$faker->company,
                'departure_stration'=>$faker->city,
                'arrival_station'=>$faker->city,
                'departure_time' => $faker->dateTimeThisYear($max = 'now', $timezone = null),
                'arrival_time' => $faker->dateTimeThisYear($max = 'now', $timezone = null),
                'train_code' => $faker->bothify('???######'),
                'number_of_carriages' => $faker->numberBetween(1, 10),
                'on_time' => $faker->boolean(80),
                'in_late'=>$faker->boolean(5)
            ]);
        }
    }
}
