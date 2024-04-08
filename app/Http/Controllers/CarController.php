<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Owner;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::all();
        return view('cars.index', ['cars' => $cars]);
    }

    public function create()
    {

        return view('cars.create');
    }

    public function store(Request $request)
    {

        $data = $request->validate([
            'reg_number' => 'required|unique:cars|regex:/^[A-Z0-9]{6}$/',
            'brand' => 'required',
            'model' => 'required',
            'owner_id' => 'required|exists:owners,id'
        ]);

        $newCar = Car::create($data);

        return redirect(route('cars.index'))->with('success', 'Pridėta');
    }

    public function edit(Car $car)
    {

        return view('cars.edit', ['car' => $car]);
    }

    public function update(Request $request, Car $car)
    {

        $data = $request->validate([
            'reg_number' => 'required|unique:cars,reg_number,' . $car->id,
            'brand' => 'required',
            'model' => 'required',
            'owner_id' => 'required|exists:owners,id'
        ]);

        $car->update($data);

        return redirect(route('cars.index'))->with('success', 'Atnaujinta');
    }

    public function destroy(Car $car)
    {

        $car->delete();

        return redirect(route('cars.index'))->with('success', 'Ištrinta');
    }
}


