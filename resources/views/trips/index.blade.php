@extends('layouts.app')

@section('content')
    <h1>Available Trips</h1>

    @foreach($trips as $trip)
        <div>
            <p>Date: {{ $trip->departure_date }}</p>
            <p>Location: {{ $trip->location->name }}</p>
            <a href="{{ route('trips.show', $trip) }}">Details</a>
        </div>
    @endforeach
@endsection