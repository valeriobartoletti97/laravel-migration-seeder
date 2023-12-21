@extends('layouts.app')

@section('title', 'Trains')

@section('content')
<main class="vh-100 d-flex justify-content-center align-items-center">
    <h3 class="text-uppercase">
        Click <a href="{{route('trains.index')}}">here</a> to see the list of all trains
    </h3>
</main>

@endsection
