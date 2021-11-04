@extends('layout.defaultLayout')

@section('title', $title)

@section('content')

    <div class="container pt-5 pb-5">

        <div class="row">
            <div class="col d-flex justify-content-start">
                <h1>Franchise</h1><br>
            </div>
            <div class="col d-flex justify-content-end">
                <a href="{{ route('franchise.create') }}" class="btn btn-primary float-right">Create New
                    Franchise</a><br><br>
            </div>
        </div>
        <br>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">franchise_id</th>
                    <th scope="col">franchise_name</th>
                    <th scope="col">franchise_founded</th>
                    <th scope="col">franchise_type</th>
                    <th scope="col">franchise_outlet</th>
                    <th scope="col">franchise_investment</th>
                    <th scope="col">franchise_website</th>
                    <th scope="col">franchise_description</th>

                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @php($index = 1)
                @foreach ($franchise as $franchise)
                    <tr>
                        <th scope="row">{{ $index }}</th>
                        @php($index++)

                        <td>{{ $franchise['franchise_id'] }}</td>
                        <td>{{ $franchise['franchise_name'] }}</td>
                        <td>{{ $franchise['franchise_founded'] }}</td>
                        <td>{{ $franchise['franchise_type'] }}</td>
                        <td>{{ $franchise['franchise_outlet'] }}</td>
                        <td>{{ $franchise['franchise_investment'] }}</td>
                        <td>{{ $franchise['franchise_website'] }}</td>
                        <td>{{ $franchise['franchise_description'] }}</td>

                        <td class="text-center">
                            <form action="{{ route('franchise.destroy', $franchise->franchise_id) }}" method="POST">
                                <a class="btn btn-info"
                                    href="{{ route('franchise.show', $franchise->franchise_id) }}">Show</a>
                                <a class="btn btn-primary"
                                    href="{{ route('franchise.edit', $franchise->franchise_id) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>

@endsection
