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
                <h1>Edit Branch Information</h1>
            </div>
        </div>

        <form action="{{ route('branch.update', $branch->branch_id) }}" method="POST"
            class="row g-3 justify-content-center">
            @csrf

            <input type="hidden" name="_method" value="PATCH">

            <div class="col-md-10">
                <label class="form-label">Branch Location</label>
                <input type="text" name="branch_location" class="form-control" value="{{ $branch['branch_location'] }}"
                    placeholder="Enter Branch Location" required>
            </div>

            <div class="col-md-10">
                <label class="form-label">Branch Phone Number</label>
                <input type="text" name="branch_phone" class="form-control" value="{{ $branch['branch_phone'] }}"
                    placeholder="Enter Branch Phone Number" required>
            </div>

            <div class="col-md-10">
                <label class="form-label">Branch Rating (Range: 1-5)</label>
                <input type="text" name="branch_rating" class="form-control" value="{{ $branch['branch_rating'] }}"
                    placeholder="Enter Branch Rating" required>
            </div>

            <div class="col-md-10">
                <label class="form-label">Franchise</label><br>
                <select name="franchise_id" id="" class="form-select" required>
                    <option value="{{ $branch->franchise->franchise_id }}" selected disabled hidden>
                        {{ $branch->franchise->franchise_name }}</option>
                    @foreach ($franchise as $franchise)

                        @if ($branch['franchise_id'] == $franchise['franchise_id'])
                            <option value="{{ $franchise['franchise_id'] }}" selected>{{ $franchise['franchise_name'] }}</option>
                        @else
                            <option value="{{ $franchise['franchise_id'] }}">{{ $franchise['franchise_name'] }}</option>
                        @endif

                    @endforeach
                </select>
            </div>

            <div class="col-md-10 pt-4 d-grid">
                <input type="submit" class="btn btn-primary" value="Update">
            </div>
        </form>

    </div>
@endsection
