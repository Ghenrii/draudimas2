<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Rule;
use App\Models\Car;
use Illuminate\Http\Request;

class CarAPIController extends Controller
{
    public function index()
    {
        return Car::all();
    }

    public function show($id)
    {
        return Car::find($id);  
    }

    public function store(Request $request)
    {
        $car = new Car;
        $car->reg_number = $request->reg_number;
        $car->brand = $request->brand;
        $car->model = $request->model;
        $car->owner_id = $request->owner_id;

        $car->save();

        return $car;
    }

    public function update(Request $request, $id)
    {
        $car = Car::find($id);

        $car->reg_number = $request->reg_number;
        $car->brand = $request->brand;
        $car->model = $request->model;
        $car->owner_id = $request->owner_id;

        $car->save();

        return $car;
    }

    public function destroy(Car $car)
    {
        $car->delete();
        return true;
    }
}