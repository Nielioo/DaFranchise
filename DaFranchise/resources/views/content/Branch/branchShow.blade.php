@extends('layout.defaultLayout')

@section('title', $title)

@section('css', 'detailPage')

@section('content')

    <div class="container mb-3">

        {{-- NavBar --}}
        <nav class="mb-3 pt-md-3" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="breadcrumb-item-link" href="{{ route('branch.index') }}">Branch</a>
                </li>
                <li class="breadcrumb-item"><a class="breadcrumb-item-link current" href="#">Branch of
                        {{ $branch->franchise->franchise_name }}</a>
                </li>
            </ol>
        </nav>
        <br>

        {{-- Branch Name --}}
        <h1 class="h1 mb-2">Branch of {{ $branch->franchise->franchise_name }}</h1>

        <br>

        {{-- Franchise Logo --}}
        @if ($branch->franchise->franchise_logo != null)
            <img src="{{ asset('/storage/' . $branch->franchise->franchise_logo) }}" alt="{{ $branch->franchise->franchise_logo }}" class="img-fluid logo-height">
        @else
            <img src="/img/default-square.jpg" alt="" class="img-fluid logo-height">
        @endif

        <br>

        <div class="row justify-content-center">

            {{-- Branch Detail --}}
            <h4 class="h4 mt-4 mb-3">Details</h4>
            <p class="text-paragraph"><b>Location: </b>{{ $branch['branch_location'] }}</p>
            <p class="text-paragraph"><b>Phone Number: </b>{{ $branch['branch_phone'] }}</p>
            <p class="text-paragraph"><b>Rating: </b>{{ $branch['branch_rating'] }}/5</p>
            <p class="text-paragraph"><b>Franchise: </b>{{ $branch->franchise->franchise_name }}</p>

        </div>
    </div>

@endsection
