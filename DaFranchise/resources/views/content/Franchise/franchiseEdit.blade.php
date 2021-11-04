@extends('layout.defaultLayout')

@section('title', $title)

@section('content')
    <div class="container pt-5 pb-5">
        <div class="row mb-5">
            <div class="col-md-8 mx-auto text-center">
                <h1>Edit Franchise</h1>
            </div>
        </div>

        <form action="{{ route('franchise.update',$franchise->franchise_id) }}" method="POST" class="row g-3 justify-content-center">
            @csrf

            <input type="hidden" name="_method" value="PATCH">

            <div class="col-md-10">
                <label class="form-label">franchise_name</label>
                <input type="text" name="franchise_name" class="form-control" value="{{$franchise['franchise_name']}}" placeholder="Enter franchise_name" required>
            </div>

            <div class="col-md-10">
                <label class="form-label">franchise_founded</label>
                <input type="text" name="franchise_founded" class="form-control" value="{{$franchise['franchise_founded']}}" placeholder="Enter franchise_founded" required>
            </div>

            <div class="col-md-10">
                <label class="form-label">franchise_type</label>
                <input type="text" name="franchise_type" class="form-control" value="{{$franchise['franchise_type']}}" placeholder="Enter franchise_type" required>
            </div>
            <div class="col-md-10">
                <label class="form-label">franchise_outlet</label>
                <input type="text" name="franchise_outlet" class="form-control" value="{{$franchise['franchise_outlet']}}" placeholder="Enter franchise_outlet" required>
            </div>

            <div class="col-md-10">
                <label class="form-label">franchise_investment</label>
                <input type="text" name="franchise_investment" class="form-control" value="{{$franchise['franchise_investment']}}" placeholder="Enter franchise_investment" required>
            </div>

            <div class="col-md-10">
                <label class="form-label">franchise_website</label>
                <input type="text" name="franchise_website" class="form-control" value="{{$franchise['franchise_website']}}" placeholder="Enter franchise_website" required>
            </div>

            <div class="col-md-10">
                <label class="form-label">franchise_description</label>
                <textarea name="franchise_description" cols="30" rows="5" class="form-control" placeholder="Enter franchise_description" required>{{$franchise['franchise_description']}}</textarea>
            </div>

            <div class="col-md-10 d-grid">
                <input type="submit" class="btn btn-primary" value="Update">
            </div>
        </form>

    </div>
@endsection
