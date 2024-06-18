<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTripRequest;
use App\Models\Car;
use App\Models\Trip;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

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

    /**
     * Show the form for creating a new trip.
     */
    public function create(): View
    {
        $users = User::all();
        $cars = Car::all();
        return view('trips.create', [
            'users' => $users,
            'cars' => $cars,
        ]);
    }

    /**
     * Store a newly created trip.
     */
    public function store(StoreTripRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        $trip = Trip::create($validated);

        return redirect('/trips');
    }

}
