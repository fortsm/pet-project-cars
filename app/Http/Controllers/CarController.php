<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Contracts\View\View;

class CarController extends Controller
{
    /**
     * Display a list of cars.
     */
    public function index(): View
    {
        $cars = Car::query()->orderBy('id')->get();
        return view('cars.index', ['cars' => $cars]);
    }

    /**
     * Display the specified car.
     */
    public function show($id): View
    {
        $car = Car::findOrFail($id);
        return view('cars.show', ['car' => $car]);
    }
}
