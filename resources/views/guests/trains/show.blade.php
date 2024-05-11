@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <a href="{{ route('layouts.welcome') }}" class="">Home </a>
        <a href="{{ route('guests.trains.index') }}" class=""> Tutti I Treni</a>
        <div class="row row-cols-1 row-cols-sm2 row-cols-md-3 row-cols-lg-4 g-5 p-5">
            <div class="card p-4">
                <div class="card-body">
                    <div class="text-uppercase">Codice Treno: {{ $train->train_code }}</div>
                    <div class="text-warning">Agenzia Treno: {{ $train->agency }}</div>
                </div>
                <div class="card-body">
                    <div>Partenza: {{ $train->departure_station }}</div>
                    <div> {{ $train->departure_date }} - {{ $train->departure_hour }} </div>
                </div>
                <div class="card-body">
                    <div>Arrivo: {{ $train->arrival_station }}</div>
                    <div> {{ $train->arrival_date }} - {{ $train->arrival_hour }}</div>
                </div>
            </div>
            <div class="card p-4">
                <div>Anteprima Biglietto</div>
                <img src="https://picsum.photos/200" alt="">
            </div>
        </div>
    </div>
@endsection
