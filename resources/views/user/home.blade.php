@extends('user.sidebar')

@section('extension')
<div class="container">
    <div class="row py-4">
        <div class="col-md-3">
            <button class="button-27" role="button" data-bs-toggle="modal" data-bs-target="#serviceModal" data-service="Oil Change">Oil Change</button>
        </div>
    </div>
</div>

<!-- Modal Structure -->
<div class="modal fade" id="serviceModal" tabindex="-1" aria-labelledby="serviceModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="serviceModalLabel">SERVICES AVAILABLE</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{route('oil.search')}}">
          @csrf
          <h2 class="fs-5">Search Your Car Oil</h2>
          <!-- Aina ya gari (manuafaturer na model) -->
          <div class="mb-3">
            <label for="manufacturer" class="form-label">Aina ya Gari (Manufacturer)</label>
            <input type="text" class="form-control" id="manufacturer" name="manufacturer" placeholder="Mfano: Toyota, Nissan" required>
          </div>
          
          <div class="mb-3">
            <label for="model" class="form-label">Model ya Gari</label>
            <input type="text" class="form-control" id="model" name="model" placeholder="Mfano: Rav4, Vanguard" required>
          </div>
          
          <div class="mb-3">
            <label for="year" class="form-label">Mwaka Iliyotengenezwa</label>
            <input type="number" class="form-control" id="year" name="year" placeholder="Mfano: 2015" required>
          </div>

          <!-- Aina ya mafuta (Petrol/Diesel) -->
          <div class="mb-3">
            <label for="fuelType" class="form-label">Aina ya Mafuta</label>
            <select class="form-select" id="fuelType" name="fuelType" required>
              <option value="Petrol">Petrol</option>
              <option value="Diesel">Diesel</option>
            </select>
          </div>
          
          <!-- Engine Type -->
          <div class="mb-3">
            <label for="engineType" class="form-label">Chasis No:</label>
            <input type="text" class="form-control" id="engineType" name="chasis_no" placeholder=" " required>
          </div>
          
       

          <!-- Submit button -->
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Tafuta Oil</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
