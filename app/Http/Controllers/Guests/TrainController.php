<?php

namespace App\Http\Controllers\Guests;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //dd(Train::all());
        $trains = train::where('departure_date', '2024-05-11')->get();
        //$trains = train::all();

        return view('layouts.welcome', compact('trains'));
    }

    /**
     * Display a listing of the resource.
     */
    public function trains()
    {
        //dd(Train::all());
        // $trainsToday = train::;
        $trains = train::all();

        return view('guests.trains.index', compact('trains'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Train $train)
    {
        //dd($train);


        return view('guests.trains.show', compact('train'));
    }

}
