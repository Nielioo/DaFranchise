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

        {{-- <table class="table table-striped">
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
        </table> --}}


        @php($index = 0)
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach ($branch as $branch)
                <div class="col">
                    <div class="card shadow-sm pb-2 h-100">
                        <div class="card-header  text-primary">
                            {{ $branch->franchise->franchise_type }}
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Branch of {{ $branch->franchise->franchise_name }}</h5>

                            <div class="row h-50">
                                <p class="card-text">
                                    <?php
                                    $thestring = $branch['branch_location'];
                                    $getlength = Str::length($thestring);
                                    $maxLength = 75;

                                    if ($getlength > $maxLength) {
                                        echo Str::substr($thestring, 0, strrpos($thestring, ' ', $maxLength - $getlength));
                                        echo ' . . .';
                                    } else {
                                        echo $thestring;
                                    }
                                    ?>
                                </p>
                            </div>

                            <div class="pt-2">
                                <div class="d-flex justify-content-end">
                                    <form action="{{ route('branch.destroy', $branch->branch_id) }}" method="POST">
                                        <a class="btn btn-info"
                                            href="{{ route('branch.show', $branch->branch_id) }}"><i
                                                class="fa fa-eye"></i></a>
                                        <a class="btn btn-warning"
                                            href="{{ route('branch.edit', $branch->branch_id) }}"><i
                                                class="fa fa-pencil"></i></a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
                                    </form>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                @php($index++)
            @endforeach
        </div>

    </div>

@endsection
