@extends('layouts.app')

@section("content")
    <div class="container">
        <div class="mb-4">
            @if(session()->has('success'))
                <div class="p-3 text-primary-emphasis bg-primary-subtle border border-primary-subtle rounded-3">
                    {{session('success')}}
                </div>
            @endif
        </div>
        <div class="card">
            <div class="card-body">
                <a href="{{ route('cars.create') }}" class="btn btn-info">Pridėti naują mašiną</a>
                <hr>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Registracijos numeris</th>
                            <th>Markė</th>
                            <th>Modelis</th>
                            <th>Savininko ID</th>
                            <th colspan="2"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($cars as $car)
                            <tr>
                                <td>{{ $car->id }}</td>
                                <td>{{ $car->reg_number }}</td>
                                <td>{{ $car->brand }}</td>
                                <td>{{ $car->model }}</td>
                                <td>{{ $car->owner_id }}</td>
                                <td style="width: 100px;">
                                    <a href="{{ route('cars.edit', $car) }}" class="btn btn-success">Redaguoti</a>
                                </td>
                                <td style="width: 100px;">
                                    <form method="post" action="{{ route('cars.destroy', $car) }}">
                                        @csrf
                                        @method("delete")
                                        <button class="btn btn-danger">Ištrinti</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
