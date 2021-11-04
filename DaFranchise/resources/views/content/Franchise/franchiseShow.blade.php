@extends('layout.defaultLayout')

@section('title', $title)

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <p><b>franchise_id: </b>{{ $franchise['franchise_id'] }}</p>
            <p><b>franchise_name: </b>{{ $franchise['franchise_name'] }}</p>
            <p><b>franchise_founded: </b>{{ $franchise['franchise_founded'] }}</p>
            <p><b>franchise_type: </b>{{ $franchise['franchise_type'] }}</p>
            <p><b>franchise_outlet: </b>{{ $franchise['franchise_outlet'] }}</p>
            <p><b>franchise_investment: </b>{{ $franchise['franchise_investment'] }}</p>
            <p><b>franchise_website: </b>{{ $franchise['franchise_website'] }}</p>
            <p><b>franchise_description: </b>{{ $franchise['franchise_description'] }}</p>

            <b>Branch List</b>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">branch_id</th>
                        <th scope="col">branch_location</th>
                        <th scope="col">branch_phone</th>
                        <th scope="col">branch_rating</th>
                        <th scope="col">franchise_id</th>
                    </tr>
                </thead>
                <tbody>
                    @php ($index = 1)
                    @foreach ($franchise->branches as $branch)
                        <tr>
                            <th scope="row">{{ $index }}</th>
                            @php ($index++)
                            <td>{{ $branch['branch_id'] }}</td>
                            <td>{{ $branch['branch_location'] }}</td>
                            <td>{{ $branch['branch_phone'] }}</td>
                            <td>{{ $branch['branch_rating'] }}</td>
                            <td>{{ $branch['franchise_id'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
