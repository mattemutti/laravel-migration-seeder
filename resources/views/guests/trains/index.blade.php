@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row p-5">
            @forelse ($trains as $train)
                <div class="col">
                    <div class="card p-4">
                        <div>Codice Treno: {{ $train->train_code }}</div>
                        <div>Agenzia Treno: {{ $train->agency }}</div>

                    </div>

                </div>
            @empty

                <h1>No Train - va a piedi</h1>
            @endforelse
        </div>
    </div>
@endsection
