@extends('layouts.app')

@section('title', 'Trains')

@section('content')
<main class="vh-100">
    <h2 class="text-uppercase text-center">All Trains</h2>
    <div class="container mt-4">
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">Company</th>
                <th scope="col">Departure Station</th>
                <th scope="col">Arrival Station</th>
                <th scope="col">Departure Time</th>
                <th scope="col">Arrival Time</th>
                <th scope="col">In Time</th>
              </tr>
            </thead>
            <tbody>
            @foreach($trains as $train)
              <tr>
                <th>{{$train->company}}</th>
                <td>{{$train->departure_station}}</td>
                <td>{{$train->arrival_station}}</td>
                <td>{{$train->departure_time}}</td>
                <td>{{$train->arrival_time}}</td>
                @if($train->in_time){
                    <td>Yes</td>
                } @else{
                    <td>No</td>
                }
                @endif
              </tr>
            @endforeach
            </tbody>
          </table>
    </div>
</main>

@endsection
