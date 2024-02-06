<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

use App\Models\Location;
use App\Models\Trip;
use Illuminate\Http\Request;

class TripController extends Controller
{
    public function create()
    {
        $locations = Location::all();
        return view('trips.create', compact('locations'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'departure_date' => 'required|date',
            'location_id' => 'required|exists:locations,id',
        ]);

        Trip::create([
            'departure_date' => $request->input('departure_date'),
            'location_id' => $request->input('location_id'),
        ]);

        return redirect()->route('trips.index');
    }

    public function index()
    {
        $trips = Trip::with('location')->get();
        return view('trips.index', compact('trips'));
    }

    public function show(Trip $trip)
    {
        return view('trips.show', compact('trip'));
    }
}