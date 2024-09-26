@extends('user.sidebar')

@section('x-slot')

<div class="container py-4">
    <!-- Card Structure -->
    <div class="card">
        <div class="card-header">
            <h3 class="m-0">Car Details For Oil Change Form</h3>
        </div>
        <div class="card-body">
            <form action="{{ url('/search') }}" method="POST">
                @csrf <!-- CSRF protection in Laravel -->

                <!-- Row 1: Fuel Type and Car Manufacturer -->
                <div class="row mb-3">
                    <!-- Fuel Type (Aina ya Mafuta) -->
                    <div class="col-md-6">
                        <label class="form-label" for="fuelType">Aina ya Mafuta (Fuel Type)</label>
                        <select id="fuelType" name="fuelType" class="form-select" required>
                        @extends('user.sidebar')

@section('x-slot')

<head>
    <!-- Link to Google Fonts (Example: Poppins) -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        /* Apply the custom font globally */
        body {
            font-family: 'Poppins', sans-serif;
        }

        /* Style for the card header */
        h3 {
            font-weight: 600;
            font-size: 1.5rem;
        }

        /* Form labels */
        .form-label {
            font-weight: 500;
        }

        /* Button styling */
        .btn {
            font-weight: 500;
            font-size: 1rem;
        }
    </style>
</head>

<div class="container py-4">
    <!-- Card Structure -->
    <div class="card">
        <div class="card-header">
            <h3 class="m-0">Car Details For Oil Change Form</h3>
        </div>
        <div class="card-body">
            <form action="{{ url('/search') }}" method="POST">
                @csrf <!-- CSRF protection in Laravel -->

                <!-- Row 1: Fuel Type and Car Manufacturer -->
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label class="form-label" for="fuelType">Aina ya Mafuta (Fuel Type)</label>
                        <select id="fuelType" name="fuelType" class="form-select" required>
                            <option selected disabled>Choose...</option>
                            <option value="Petrol">Petrol</option>
                            <option value="Diesel">Diesel</option>
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label" for="manufacturer">Aina ya Gari (Manufacturer)</label>
                        <select id="manufacturer" name="manufacturer" class="form-select" required>
                            <option selected disabled>Choose...</option>
                            <option value="Toyota">Toyota</option>
                            <option value="Nissan">Nissan</option>
                            <option value="Land Rover">Land Rover</option>
                            <option value="BMW">BMW</option>
                            <option value="Volkswagen">Volkswagen (VW)</option>
                        </select>
                    </div>
                </div>

                <!-- Row 2: Car Model and Car Year -->
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label class="form-label" for="model">Model ya Gari</label>
                        <select id="model" name="model" class="form-select" required>
                            <option selected disabled>Choose...</option>
                            <option value="Allex">Allex</option>
                            <option value="Rav4">Rav4</option>
                            <option value="Vanguard">Vanguard</option>
                            <option value="Dualis">Dualis</option>
                            <option value="Discovery">Discovery</option>
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label" for="year">Mwaka Iliyotengenezwa</label>
                        <input type="number" name="year" class="form-control" id="year" placeholder="Mfano: 2015" required>
                    </div>
                </div>

                <!-- Chasis No -->
                <div class="mb-3">
                    <label class="form-label" for="chasis_no">Chasis No:</label>
                    <input type="text" name="chasis_no" class="form-control" id="chasis_no" placeholder="Enter Chasis No" required>
                </div>

                <!-- Submit Button -->
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
     <option selected disabled>Choose...</option>
                            <option value="Petrol">Petrol</option>
                            <option value="Diesel">Diesel</option>
                        </select>
                    </div>

                    <!-- Car Manufacturer (Aina ya Gari) -->
                    <div class="col-md-6">
                        <label class="form-label" for="manufacturer">Aina ya Gari (Manufacturer)</label>
                        <select id="manufacturer" name="manufacturer" class="form-select" required>
                            <option selected disabled>Choose...</option>
                            <option value="Toyota">Toyota</option>
                            <option value="Nissan">Nissan</option>
                            <option value="Land Rover">Land Rover</option>
                            <option value="BMW">BMW</option>
                            <option value="Volkswagen">Volkswagen (VW)</option>
                        </select>
                    </div>
                </div>

                <!-- Row 2: Car Model and Car Year -->
                <div class="row mb-3">
                    <!-- Car Model (Aina ya Model) -->
                    <div class="col-md-6">
                        <label class="form-label" for="model">Model ya Gari</label>
                        <select id="model" name="model" class="form-select" required>
                            <option selected disabled>Choose...</option>
                            <option value="Allex">Allex</option>
                            <option value="Rav4">Rav4</option>
                            <option value="Vanguard">Vanguard</option>
                            <option value="Dualis">Dualis</option>
                            <option value="Discovery">Discovery</option>
                        </select>
                    </div>

                    <!-- Car Year (Mwaka wa Gari) -->
                    <div class="col-md-6">
                        <label class="form-label" for="year">Mwaka Iliyotengenezwa</label>
                        <input type="number" name="year" class="form-control" id="year" placeholder="Mfano: 2015" required>
                    </div>
                </div>

                <!-- Chasis No -->
                <div class="mb-3">
                    <label class="form-label" for="chasis_no">Chasis No:</label>
                    <input type="text" name="chasis_no" class="form-control" id="chasis_no" placeholder="Enter Chasis No" required>
                </div>

                <!-- Submit Button -->
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
