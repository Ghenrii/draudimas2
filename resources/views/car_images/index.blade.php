@extends('layouts.app')

@section('content')
<div class="container p-4">
    <div class="text-center">
        <div class="mb-4">
            @if(session()->has('success'))
                <div class="p-3 text-primary-emphasis bg-primary-subtle border border-primary-subtle rounded-3">
                    {{session('success')}}
                </div>
            @endif
            @if(session()->has('error'))
                <div class="p-3 text-white bg-danger border border-dark rounded-3">
                    {{session('error')}}
                </div>
            @endif
        </div>
        @foreach ($images as $image)
            <div class="image-container d-inline-block m-2">
                <img src="{{ asset('storage/'.$image->image_path) }}" alt="" class="img-fluid rounded border border-secondary" style="max-width: 500px; max-height: 333px;">
                <form action="{{ route('cars.images.destroy', ['image' => $image->id]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger mt-2">{{ __('delete') }}</button>
                </form>
            </div>
        @endforeach
    </div>
    <form method="POST" action="{{ route('cars.images.store', ['car' => $car]) }}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="image" class="form-label">{{ __('car_images')['pictures'] }}</label>
            <input type="file" class="form-control" id="image" name="image">
            @error('image')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">{{ __('submit') }}</button>
    </form>
</div>
@endsection


 