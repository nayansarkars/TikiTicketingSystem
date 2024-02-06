@extends('layouts.app')

@section('content')
    <h1>Create a Trip</h1>

    <form method="post" action="{{ route('trips.store') }}">
        @csrf

        <label for="departure_date">Departure Date:</label>
        <input type="date" name="departure_date" required>

        <label for="location_id">Select Location:</label>
        <select name="location_id" required>
            @foreach($locations as $location)
                <option value="{{ $location->id }}">{{ $location->name }}</option>
            @endforeach
        </select>

        <button type="submit">Create Trip</button>
    </form>
@endsection