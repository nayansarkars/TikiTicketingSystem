@extends('layouts.app')

@section('content')
    <h1>Trip Details</h1>

    <p>Date: {{ $trip->departure_date }}</p>
    <p>Location: {{ $trip->location->name }}</p>

    <h2>Available Seats</h2>
    <ul>
        @foreach($trip->availableSeats() as $seat)
            <li>{{ $seat }}</li>
        @endforeach
    </ul>

    <a href="{{ route('tickets.purchaseForm', $trip) }}">Purchase Ticket</a>
@endsection