@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <a href="{{ route('layouts.welcome') }}" class="">Back</a>
        <div class="text-center">
            <h1>Tutti i Treni</h1>
        </div>

        <div class="row row-cols-1 row-cols-sm2 row-cols-md-3 row-cols-lg-4 g-5 p-5">
            @forelse ($trains as $train)
                <div class="col">
                    <a class="text-decoration-none" href="{{ route('guests.trains.show', $train) }}">
                        <div class="card p-4">
                            <div class="card-body">
                                <div class="text-uppercase">Codice Treno: {{ $train->train_code }}</div>
                                <div class="text-warning">Agenzia Treno: {{ $train->agency }}</div>
                            </div>
                            <div class="card-body">
                                <div>Partenza: {{ $train->departure_station }}</div>
                                <div> {{ $train->departure_date }} Orario: {{ $train->departure_hour }}</div>
                            </div>
                            <div class="card-body">
                                <div>Arrivo {{ $train->arrival_station }}</div>
                                <div> {{ $train->arrival_date }} Orario: {{ $train->arrival_hour }}</div>
                            </div>
                        </div>
                    </a>
                </div>
            @empty

                <h1>No Train - va a piedi</h1>
            @endforelse
        </div>
    </div>
@endsection
