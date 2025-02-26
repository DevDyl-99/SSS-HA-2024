@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between mb-3">
        <h2>Colleges</h2>
    </div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Address</th>
            </tr>
        </thead>
        <tbody>
            @foreach($colleges as $college)
                <tr>
                    <td>{{ $college->id }}</td>
                    <td>{{ $college->name }}</td>
                    <td>{{ $college->address }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
