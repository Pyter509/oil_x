@extends('user.sidebar')

@section('x-slot')

<section id="services" class="services section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Services</h2>
        <div><span>Check Our</span> <span class="description-title">Services</span></div>
    </div><!-- End Section Title -->

    <div class="container">
        <div class="row gy-4">

            <!-- Full-Service Oil Change -->
            <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up">
                <div class="icon flex-shrink-0"><i class="bi bi-droplet"></i></div>
                <div>
                    <!-- Form to submit the service ID -->
                    <form action="{{ route('user.ask') }}" method="POST">
                        @csrf
                        <input type="hidden" name="service_id" value="1"> <!-- Full-Service Oil Change ID -->
                        <h4 class="title">
                            <button type="submit" style="background: none; border: none; color: blue; text-decoration: underline; cursor: pointer;">
                                Full-Service Oil Change
                            </button>
                        </h4>
                    </form>
                    <p class="description">Get a complete oil change including new motor oil, oil filter replacement, and fluid top-off to ensure your vehicle runs smoothly.</p>
                </div>
            </div><!-- End Service Item -->

            <!-- High Mileage Oil Change -->
            <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
                <div class="icon flex-shrink-0"><i class="bi bi-speedometer2"></i></div>
                <div>
                    <form action="{{ route('user.ask') }}" method="POST">
                        @csrf
                        <input type="hidden" name="service_id" value="2"> <!-- High Mileage Oil Change ID -->
                        <h4 class="title">
                            <button type="submit" style="background: none; border: none; color: blue; text-decoration: underline; cursor: pointer;">
                                High Mileage Oil Change
                            </button>
                        </h4>
                    </form>
                    <p class="description">Specialized oil change for vehicles with over 75,000 miles to reduce oil burn-off and protect older engines.</p>
                </div>
            </div><!-- End Service Item -->

            <!-- Transmission Fluid Exchange -->
            <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="300">
                <div class="icon flex-shrink-0"><i class="bi bi-gear-wide-connected"></i></div>
                <div>
                    <form action="{{ route('user.ask') }}" method="POST">
                        @csrf
                        <input type="hidden" name="service_id" value="3"> <!-- Transmission Fluid Exchange ID -->
                        <h4 class="title">
                            <button type="submit" style="background: none; border: none; color: blue; text-decoration: underline; cursor: pointer;">
                                Transmission Fluid Exchange
                            </button>
                        </h4>
                    </form>
                    <p class="description">Replace old transmission fluid to improve gear shifting and prolong the life of your transmission.</p>
                </div>
            </div><!-- End Service Item -->

            <!-- Battery Services -->
            <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="400">
                <div class="icon flex-shrink-0"><i class="bi bi-lightning"></i></div>
                <div>
                    <form action="{{ route('user.ask') }}" method="POST">
                        @csrf
                        <input type="hidden" name="service_id" value="4"> <!-- Battery Services ID -->
                        <h4 class="title">
                            <button type="submit" style="background: none; border: none; color: blue; text-decoration: underline; cursor: pointer;">
                                Battery Services
                            </button>
                        </h4>
                    </form>
                    <p class="description">Test your battery and replace it if needed to ensure your vehicle starts reliably every time.</p>
                </div>
            </div><!-- End Service Item -->

            <!-- Air Filter Replacement -->
            <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="500">
                <div class="icon flex-shrink-0"><i class="bi bi-airplane-engines"></i></div>
                <div>
                    <form action="{{ route('user.ask') }}" method="POST">
                        @csrf
                        <input type="hidden" name="service_id" value="5"> <!-- Air Filter Replacement ID -->
                        <h4 class="title">
                            <button type="submit" style="background: none; border: none; color: blue; text-decoration: underline; cursor: pointer;">
                                Air Filter Replacement
                            </button>
                        </h4>
                    </form>
                    <p class="description">Improve your vehicle’s air quality and engine performance by replacing the engine and cabin air filters.</p>
                </div>
            </div><!-- End Service Item -->

            <!-- Tire Rotation & Inflation -->
            <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="600">
                <div class="icon flex-shrink-0"><i class="bi bi-circle-fill"></i></div>
                <div>
                    <form action="{{ route('user.ask') }}" method="POST">
                        @csrf
                        <input type="hidden" name="service_id" value="6"> <!-- Tire Rotation & Inflation ID -->
                        <h4 class="title">
                            <button type="submit" style="background: none; border: none; color: blue; text-decoration: underline; cursor: pointer;">
                                Tire Rotation & Inflation
                            </button>
                        </h4>
                    </form>
                    <p class="description">Rotate and inflate your tires for even wear and better fuel efficiency, extending the life of your tires.</p>
                </div>
            </div><!-- End Service Item -->

        </div>
    </div>
</section>

@endsection
