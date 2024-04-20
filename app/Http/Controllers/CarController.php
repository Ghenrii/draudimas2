<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Owner;
use App\Models\CarImage;
use Illuminate\Support\Facades\File;

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

        return redirect(route('cars.index'))->with('success', trans('Added'));
    }

    public function edit(Car $car)
    {
        $carImages = $car->images;

        return view('cars.edit', compact('car', 'carImages'));
    }


    public function update(Request $request, Car $car)
    {

        $data = $request->validate([
            'reg_number' => 'required|unique:cars,reg_number,' . $car->id,
            'brand' => 'required',
            'model' => 'required',
            'owner_id' => 'required|exists:owners,id'
        ]);
        
        $request->validate([
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileName = time().'.'.$extension;

            $path = $file->storeAs('public', $fileName);

            $carImage = new CarImage();
            $carImage->car_id = $car->id;
            $carImage->image_path = $fileName;
            $carImage->save();
        }
        $car->update($data);

        return redirect(route('cars.index'))->with('success', trans('Updated'));
    }

    public function destroy(Car $car)
    {
        $carImages = $car->images;

        foreach ($carImages as $carImage) {
            $this->deleteCarImage($carImage);
        }
        $car->delete();

        return redirect(route('cars.index'))->with('success', trans('Deleted'));
    }

    protected function deleteCarImage(CarImage $carImage)
    {
        $filePath = storage_path("app/public/{$carImage->image_path}");

        if (File::exists($filePath)) {
            File::delete($filePath);
        }

        $carImage->delete();
    }
}


