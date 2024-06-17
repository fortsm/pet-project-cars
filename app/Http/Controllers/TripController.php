<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use Illuminate\Contracts\View\View;

class TripController extends Controller
{
    /**
     * Display a list of trips.
     */
    public function index(): View
    {
        $trips = Trip::query()->orderBy('id')->get();
        return view('trips.index', ['trips' => $trips]);
    }

    /**
     * Display the specified trip.
     */
    public function show($id): View
    {
        $trip = Trip::findOrFail($id);
        return view('trips.show', ['trip' => $trip]);
    }
}
