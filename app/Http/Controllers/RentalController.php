<?php

namespace App\Http\Controllers;
use App\Models\Rental;
use App\Models\Car;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class RentalController extends Controller
{
    public function create($slug)
    {
        $car = Car::where('slug', $slug)->firstOrFail();
        return view('rentals.create', compact('car'));
    }

    public function store(Request $request, $slug)
    {
        $request->validate([
            'rental_start' => 'required|date',
            'rental_end' => 'required|date|after:rental_start',
        ]);

        $car = Car::where('slug', $slug)->firstOrFail();

        Rental::create([
            'user_id' => Auth::id(),
            'car_id' => $car->id,
            'rental_start' => $request->rental_start,
            'rental_end' => $request->rental_end,
        ]);

        return redirect()->route('rentals.history')->with('success', 'Mobil berhasil disewa');
    }

    public function history()
    {
        $rentals = Rental::where('user_id', Auth::id())->orderBy('created_at', 'desc')->get();
        return view('rentals.history', compact('rentals'));
    }
}
