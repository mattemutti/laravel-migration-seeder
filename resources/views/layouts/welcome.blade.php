@extends('layouts.app')


@section('content')
    <div class="container text-center">
        <h1 class="py-5">Train HomePage</h1>
        <a href="{{ route('guests.trains.index') }}" class="text-decoration-none "> Treni se Vuoi...</a>

    </div>
@endsection
