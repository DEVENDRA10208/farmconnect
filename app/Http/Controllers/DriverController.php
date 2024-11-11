<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;
use App\Models\RequestDelivery;

class DriverController extends Controller
{
    public function view_vehicle()
    {
        $vehicle = Vehicle::all();
        return view('driver.show_vehicle', compact('vehicle'));
    }

    public function show_delivery()
    {
        $delivery = RequestDelivery::all();
        return view('driver.show_delivery', compact('delivery'));
    }
}
