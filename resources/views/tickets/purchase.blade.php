@extends('layouts.app')

@section('content')
    <h1>Purchase Ticket</h1>

    <form method="post" action="{{ route('tickets.purchase', $trip) }}">
        @csrf

        <label for="seat_number">Select Seat:</label>
        <select name="seat_number" required>
            @foreach($trip->availableSeats() as $seat)
                <option value="{{ $seat }}">{{ $seat }}</option>
            @endforeach
        </select>

        <button type="submit">Purchase Ticket</button>
    </form>
@endsection