<?php

use Illuminate\Database\Seeder;
use App\Trip;
use Faker\Generator as Faker;

class TripsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        // Creo righe nella tabella Trips

        for($i= 0; $i <= 5; $i++) {
            // creo righe
            $new_trip = new Trip();
            // popolo righe
            $new_trip->partenza = $faker->state();
            $new_trip->destinazione = $faker->state();
            $new_trip->data_partenza = $faker->dateTime();
            $new_trip->data_ritorno = $faker->dateTime();
            $new_trip->persone = rand(1, 6);
            $new_trip->prezzo = $faker->randomNumber(3, false);
            // salvo righe
            $new_trip->save();
        }
    }
}
