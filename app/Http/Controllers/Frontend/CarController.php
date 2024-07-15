<?php

namespace App\Http\Controllers\Frontend;
use App\Models\Car;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::latest()->get();
        return view('frontend.car', compact('cars'));
    }

    public function show(Car $car)
    {
        $otherCars = Car::where('id', '!=', $car->id)->limit(3)->get();
        return view('frontend.detail', compact('car', 'otherCars'));
    }
}
