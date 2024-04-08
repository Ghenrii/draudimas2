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
        <div class="card">
            <div class="card-body">
                @if(Auth::user()->role === 'admin')
                <a href="{{ route('owners.create') }}" class="btn btn-info">{{ __('owners')['add_new'] }}</a>
                @endif
                <hr>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>{{ __('owners')['name'] }}</th>
                            <th>{{ __('owners')['surname'] }}</th>
                            <th>{{ __('owners')['phone'] }}</th>
                            <th>{{ __('owners')['email'] }}</th>
                            <th>{{ __('owners')['address'] }}</th>
                            <th>{{ __('owners')['cars'] }}</th>
                            @if(Auth::user()->role === 'admin')
                            <th colspan="2"></th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($owners as $owner)
                            <tr>
                                [[owner_{{ $owner->id }}]]
                                <td>
                                    @foreach($owner->cars as $car)
                                        {{ $car->brand }} - {{ $car->model }} <br>
                                    @endforeach
                                </td>
                                @if(Auth::user()->role === 'admin')
                                <td style="width: 100px;">
                                    <a href="{{ route('owners.edit', $owner) }}" class="btn btn-success">{{ __('edit') }}</a>
                                </td>
                                <td style="width: 100px;">
                                    <form method="post" action="{{ route('owners.destroy', $owner) }}">
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
