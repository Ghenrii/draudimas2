@extends('layouts.app')

@section("content")
    <div class="container">
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
        <div class="card" style="min-width:870px">
            <div class="card-body">
                @if(Auth::user()->role === 'admin')
                <a href="{{ route('cars.create') }}" class="btn btn-info">{{ __('cars')['add_new'] }}</a>
                @endif
                <hr>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>{{ __('cars')['reg_numb'] }}</th>
                            <th>{{ __('cars')['brand'] }}</th>
                            <th>{{ __('cars')['model'] }}</th>
                            <th>{{ __('cars')['owner_id'] }}</th>
                            <th>{{ __('cars')['num_of_pict'] }}</th>
                            <th colspan="1"></th>
                            @if(Auth::user()->role === 'admin')
                            <th colspan="2"></th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($cars as $car)
                            <tr>
                                [[car_{{ $car->id }}]]
                                <td style="width: 100px;">
                                    <a href="{{ route('cars.images.store', $car) }}" class="btn btn-info">{{ __('images') }}</a>
                                </td>
                                @if(Auth::user()->role === 'admin')
                                <td style="width: 100px;">
                                    <a href="{{ route('cars.edit', $car) }}" class="btn btn-success">{{ __('edit') }}</a>
                                </td>
                                <td style="width: 100px;">
                                    <form method="post" action="{{ route('cars.destroy', $car) }}">
                                        @csrf
                                        @method("delete")
                                        <button class="btn btn-danger">{{ __('delete') }}</button>
                                    </form>
                                </td>
                                @endif
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
