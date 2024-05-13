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
        $trains = [
            [
                'train_code' => 'TR0011',
                'agency' => 'ItaloTreno',
                'departure_station' => 'Napoli',
                'arrival_station' => 'Modena',
                'departure_date' => '2024-05-13',
                'departure_hour' => '08:00:00',
                'arrival_date' => '2024-05-13',
                'arrival_hour' => '12:00:00',
                'carriage_number' => 5,
                'in_time' => 1,
                'deleted' => 0,
            ],
            [
                'train_code' => 'TR0012',
                'agency' => 'FrecciaRossa',
                'departure_station' => 'Verona',
                'arrival_station' => 'Modena',
                'departure_date' => '2024-05-20',
                'departure_hour' => '08:50:00',
                'arrival_date' => '2024-05-20',
                'arrival_hour' => '12:20:00',
                'carriage_number' => 1,
                'in_time' => 1,
                'deleted' => 0,
            ],
            [
                'train_code' => 'TR0013',
                'agency' => 'ItaloTreno',
                'departure_station' => 'Roma',
                'arrival_station' => 'Dese',
                'departure_date' => '2024-05-13',
                'departure_hour' => '08:00:00',
                'arrival_date' => '2024-05-13',
                'arrival_hour' => '09:00:00',
                'carriage_number' => 2,
                'in_time' => 1,
                'deleted' => 0,
            ],
            [
                'train_code' => 'TR0014',
                'agency' => 'ItaloFreno',
                'departure_station' => 'Milano',
                'arrival_station' => 'Roma',
                'departure_date' => '2024-05-13',
                'departure_hour' => '08:00:00',
                'arrival_date' => '2024-05-13',
                'arrival_hour' => '12:00:00',
                'carriage_number' => 8,
                'in_time' => 1,
                'deleted' => 0,
            ],
            [
                'train_code' => 'TR0015',
                'agency' => 'Locomotiv',
                'departure_station' => 'Palermo',
                'arrival_station' => 'Modena',
                'departure_date' => '2024-05-15',
                'departure_hour' => '08:00:00',
                'arrival_date' => '2024-05-15',
                'arrival_hour' => '22:00:00',
                'carriage_number' => 4,
                'in_time' => 1,
                'deleted' => 0,
            ],
            [
                'train_code' => 'TR0016',
                'agency' => 'ItaloTreno',
                'departure_station' => 'Peschiera',
                'arrival_station' => 'Palazzolo',
                'departure_date' => '2024-05-13',
                'departure_hour' => '08:00:00',
                'arrival_date' => '2024-05-13',
                'arrival_hour' => '12:00:00',
                'carriage_number' => 3,
                'in_time' => 1,
                'deleted' => 0,
            ],
            [
                'train_code' => 'TR0017',
                'agency' => 'ItaloTreno',
                'departure_station' => 'Rimini',
                'arrival_station' => 'Sirmione',
                'departure_date' => '2024-05-13',
                'departure_hour' => '08:00:00',
                'arrival_date' => '2024-05-13',
                'arrival_hour' => '15:00:00',
                'carriage_number' => 9,
                'in_time' => 1,
                'deleted' => 0,
            ],
            [
                'train_code' => 'TR0018',
                'agency' => 'ItaloTreno',
                'departure_station' => 'Napoli',
                'arrival_station' => 'Modena',
                'departure_date' => '2024-05-13',
                'departure_hour' => '10:00:00',
                'arrival_date' => '2024-05-13',
                'arrival_hour' => '15:00:00',
                'carriage_number' => 5,
                'in_time' => 1,
                'deleted' => 0,
            ],
            [
                'train_code' => 'TR0019',
                'agency' => 'FrecciaArgento',
                'departure_station' => 'Parma',
                'arrival_station' => 'Padova',
                'departure_date' => '2024-05-17',
                'departure_hour' => '08:00:00',
                'arrival_date' => '2024-05-17',
                'arrival_hour' => '12:00:00',
                'carriage_number' => 8,
                'in_time' => 1,
                'deleted' => 0,
            ],
        ];



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
