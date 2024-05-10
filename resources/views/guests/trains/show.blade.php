@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <a href="{{ route('guests.trains.index') }}" class="">Back</a>
        <div class="row row-cols-1 row-cols-sm2 row-cols-md-3 row-cols-lg-4 g-5 p-5">
            <div class="col">
                <div class="card p-4">
                    <div>Codice Treno: {{ $train->train_code }}</div>
                    <div>Agenzia Treno: {{ $train->agency }}</div>
                </div>
            </div>
        </div>
    </div>
@endsection
