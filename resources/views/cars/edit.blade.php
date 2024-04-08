@extends('layouts.app')

@section('content')
<div class="container p-4">
    <form method="POST" action="{{route('cars.update', ['car' => $car])}}">
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
            </div><div class="mb-3">
                <label for="owner_id" class="form-label">{{ __('cars')['owner_id'] }}</label>
                <input type="number" class="form-control" id="owner_id" name="owner_id" value="{{$car->owner_id}}">
                @error('owner_id')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-dark">{{ __('submit') }}</button>
        </form>
    </div>
@endsection