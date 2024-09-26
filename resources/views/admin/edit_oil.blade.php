@extends('user.sidebar')

@section('x-slot')
    <div class="container">
        <h1>Edit Oil</h1>
        <form action="{{ route('oil.update', $oil->id) }}" method="POST">
            @csrf
            @method('PUT') <!-- Use PUT for updating -->

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="oilName" class="form-label">Oil Name</label>
                    <input type="text" class="form-control" id="oilName" name="oil_name" value="{{ $oil->oil_name }}" required>
                </div>
                <div class="col-md-6">
                    <label for="carType" class="form-label">Car Type</label>
                    <input type="text" class="form-control" id="carType" name="car_type" value="{{ $oil->car_type }}" required>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="carModel" class="form-label">Car Model</label>
                    <input type="text" class="form-control" id="carModel" name="car_model" value="{{ $oil->car_model }}" required>
                </div>
                <div class="col-md-6">
                    <label for="manufacturingYear" class="form-label">Manufacturing Year</label>
                    <input type="number" class="form-control" id="manufacturingYear" name="manufacturing_year" value="{{ $oil->manufacturing_year }}" required>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="engineType" class="form-label">Engine Type</label>
                    <input type="text" class="form-control" id="engineType" name="engine_type" value="{{ $oil->engine_type }}" required>
                </div>
                <div class="col-md-6">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" class="form-control" id="price" name="price" value="{{ $oil->price }}" step="0.01" required>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="status" class="form-label">Status</label>
                    <select class="form-select" id="status" name="status" required>
                        <option value="1" {{ $oil->status == 1 ? 'selected' : '' }}>Active</option>
                        <option value="0" {{ $oil->status == 0 ? 'selected' : '' }}>Inactive</option>
                    </select>
                </div>
            </div>

            <button type="submit" class="btn btn-success">Update</button>
        </form>
    </div>
@endsection
