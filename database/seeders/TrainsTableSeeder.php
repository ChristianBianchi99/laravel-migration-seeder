<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
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
        for($i=0; $i<10; $i++){
            $newTrain = new Train();
            $newTrain->Azienda = $faker->word();
            $newTrain['Stazione di Partenza'] = $faker->word();
            $newTrain['Stazione di Arrivo'] = $faker->word();
            $newTrain['Data di Partenza'] = $faker->date();
            $newTrain['Orario di Partenza'] = $faker->time();
            $newTrain['Orario di Arrivo'] = $faker->time();
            $newTrain['Codice Treno'] = $faker->randomNumber(4, true);
            $newTrain['Numero Carrozze'] = $faker->randomDigit();
            $newTrain['In Orario'] = $faker->boolean();
            $newTrain['Cancellato'] = $faker->boolean();
            
            $newTrain->save();
        };
    }
}
