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
                <a href="{{ route('owners.create') }}" class="btn btn-info">Pridėti naują savininką</a>
                <hr>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Vardas</th>
                            <th>Pavardė</th>
                            <th>Telefonas</th>
                            <th>Email</th>
                            <th>Adresas</th>
                            <th>Mašinos</th>
                            <th colspan="2"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($owners as $owner)
                            <tr>
                                <td>{{ $owner->id }}</td>
                                <td>{{ $owner->name }}</td>
                                <td>{{ $owner->surname }}</td>
                                <td>{{ $owner->phone }}</td>
                                <td>{{ $owner->email }}</td>
                                <td>{{ $owner->address }}</td>
                                <td>
                                    @foreach($owner->cars as $car)
                                        {{ $car->brand }} - {{ $car->model }} <br>
                                    @endforeach
                                </td>
                                <td style="width: 100px;">
                                    <a href="{{ route('owners.edit', $owner) }}" class="btn btn-success">Redaguoti</a>
                                </td>
                                <td style="width: 100px;">
                                    <form method="post" action="{{ route('owners.destroy', $owner) }}">
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
