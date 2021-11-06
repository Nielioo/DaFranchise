@extends('layout.defaultLayout')

@section('title', $title)

@section('content')

    <div class="container pt-5 pb-5">

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="row mb-5">
            <div class="col-md-8 mx-auto text-center">
                <h1>Upload New Branch</h1>
            </div>
        </div>

        <form action="{{ route('branch.store') }}" method="POST" class="row g-3 justify-content-center">
            @csrf

            <div class="col-md-10">
                <label class="form-label">Branch Location</label>
                <input type="text" name="branch_location" class="form-control" placeholder="Enter Branch Location"
                    required>
            </div>

            <div class="col-md-10">
                <label class="form-label">Branch Phone Number</label>
                <input type="text" name="branch_phone" class="form-control" placeholder="Enter Branch Phone Number"
                    required>
            </div>

            <div class="col-md-10">
                <label class="form-label">Branch Rating (Range: 1-5)</label>
                <input type="text" name="branch_rating" class="form-control" placeholder="Enter Branch Rating" required>
            </div>

            <div class="col-md-10">
                <label class="form-label">Franchise</label><br>
                <select name="franchise_id" id="" class="text-secondary form-select" required>
                    <option value="" selected disabled hidden>Choose Franchise</option>
                    @foreach ($franchise as $franchise)
                        <option value="{{ $franchise['franchise_id'] }}">{{ $franchise['franchise_name'] }}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-md-10 pt-4 d-grid">
                <input type="submit" class="btn btn-primary" value="Create">
            </div>
        </form>

    </div>
@endsection
