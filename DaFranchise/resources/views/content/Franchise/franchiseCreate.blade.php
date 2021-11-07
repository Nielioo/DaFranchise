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
                <h1>Upload New Franchise</h1>
            </div>
        </div>

        <form action="{{ route('franchise.store') }}" method="POST" class="row g-3 justify-content-center"
            enctype="multipart/form-data">
            @csrf

            <div class="col-md-10">
                <label class="form-label">Franchise Name</label>
                <input type="text" name="franchise_name" class="form-control" placeholder="Enter Franchise Name" required>
            </div>

            <div class="col-md-10">
                <label class="form-label">Year Founded</label><br>
                <select name="franchise_founded" id="year-dropdown" class="text-secondary form-select" required>
                    <option value="" selected disabled hidden>Choose Year</option>
                </select>
            </div>

            <div class="col-md-10">
                <label class="form-label">Business Type</label>
                <select name="franchise_type" id="" class="text-secondary form-select" required>
                    <option value="" selected disabled hidden>Choose Business Type</option>
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
                <input type="text" name="franchise_outlet" class="form-control" placeholder="Enter Total Outlet" required>
            </div>

            <div class="col-md-10">
                <label class="form-label">Total Investment</label>
                <input type="text" name="franchise_investment" class="form-control" placeholder="Enter Total Investment"
                    required>
            </div>

            <div class="col-md-10">
                <label for="franchise_logo" class="form-label">Franchise Logo</label>

                {{-- <div class="mb-3 col-sm-5">
                    <img class="img-preview img-fluid" style="height: 150px; object-fit: contain; overflow: hidden;">
                </div> --}}

                <input type="file" name="franchise_logo" id="franchise_logo" class="form-control"
                    onchange="previewImage()">
            </div>

            <div class="col-md-10">
                <label class="form-label">Official Website</label>
                <input type="text" name="franchise_website" class="form-control" placeholder="Enter Official Website"
                    required>
            </div>

            <div class="col-md-10">
                <label class="form-label">Description</label>
                <textarea name="franchise_description" cols="30" rows="5" class="form-control"
                    placeholder="Enter Description" required></textarea>
            </div>

            <div class="col-md-10 pt-4 d-grid">
                <input type="submit" class="btn btn-primary" value="Create">
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
