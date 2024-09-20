@extends('index')

@section('slot')

<!-- Services Section -->
<section class="py-5 py-xl-8">
  <div class="container">
    <div class="row justify-content-md-center">
      <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6">
        <h2 class="mb-4 display-5 text-center">Our Services</h2>
        <p class="text-secondary mb-5 text-center">Our expert team provides a range of high-quality services to meet your needs. From essential maintenance to specialized installations, we ensure your vehicle operates at its best.</p>
        <hr class="w-50 mx-auto mb-5 mb-xl-9 border-dark-subtle">
      </div>
    </div>
  </div>

  <div class="container overflow-hidden">
    <div class="row gy-5">
      
      <!-- Service 1 - Oil Exchange -->
      <div class="col-12 col-sm-6 col-lg-4">
        <div class="text-center px-xl-2">
          <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-droplet-fill text-primary mb-4" viewBox="0 0 16 16">
            <path d="M8 0C4.686 0 2 4.686 2 8s6 8 6 8 6-3.686 6-8S11.314 0 8 0zm0 12a4 4 0 0 1-3.24-6.398C4.406 5.89 5.637 5 7 5c1.363 0 2.615.889 2.74 2.602A4 4 0 0 1 8 12z"/>
          </svg>
          <h5 class="m-2">Oil Exchange</h5>
          <p class="m-0 text-secondary">Regular oil exchanges are crucial for the longevity and performance of your vehicle. Our service ensures your engine runs smoothly.</p>
        </div>
      </div>
      
      <!-- Service 2 - Brake Services -->
      <div class="col-12 col-sm-6 col-lg-4">
        <div class="text-center px-xl-2">
          <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-brake-fluid text-primary mb-4" viewBox="0 0 16 16">
            <path d="M8 0c-4.418 0-8 3.582-8 8s8 8 8 8 8-3.582 8-8-3.582-8-8-8zm0 14c-3.855 0-7-3.145-7-7s7-7 7-7 7 3.145 7 7-3.145 7-7 7z"/>
          </svg>
          <h5 class="m-2">Brake Services</h5>
          <p class="m-0 text-secondary">Ensure your vehicle’s safety with our comprehensive brake services, including inspections, repairs, and replacements.</p>
        </div>
      </div>

      <!-- Service 3 - Drivetrain Services -->
      <div class="col-12 col-sm-6 col-lg-4">
        <div class="text-center px-xl-2">
          <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-gear-fill text-primary mb-4" viewBox="0 0 16 16">
            <path d="M8 0a4.001 4.001 0 0 0-3.866 2.743L2.493 2.3A1.5 1.5 0 0 0 1.5 3.477V5.5a1.5 1.5 0 0 0 .993 1.41l1.641-.75A4.001 4.001 0 0 0 8 16a4.001 4.001 0 0 0 3.866-2.743l1.641.75A1.5 1.5 0 0 0 14.5 13.5v-2.023a1.5 1.5 0 0 0-.993-1.41l-1.641.75A4.001 4.001 0 0 0 8 0z"/>
          </svg>
          <h5 class="m-2">Drivetrain Services</h5>
          <p class="m-0 text-secondary">Our drivetrain services include repairs and maintenance for components such as the transmission and differential to ensure smooth driving.</p>
        </div>
      </div>

      <!-- Service 4 - Suspension Services -->
      <div class="col-12 col-sm-6 col-lg-4">
        <div class="text-center px-xl-2">
          <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-suspension text-primary mb-4" viewBox="0 0 16 16">
            <path d="M7 0a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1 1 1 0 0 1-1-1V1a1 1 0 0 1 1-1zm0 14a1 1 0 0 1-1-1v-2a1 1 0 0 1 1-1 1 1 0 0 1 1 1v2a1 1 0 0 1-1 1zM1 11a1 1 0 0 1 1-1h3.5v1H2a1 1 0 0 1-1-1zm11-1h-3.5v-1H12a1 1 0 0 1 1 1zm-3.5 0h3a1 1 0 0 1 1 1v1H4v-1a1 1 0 0 1 1-1h3.5z"/>
          </svg>
          <h5 class="m-2">Suspension Services</h5>
          <p class="m-0 text-secondary">We offer suspension services to improve vehicle handling and comfort, including shock absorber and strut replacements.</p>
        </div>
      </div>

      <!-- Service 5 - Frame Services -->
      <div class="col-12 col-sm-6 col-lg-4">
        <div class="text-center px-xl-2">
          <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-frame text-primary mb-4" viewBox="0 0 16 16">
            <path d="M14 2H2a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1zm0 11H2V4h12v9z"/>
          </svg>
          <h5 class="m-2">Frame Services</h5>
          <p class="m-0 text-secondary">Our frame services include repairs and alignments to ensure your vehicle's frame is structurally sound and properly aligned.</p>
        </div>
      </div>

    </div>
  </div>
</section>
@endsection
