@extends('user.sidebar')

@section('content') <!-- Changed from 'x-slot' to 'content' for correct section definition -->
<div class="col-lg-12">
    <div class="white_card">
        <div class="white_card_header border_bottom_1px">
            <h4 class="card-title mb-0">Book Appointment</h4>
        </div>

        <form action="{{ route('user.book') }}" method="POST"> 
            @csrf

            <div class="card-body">
                <!-- First Name -->
                <div class="row mb-3">
                    <label class="form-label col-xl-3 col-lg-3 col-form-label">First Name</label>
                    <div class="col-lg-9 col-xl-8">
                        <input class="form-control" type="text" id="firstname" name="firstname" required />
                    </div>
                </div>

                <!-- Last Name -->
                <div class="row mb-3">
                    <label class="form-label col-xl-3 col-lg-3 col-form-label">Last Name</label>
                    <div class="col-lg-9 col-xl-8">
                        <input class="form-control" type="text" id="lastname" name="lastname" required />
                    </div>
                </div>

                <!-- Phone Number -->
                <div class="row mb-3">
                    <label class="form-label col-xl-3 col-lg-3 col-form-label">Phone</label>
                    <div class="col-lg-9 col-xl-8">
                        <input class="form-control" type="number" id="phone_number" name="pnumber" required />
                    </div>
                </div>

                <!-- Email Address -->
                <div class="row mb-3">
                    <label class="form-label col-xl-3 col-lg-3 col-form-label">Email Address</label>
                    <div class="col-lg-9 col-xl-8">
                        <input class="form-control" type="email" name="email" required />
                    </div>
                </div>

                <!-- Appointment Details -->
                <div class="row mb-3">
                    <label class="form-label col-xl-3 col-lg-3 col-form-label">Appointment Details</label>
                    <div class="col-lg-9 col-xl-8">
                        <textarea class="form-control" rows="3" name="appointment_details"></textarea>
                    </div>
                </div>

                <!-- Location -->
                <div class="row mb-3">
                    <label class="form-label col-xl-3 col-lg-3 col-form-label">Location</label>
                    <div class="col-lg-9 col-xl-8">
                        <select class="form-select" name="location" required>
                            <option value="">Select</option>
                            <option value="Gujarat">Gujarat</option>
                            <option value="New York">New York</option>
                            <option value="California">California</option>
                        </select>
                    </div>
                </div>

                <!-- Date for Appointment -->
                <div class="row mb-3">
                    <label class="form-label col-xl-3 col-lg-3 col-form-label">Date for Appointment</label>
                    <div class="col-lg-9 col-xl-8">
                        <input class="form-control" type="date" name="appointment_date" required />
                    </div>
                </div>

                <!-- Book Button -->
                <div class="row mb-3">
                    <div class="col-lg-9 col-xl-8 offset-lg-3 offset-xl-3">
                        <button type="submit" class="btn btn-primary">Book</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
