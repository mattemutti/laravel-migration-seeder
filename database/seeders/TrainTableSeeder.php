<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;


class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {

        // Importanzione zenza faker da un array in db.php
/*        $trains = config('db.trains');

        foreach ($trains as $train) {
            $newTrain = new Train();
            $newTrain->train_code = $train['train_code'];
            $newTrain->agency = $train['agency'];
            $newTrain->departure_station = $train['departure_station'];
            $newTrain->arrival_station = $train['arrival_station'];
            $newTrain->departure_date = $train['departure_date'];
            $newTrain->departure_hour = $train['departure_hour'];
            $newTrain->arrival_date = $train['arrival_date'];
            $newTrain->arrival_hour = $train['arrival_hour'];
            $newTrain->carriage_number = $train['carriage_number'];
            $newTrain->in_time = $train['in_time'];
            $newTrain->deleted = $train['deleted'];
            $newTrain->save();
        }*/


        for ($i = 0; $i < 10; $i++) {
            $train = new Train();
            $train->train_code = $faker->numerify('tr####');
            $train->agency = $faker->word();
            $train->departure_station = $faker->randomKey(['Desenzano' => 1, 'Roma' => 2, 'Verona' => 3, 'Bologna' => 4, 'Brescia' => 5, 'Bergamo' => 6, 'Napoli' => 7, 'Rimini' => 8]);
            $train->arrival_station = $faker->randomKey(['Desenzano' => 1, 'Roma' => 2, 'Verona' => 3, 'Bologna' => 4, 'Brescia' => 5, 'Bergamo' => 6, 'Napoli' => 7, 'Rimini' => 8]);
            $train->departure_date = $faker->date('2024-05-d');
            $train->departure_hour = $faker->time();
            $train->arrival_date = $train->departure_date;
            $train->arrival_hour = $faker->time();
            $train->carriage_number = $faker->numberBetween(1, 12);
            $train->in_time = $faker->boolean();
            $train->deleted = $faker->boolean();
            $train->save();

        }




    }
}
