@extends('layouts.app')

@section('content')
<div class="container p-4">
    <form method="POST" action="{{route('cars.update', ['car' => $car])}}" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="mb-3">
                <label for="reg_number" class="form-label">{{ __('cars')['reg_numb'] }}</label>
                <input type="text" class="form-control" id="reg_number" name="reg_number" value="{{$car->reg_number}}">
                @error('reg_number')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="brand" class="form-label">{{ __('cars')['brand'] }}</label>
                <input type="text" class="form-control" id="brand" name="brand" value="{{$car->brand}}">
                @error('brand')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="model" class="form-label">{{ __('cars')['model'] }}</label>
                <input type="text" class="form-control" id="model" name="model" value="{{$car->model}}">
                @error('model')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="owner_id" class="form-label">{{ __('cars')['owner_id'] }}</label>
                <input type="number" class="form-control" id="owner_id" name="owner_id" value="{{$car->owner_id}}">
                @error('owner_id')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <div class="row">
                    @foreach ($carImages as $image)
                    <div class="col-md-3 mb-3">
                        <div class="card">
                            <img src="{{ asset('storage/'.$image->image_path) }}" class="card-img-top img-fluid" alt="Car Image">
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">{{ __('car_images')['pictures'] }}</label>
                <input type="file" class="form-control" id="image" name="image">
                @error('image')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-dark">{{ __('submit') }}</button>
        </form>
    </div>
@endsection