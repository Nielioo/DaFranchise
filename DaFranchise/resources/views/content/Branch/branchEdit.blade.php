@extends('layout.defaultLayout')

@section('title', $title)

@section('content')
    <div class="container pt-5 pb-5">
        <div class="row mb-5">
            <div class="col-md-8 mx-auto text-center">
                <h1>Edit Branch</h1>
            </div>
        </div>

        <form action="{{ route('branch.update', $branch->branch_id) }}" method="POST" class="row g-3 justify-content-center">
            @csrf

            <input type="hidden" name="_method" value="PATCH">

            <div class="col-md-10">
                <label class="form-label">branch_location</label>
                <input type="text" name="branch_location" class="form-control" value="{{$branch['branch_location']}}" placeholder="Enter branch_location" required>
            </div>

            <div class="col-md-10">
                <label class="form-label">branch_phone</label>
                <input type="text" name="branch_phone" class="form-control" value="{{$branch['branch_phone']}}" placeholder="Enter branch_phone" required>
            </div>

            <div class="col-md-10">
                <label class="form-label">branch_rating</label>
                <input type="text" name="branch_rating" class="form-control" value="{{$branch['branch_rating']}}" placeholder="Enter branch_rating" required>
            </div>

            <div class="col-md-10">
                <label class="form-label">Franchise</label><br>
                <select name="franchise_id" id="" class="custom-select">
                    <option value="" selected disabled hidden>{{$branch->franchise->franchise_name}}</option>
                    @foreach ($franchise as $franchise)
                        <option value="{{ $franchise['franchise_id'] }}">{{ $franchise['franchise_name'] }}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-md-10 d-grid">
                <input type="submit" class="btn btn-primary" value="Update">
            </div>
        </form>

    </div>
@endsection
