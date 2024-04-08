@extends('layouts.app')

@section('content')
<div class="container p-4">
        <form method="POST" action="{{route('owners.store')}}">
            @csrf
            @method('post')
            <div class="mb-3">
                <label for="name" class="form-label">{{ __('owners')['name'] }}</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                @error('name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="surname" class="form-label">{{ __('owners')['surname'] }}</label>
                <input type="text" class="form-control" id="surname" name="surname" value="{{ old('surname') }}">
                @error('surname')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">{{ __('owners')['phone'] }}</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone') }}">
                </div>
                @error('phone')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">{{ __('owners')['email'] }}</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
                @error('email')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">{{ __('owners')['address'] }}</label>
                <input type="text" class="form-control" id="address" name="address" value="{{ old('address') }}">
                @error('address')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-dark">{{ __('submit') }}</button>
        </form>
    </div>
@endsection
