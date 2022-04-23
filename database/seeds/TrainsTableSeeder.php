<?php

use App\Train;
use Illuminate\Database\Seeder;

// Import faker php
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        
        // Ciclo per creare 20 volte un nuovo treno
        for ($i=0; $i < 100; $i++) { 
            
            // Creo un nuovo treno
            $train = new Train ();
            $train->company = $faker->company();
            $train->departure_station = $faker->city();
            $train->arrival_station = $faker->city();
            $train->departure_time = $faker->time();
            $train->arrival_time = $faker->time();
            $train->train_code = $faker->randomNumber(5, true);
            $train->number_of_carriages = $faker->randomDigitNotNull();
            $train->on_time = $faker->boolean();
            $train->deleted = $faker->boolean();
            $train->save();
        }

    }
}
