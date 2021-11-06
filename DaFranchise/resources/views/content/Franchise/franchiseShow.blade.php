@extends('layout.defaultLayout')

@section('title', $title)

@section('css', 'detailPage')

@section('content')

    <div class="container mb-3">

        {{-- NavBar --}}
        <nav class="mb-3 pt-md-3" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="breadcrumb-item-link"
                        href="{{ route('franchise.index') }}">Franchise</a></li>
                <li class="breadcrumb-item"><a class="breadcrumb-item-link current"
                        href="{{ route('franchise.index'), $franchise->franchise_id }}">{{ $franchise['franchise_name'] }}</a>
                </li>
            </ol>
        </nav>
        <br>

        {{-- Franchise Name --}}
        <h1 class="h1 mb-2">{{ $franchise['franchise_name'] }}</h1>

        <br><br>

        <div class="row justify-content-center">

            {{-- Franchise Description --}}
            <h4 class="h4 mt-4 mb-3">Overview</h4>
            <p class="text-paragraph">{{ $franchise['franchise_description'] }}</p>

            <br>

            {{-- Franchise Detail --}}
            <h4 class="h4 mt-4 mb-3">Details</h4>
            <p class="text-paragraph"><b>Name: </b>{{ $franchise['franchise_name'] }}</p>
            <p class="text-paragraph"><b>Founded: </b>{{ $franchise['franchise_founded'] }}</p>
            <p class="text-paragraph"><b>Business Type: </b>{{ $franchise['franchise_type'] }}</p>
            <p class="text-paragraph"><b>Total Outlet: </b>{{ $franchise['franchise_outlet'] }}</p>
            <p class="text-paragraph"><b>Total Investment: </b>{{ $franchise['franchise_investment'] }}</p>
            <p class="text-paragraph"><b>Official Website: </b> <a class="official-website-link"
                    href="{{ $franchise['franchise_website'] }}">{{ $franchise['franchise_website'] }}</a></p>

            @php($index = 0)
            @foreach ($franchise->branches as $branch)
                @php($index++)
            @endforeach

            @if ($index > 0)
                {{-- Branch Detail --}}
                <h4 class="h4 mt-4 mb-3">Branch List</h4>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="text-paragraph text-center">No</th>
                            <th class="text-paragraph">Branch Location</th>
                            <th class="text-paragraph text-center">Phone Number</th>
                            <th class="text-paragraph text-center">Rating</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php($index = 1)
                        @foreach ($franchise->branches as $branch)
                            <tr>
                                <th class="text-paragraph text-center">{{ $index }}</th>
                                @php($index++)
                                <td class="text-paragraph">{{ $branch['branch_location'] }}</td>
                                <td class="text-paragraph text-center">{{ $branch['branch_phone'] }}</td>
                                <td class="text-paragraph text-center">{{ $branch['branch_rating'] }}/5</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif

        </div>
    </div>

@endsection
