@extends('layout.defaultLayout')

@section('title', $title)

@section('content')
    <div class="container pt-5 pb-5">

        <div class="row mb-5">
            <div class="col-md-8 mx-auto text-center">
                <h1>Edit Franchise Information</h1>
            </div>
        </div>

        <div class="col-md-10 m-auto">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="m-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>

        <form action="{{ route('franchise.update', $franchise->franchise_id) }}" method="POST"
            class="row g-3 justify-content-center" enctype="multipart/form-data">
            @csrf

            <input type="hidden" name="_method" value="PATCH">

            <div class="col-md-10">
                <label class="form-label">Franchise Name</label>
                <input type="text" name="franchise_name" class="form-control" value="{{ $franchise['franchise_name'] }}"
                    placeholder="Enter Franchise Name" required>
            </div>

            <div class="col-md-10">
                <label class="form-label">Year Founded</label><br>
                <input type="hidden" name="franchise_founded" value="{{ $franchise['franchise_founded'] }}">
                <select name="franchise_founded" id="year-dropdown" class="form-select" required>
                    <option value="{{ $franchise['franchise_founded'] }}" selected disabled hidden>
                        {{ $franchise['franchise_founded'] }}</option>
                </select>
            </div>

            <div class="col-md-10">
                <label class="form-label">Business Type</label>
                <input type="hidden" name="franchise_type" value="{{ $franchise['franchise_type'] }}">
                <select name="franchise_type" id="franchise_type" class="form-select" required>
                    <option value="{{ $franchise['franchise_type'] }}" selected disabled hidden>
                        {{ $franchise['franchise_type'] }}</option>

                    <option value="Automotive">Automotive</option>
                    <option value="Barbershop">Barbershop</option>
                    <option value="Beauty Care">Beauty Care</option>
                    <option value="Course">Course</option>
                    <option value="Digital Printing">Digital Printing</option>
                    <option value="Expeditions">Expedition</option>
                    <option value="Fitness and Gym">Fitness and Gym</option>
                    <option value="Food and Beverages">Food and Beverages</option>
                    <option value="Karaoke">Karaoke</option>
                    <option value="Laundry">Laundry</option>
                    <option value="Pharmacy">Pharmacy</option>
                    <option value="Playground">Playground</option>
                    <option value="Property">Property</option>
                    <option value="Reflexology">Reflexology</option>
                    <option value="Retail">Retail</option>
                    <option value="SPA">SPA</option>
                    <option value="Tour and Travel">Tour and Travel</option>
                    <option value="Water Refill">Water Refill</option>
                    <option value="Other">Other</option>
                </select>
            </div>

            <div class="col-md-10">
                <label class="form-label">Total Outlet</label>
                <input type="text" name="franchise_outlet" class="form-control"
                    value="{{ $franchise['franchise_outlet'] }}" placeholder="Enter Total Outlet" required>
            </div>

            <div class="col-md-10">
                <label class="form-label">Total Investment</label>
                <input type="text" name="franchise_investment" class="form-control"
                    value="{{ $franchise['franchise_investment'] }}" placeholder="Enter Total Investment" required>
            </div>

            <div class="col-md-10">
                <label for="franchise_logo" class="form-label">Franchise Logo</label>

                <input type="hidden" name="old_franchise_logo" value="{{ $franchise['franchise_logo'] }}">

                <div class="mb-3 col-sm-5">
                    @if ($franchise->franchise_logo)
                        <img src="{{ asset('/storage/' . $franchise['franchise_logo']) }}" class="img-preview img-fluid"
                            style="height: 150px; object-fit: contain; overflow: hidden;">
                    @else
                        <img class="img-preview img-fluid" style="height: 150px; object-fit: contain; overflow: hidden;">
                    @endif
                </div>

                <input type="file" name="franchise_logo" id="franchise_logo" class="form-control"
                    onchange="previewImage()">
            </div>

            <div class="col-md-10">
                <label class="form-label">Official Website</label>
                <input type="text" name="franchise_website" class="form-control"
                    value="{{ $franchise['franchise_website'] }}" placeholder="Enter Official Website" required>
            </div>

            <div class="col-md-10">
                <label class="form-label">Description</label>
                <textarea name="franchise_description" cols="30" rows="5" class="form-control"
                    placeholder="Enter Description" required>{{ $franchise['franchise_description'] }}</textarea>
            </div>

            <div class="col-md-10 pt-4 d-grid">
                <input type="submit" class="btn btn-primary" value="Update">
            </div>
        </form>

    </div>

    <script>
        let yearDropdown = document.getElementById('year-dropdown');

        let currentYear = new Date().getFullYear();
        let earliestYear = 1945;

        while (currentYear >= earliestYear) {
            let dateOption = document.createElement('option');
            dateOption.text = currentYear;
            dateOption.value = currentYear;
            yearDropdown.add(dateOption);
            currentYear -= 1;
        }
    </script>
    <script>
        previewImage() {
            const image = document.querySelector('#franchise_logo');
            const imagePreview = document.querySelector('.img-preview');

            imagePreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.file);

            oFReader.onLoad = function(oFREvent) {
                imagePreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection
