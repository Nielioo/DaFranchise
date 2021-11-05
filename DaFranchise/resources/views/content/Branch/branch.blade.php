@extends('layout.defaultLayout')

@section('title', $title)

@section('content')

    <div class="container pt-5 pb-5">

        <div class="row">
            <div class="col d-flex justify-content-start">
                <h1>Branch</h1><br>
            </div>
            <div class="col d-flex justify-content-end">
                <a href="{{ route('branch.create') }}" class="btn btn-primary float-right">Create New
                    Branch</a><br><br>
            </div>
        </div>
        <br>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">branch_id</th>
                    <th scope="col">branch_location</th>
                    <th scope="col">branch_phone</th>
                    <th scope="col">branch_rating</th>
                    <th scope="col">franchise_id->franchise_name</th>

                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @php($index = 1)
                @foreach ($branch as $branch)
                    <tr>
                        <th scope="row">{{ $index }}</th>
                        @php($index++)

                        <td>{{ $branch['branch_id'] }}</td>
                        <td>{{ $branch['branch_location'] }}</td>
                        <td>{{ $branch['branch_phone'] }}</td>
                        <td>{{ $branch['branch_rating'] }}</td>
                        <td>{{ $branch->franchise->franchise_name }}</td>

                        <td class="text-center">
                            <form action="{{ route('branch.destroy', $branch->branch_id) }}" method="POST">
                                <a class="btn btn-info"
                                    href="{{ route('branch.show', $branch->branch_id) }}">Show</a>
                                <a class="btn btn-primary"
                                    href="{{ route('branch.edit', $branch->branch_id) }}">Edit</a>
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
