<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Trip;
use App\Models\SeatAllocation;
use Illuminate\Support\Facades\Auth;

class TicketController extends Controller
{
    public function purchaseForm(Trip $trip)
    {
        return view('tickets.purchase', compact('trip'));
    }

    public function purchase(Request $request, Trip $trip)
    {
        $request->validate([
            'seat_number' => 'required|integer',
        ]);

        $user = Auth::user();

        // Check if the selected seat is available
        if (!$trip->isSeatAvailable($request->input('seat_number'))) {
            return redirect()->back()->with('error', 'Selected seat is not available.');
        }

        // Create seat allocation
        SeatAllocation::create([
            'user_id' => $user->id,
            'trip_id' => $trip->id,
            'seat_number' => $request->input('seat_number'),
        ]);

        return redirect()->route('trips.show', $trip)->with('success', 'Ticket purchased successfully.');
    }
}