<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $trains = config('db.trains');


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
        }
    }
}
