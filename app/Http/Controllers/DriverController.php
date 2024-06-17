<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use Illuminate\Contracts\View\View;

class DriverController extends Controller
{
    /**
     * Display a list of drivers.
     */
    public function index(): View
    {
        $drivers = Driver::query()->orderBy('id')->get();
        return view('drivers.index', ['drivers' => $drivers]);
    }

    /**
     * Display the specified driver.
     */
    public function show($id): View
    {
        $driver = Driver::findOrFail($id);
        return view('drivers.show', ['driver' => $driver]);
    }
}
