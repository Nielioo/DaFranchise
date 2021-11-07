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
                        href="#">{{ $franchise['franchise_name'] }}</a>
                </li>
            </ol>
        </nav>
        <br>

        {{-- Franchise Name --}}
        <h1 class="h1 mb-2">{{ $franchise['franchise_name'] }}</h1>

        <br>

        <div class="h-100">
            {{-- @if ($franchise['franchise_logo_path'] != null)
                <img src="{{ asset('storage/post-images/franchise_logo' . $franchise['franchise_logo_path']) }}" alt=""
                    class="img-fluid">
            @else
                <img src="img/default-square.jpg" alt="" class="img-fluid">
            @endif --}}
        </div>


        <br>

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
                            <th class="text-paragraph text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php($index = 1)
                        @foreach ($franchise->branches as $branch)
                            <tr>

                                <th class="text-paragraph align-middle text-center">{{ $index }}</th>
                                @php($index++)
                                <td class="text-paragraph align-middle">{{ $branch['branch_location'] }}</td>
                                <td class="text-paragraph align-middle text-center">{{ $branch['branch_phone'] }}</td>
                                <td class="text-paragraph align-middle text-center">{{ $branch['branch_rating'] }}/5</td>
                                <td class="text-paragraph align-middle text-center">
                                    <a class="btn btn-info" href="{{ route('branch.show', $branch->branch_id) }}"><i
                                            class="fa fa-eye"></i></a>
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif

        </div>
    </div>

@endsection
