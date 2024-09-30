@extends('user.sidebar')

@section('x-slot')

<section>
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert" id="successAlert">
            {{ session('success') }}
        </div>
    @endif
</section>

<div class="container py-4">
    <!-- Card Structure -->
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3 class="m-0">Car Details</h3>
            <button class="btn btn-primary" id="toggleFormButton">
                Add
            </button>
        </div>
        <div class="card-body">
            <!-- Form for Adding a New Entry -->
            <div id="addForm" class="mb-4" style="display: none;">
            <form action="{{ route('admin.add')}}" method="POST" id="entryForm">
    @csrf
    <div class="row mb-3">
        <div class="col-md-6">
            <label for="inputOil" class="form-label">Oil</label>
            <input type="text" class="form-control" id="inputOil" name="oil" placeholder="Enter Oil Name" required>
        </div>
        <div class="col-md-6">
            <label for="inputCarType" class="form-label">Car Type</label>
            <input type="text" class="form-control" id="inputCarType" name="car_type" placeholder="Enter Car Type" required>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-md-6">
            <label for="inputCarModel" class="form-label">Car Model</label>
            <input type="text" class="form-control" id="inputCarModel" name="car_model" placeholder="Enter Car Model" required>
        </div>
        <div class="col-md-6">
            <label for="inputYear" class="form-label">Manufacturer Year</label>
            <input type="number" class="form-control" id="inputYear" name="manufacturer_year" placeholder="Enter Year" required>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-md-6">
            <label for="inputEngineType" class="form-label">Engine Type</label>
            <select class="form-select" id="inputEngineType" name="engine_type" required>
                <option selected disabled>Choose...</option>
                <option value="Petrol">Petrol</option>
                <option value="Diesel">Diesel</option>
            </select>
        </div>
        <div class="col-md-6">
            <label for="inputPrice" class="form-label">Price</label>
            <input type="number" class="form-control" id="inputPrice" name="price" placeholder="Enter Price" step="0.01" required>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-md-6">
            <label for="inputStatus" class="form-label">Status</label>
            <select class="form-select" id="inputStatus" name="status" required>
                <option selected disabled>Choose Status...</option>
                <option value="1">Active</option>
                <option value="0">Inactive</option>
            </select>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

            </div>

            <table class="table lms_table_active">
                <thead>
                    <tr>
                        <th scope="col">Oil</th>
                        <th scope="col">Car Type</th>
                        <th scope="col">Car Model</th>
                        <th scope="col">Manufacturer Year</th>
                        <th scope="col">Engine Type</th>
                        <th scope="col">Price</th>
                        <th scope="col">Status</th>
                        <th scope="col">Actions</th> <!-- New Actions Header -->
                    </tr>
                </thead>
                <tbody>
                    
               
                    <tr>
                        <th scope="row"><a href="#" class="question_content">$oil->id</a></th>
                        <td>$oil->oil_name</td>
                        <td>$oil->car_type</td>
                        <td>$oil->car_model</td>
                        <td>$oil->manufacturing_year</td>
                        <td>$oil->price</td>
                        <td><a href="#" class="status_btn">Active</a></td>
                        <td>
                            <div class="d-flex">
                    
                            <a href="" class="btn btn-warning btn-sm me-2">Edit</a>
              

                        <form action="" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this oil record?')">Remove</button>
                        </form>
                                                </div>
                        </td> <!-- Actions Column -->
                    </tr>
            
                    <!-- Repeat rows as needed -->
                </tbody>
            </table>
        </div>
    </div>
</div>



<!-- Include Bootstrap CSS and JS -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
<script>
    $(document).ready(function() {
        $('#toggleFormButton').click(function() {
            $('#addForm').toggle();
        });

        // $('#entryForm').submit(function(e) {
        //     e.preventDefault(); // Prevent the default form submission
        //     $('#addForm').hide(); // Hide the form after submission
        //     // Optionally, add code to submit the form data to the server
        // });
    });
</script>
<script>
  
    const successAlert = document.getElementById('successAlert');
    if (successAlert) {
        
        setTimeout(() => {
            successAlert.classList.remove('show');
            successAlert.style.display = 'none'; // Ensure it's hidden
        }, 2000); 
    }
</script>
@endsection
