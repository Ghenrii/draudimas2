<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\CarImage;

class CarImageController extends Controller
{
    public function index(Car $car)
    {
        $images = $car->images;
        return view('car_images.index', ['car' => $car, 'images' => $images]);
    }

    public function store(Request $request, Car $car)
    {
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
        return redirect()->back()->with('success', trans('Added'));
    }

    public function destroy(CarImage $image)
    {
        $filePath = "storage/{$image->image_path}";

        if (File::exists($filePath)) {
            if (File::delete($filePath)) {
                $image->delete();
                return redirect()->back()->with('success', trans('Deleted'));
            }
        } else {
            return redirect()->back()->with('error', $filePath);
        }
    }

}
