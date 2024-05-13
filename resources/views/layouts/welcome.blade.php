@extends('layouts.app')


@section('content')
    <div class="container text-center py-5 pt-5">
        <a href="{{ route('guests.trains.index') }}" class="text-decoration-none ">Tutti i Treni se Vuoi...</a>
        <h1 class="py-5">Treni di Oggi</h1>

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
                                <div>Arrivo: {{ $train->arrival_station }}</div>
                                <div> {{ $train->arrival_date }} Orario: {{ $train->arrival_hour }}</div>
                            </div>
                        </div>
                    </a>
                </div>
            @empty

                <h1>Nessun Treno Oggi - Vai a piedi</h1>
            @endforelse
        </div>



    </div>
@endsection
