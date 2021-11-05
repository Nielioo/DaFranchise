@extends('layout.defaultLayout')

@section('title', $title)

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <p><b>branch_location: </b>{{ $branch['branch_location'] }}</p>
            <p><b>branch_phone: </b>{{ $branch['branch_phone'] }}</p>
            <p><b>branch_rating: </b>{{ $branch['branch_rating'] }}</p>
            <p><b>franchise_id: </b>{{ $branch['franchise_id'] }} -> {{ $branch->franchise->franchise_name }} </p>

        </div>
    </div>

@endsection
