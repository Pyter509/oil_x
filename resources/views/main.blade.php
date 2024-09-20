@extends('index')
@section('slot')
  

<main class="main">

<!-- Hero Section -->
<section id="hero" class="hero section dark-background">

  <img src="{{url('assets/img/hero.jpg')}}" alt="Oil_X Hero Image" data-aos="fade-in">

  <div class="container text-center" data-aos="fade-up" data-aos-delay="100">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <h2>Welcome to Oil_X</h2>
        <p>Your trusted partner for fast, reliable oil changes and comprehensive vehicle care services. Keep your engine running smoothly with expert care from our experienced team.</p>
        <a href="#about" class="btn-get-started">Discover Our Services</a>
      </div>
    </div>
  </div>

</section><!-- /Hero Section -->


<section id="about" class="about section">

  <div class="container">

    <div class="row gy-4">

      <div class="col-lg-5 position-relative aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
        <img src="{{ url('assets/img/About us page-pana.png') }}" class="img-fluid" alt="">
      </div>

      <div class="col-lg-7 content" data-aos="fade-up" data-aos-delay="5">
        <h3>About Us</h3>
        <p>
          At Oil_X, we are committed to providing fast, reliable, and high-quality oil change services to keep your vehicle running smoothly. With a focus on efficiency and customer satisfaction, we ensure that every vehicle receives expert care using premium oils and filters.
        </p>
        <ul>
          <li>
            <i class="bi bi-diagram-3"></i>
            <div>
              <h5>Full-Service Oil Changes</h5>
              <p>Our comprehensive oil changes include fluid top-offs, oil filter replacement, and vehicle inspection to keep your engine in peak condition.</p>
            </div>
          </li>
          <li>
            <i class="bi bi-fullscreen-exit"></i>
            <div>
              <h5>High Mileage Oil Changes</h5>
              <p>We offer specialized oil changes for vehicles with over 75,000 miles, helping to reduce oil consumption and protect older engines.</p>
            </div>
          </li>
          <li>
            <i class="bi bi-broadcast"></i>
            <div>
              <h5>Additional Maintenance Services</h5>
              <p>From battery testing to air filter replacements and tire rotations, we provide essential services to keep your vehicle running safely and efficiently.</p>
            </div>
          </li>
        </ul>
        <p>
          With years of experience and a passion for vehicle care, Oil_X is here to ensure your car gets the best service possible. Our technicians are dedicated to delivering excellent customer service and expert maintenance, ensuring that your vehicle stays in great shape for the long haul.
        </p>
      </div>

    </div>

  </div>

</section><!-- /About Section -->


<!-- Why Us Section -->
<section id="why-us" class="why-us section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Why Us</h2>
    <div><span>Check Out</span> <span class="description-title">Why Choose Oil_X</span></div>
  </div><!-- End Section Title -->

  <div class="container">

    <div class="row gy-4">

      <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
        <div class="card-item">
          <span>01</span>
          <h4><a href="#" class="stretched-link">Fast & Reliable Service</a></h4>
          <p>At Oil_X, we understand the importance of your time. Our quick oil change services ensure you're back on the road in no time without compromising on quality.</p>
        </div>
      </div><!-- Card Item -->

      <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
        <div class="card-item">
          <span>02</span>
          <h4><a href="#" class="stretched-link">Expert Technicians</a></h4>
          <p>Our team of experienced technicians are trained to provide precise oil changes and vehicle maintenance, ensuring the best care for your car.</p>
        </div>
      </div><!-- Card Item -->

      <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
        <div class="card-item">
          <span>03</span>
          <h4><a href="#" class="stretched-link">Premium Products</a></h4>
          <p>We use only top-quality oils and filters, ensuring your vehicle's engine runs smoothly and efficiently with long-lasting protection.</p>
        </div>
      </div><!-- Card Item -->

    </div>

  </div>

</section><!-- /Why Us Section -->



<!-- Services Section -->
<section id="services" class="services section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Services</h2>
    <div><span>Check Our</span> <span class="description-title">Services</span></div>
  </div><!-- End Section Title -->

  <div class="container">

    <div class="row gy-4">

      <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
        <div class="icon flex-shrink-0"><i class="bi bi-droplet"></i></div>
        <div>
          <h4 class="title"><a href="#" class="stretched-link">Full-Service Oil Change</a></h4>
          <p class="description">Get a complete oil change including new motor oil, oil filter replacement, and fluid top-off to ensure your vehicle runs smoothly.</p>
        </div>
      </div>
      <!-- End Service Item -->

      <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
        <div class="icon flex-shrink-0"><i class="bi bi-speedometer2"></i></div>
        <div>
          <h4 class="title"><a href="#" class="stretched-link">High Mileage Oil Change</a></h4>
          <p class="description">Specialized oil change for vehicles with over 75,000 miles to reduce oil burn-off and protect older engines.</p>
        </div>
      </div><!-- End Service Item -->

      <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="300">
        <div class="icon flex-shrink-0"><i class="bi bi-gear-wide-connected"></i></div>
        <div>
          <h4 class="title"><a href="#" class="stretched-link">Transmission Fluid Exchange</a></h4>
          <p class="description">Replace old transmission fluid to improve gear shifting and prolong the life of your transmission.</p>
        </div>
      </div><!-- End Service Item -->

      <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="400">
        <div class="icon flex-shrink-0"><i class="bi bi-lightning"></i></div>
        <div>
          <h4 class="title"><a href="#" class="stretched-link">Battery Services</a></h4>
          <p class="description">Test your battery and replace it if needed to ensure your vehicle starts reliably every time.</p>
        </div>
      </div><!-- End Service Item -->

      <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="500">
        <div class="icon flex-shrink-0"><i class="bi bi-airplane-engines"></i></div>
        <div>
          <h4 class="title"><a href="#" class="stretched-link">Air Filter Replacement</a></h4>
          <p class="description">Improve your vehicle’s air quality and engine performance by replacing the engine and cabin air filters.</p>
        </div>
      </div><!-- End Service Item -->

      <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="600">
        <div class="icon flex-shrink-0"><i class="bi bi-circle-fill"></i></div>
        <div>
          <h4 class="title"><a href="#" class="stretched-link">Tire Rotation & Inflation</a></h4>
          <p class="description">Rotate and inflate your tires for even wear and better fuel efficiency, extending the life of your tires.</p>
        </div>
      </div><!-- End Service Item -->

    </div>

  </div>

</section><!-- /Services Section -->


<!-- Team Section -->
<section id="team" class="team section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Team</h2>
    <div><span>Check Our</span> <span class="description-title">Team</span></div>
  </div><!-- End Section Title -->

  <div class="container">

    <div class="row gy-4">

      <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
        <div class="member">
          <img src="https://bootstrapmade.com/content/demo/Remember/assets/img/team/team-1.jpg" class="img-fluid" alt="">
          <h4>Walter White</h4>
          <span>Web Development</span>
          <div class="social">
            <a href="#"><i class="bi bi-twitter-x"></i></a>
            <a href="#"><i class="bi bi-facebook"></i></a>
            <a href="#"><i class="bi bi-instagram"></i></a>
            <a href="#"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>
      </div><!-- End Team Member -->

      <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
        <div class="member">
          <img src="https://bootstrapmade.com/content/demo/Remember/assets/img/team/team-2.jpg" class="img-fluid" alt="">
          <h4>Sarah Jhinson</h4>
          <span>Marketing</span>
          <div class="social">
            <a href="#"><i class="bi bi-twitter-x"></i></a>
            <a href="#"><i class="bi bi-facebook"></i></a>
            <a href="#"><i class="bi bi-instagram"></i></a>
            <a href="#"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>
      </div><!-- End Team Member -->

      <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
        <div class="member">
          <img src="https://bootstrapmade.com/content/demo/Remember/assets/img/team/team-3.jpg" class="img-fluid" alt="">
          <h4>William Anderson</h4>
          <span>Content</span>
          <div class="social">
            <a href="#"><i class="bi bi-twitter-x"></i></a>
            <a href="#"><i class="bi bi-facebook"></i></a>
            <a href="#"><i class="bi bi-instagram"></i></a>
            <a href="#"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>
      </div><!-- End Team Member -->

      <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
        <div class="member">
          <img src="https://bootstrapmade.com/content/demo/Remember/assets/img/team/team-4.jpg" class="img-fluid" alt="">
          <h4>Amanda Jepson</h4>
          <span>Accountant</span>
          <div class="social">
            <a href="#"><i class="bi bi-twitter-x"></i></a>
            <a href="#"><i class="bi bi-facebook"></i></a>
            <a href="#"><i class="bi bi-instagram"></i></a>
            <a href="#"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>
      </div><!-- End Team Member -->

    </div>

  </div>

</section><!-- /Team Section -->

<!-- Testimonials Section -->
<section id="testimonials" class="testimonials section dark-background">

  <img src="https://bootstrapmade.com/content/demo/Remember/assets/img/testimonials-bg.jpg" class="testimonials-bg" alt="">

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="swiper init-swiper">
      <script type="application/json" class="swiper-config">
        {
          "loop": true,
          "speed": 600,
          "autoplay": {
            "delay": 5000
          },
          "slidesPerView": "auto",
          "pagination": {
            "el": ".swiper-pagination",
            "type": "bullets",
            "clickable": true
          }
        }
      </script>
      <div class="swiper-wrapper">

        <div class="swiper-slide">
          <div class="testimonial-item">
            <img src="https://bootstrapmade.com/content/demo/Remember/assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
            <h3>Saul Goodman</h3>
            <h4>Ceo &amp; Founder</h4>
            <div class="stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>
              <i class="bi bi-quote quote-icon-left"></i>
              <span>Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.</span>
              <i class="bi bi-quote quote-icon-right"></i>
            </p>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-item">
            <img src="https://bootstrapmade.com/content/demo/Remember/assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
            <h3>Sara Wilsson</h3>
            <h4>Designer</h4>
            <div class="stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>
              <i class="bi bi-quote quote-icon-left"></i>
              <span>Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.</span>
              <i class="bi bi-quote quote-icon-right"></i>
            </p>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-item">
            <img src="https://bootstrapmade.com/content/demo/Remember/assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
            <h3>Jena Karlis</h3>
            <h4>Store Owner</h4>
            <div class="stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>
              <i class="bi bi-quote quote-icon-left"></i>
              <span>Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.</span>
              <i class="bi bi-quote quote-icon-right"></i>
            </p>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-item">
            <img src="https://bootstrapmade.com/content/demo/Remember/assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
            <h3>Matt Brandon</h3>
            <h4>Freelancer</h4>
            <div class="stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>
              <i class="bi bi-quote quote-icon-left"></i>
              <span>Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.</span>
              <i class="bi bi-quote quote-icon-right"></i>
            </p>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-item">
            <img src="https://bootstrapmade.com/content/demo/Remember/assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
            <h3>John Larson</h3>
            <h4>Entrepreneur</h4>
            <div class="stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>
              <i class="bi bi-quote quote-icon-left"></i>
              <span>Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.</span>
              <i class="bi bi-quote quote-icon-right"></i>
            </p>
          </div>
        </div><!-- End testimonial item -->

      </div>
      <div class="swiper-pagination"></div>
    </div>

  </div>

</section><!-- /Testimonials Section -->



<!-- Contact Section -->
<section id="contact" class="contact section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Contact</h2>
    <div><span>Check Our</span> <span class="description-title">Contact</span></div>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">

  <div class="mb-4" data-aos="fade-up" data-aos-delay="200">
  <iframe style="border:0; width: 85%; height: 300px;" 
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29927.029573046743!2d39.2915!3d-6.7983!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x185c36e4bda634a5%3A0x7104e7042e2d1d5d!2sWorkers%20Compensation%20Fund!5e0!3m2!1sen!2sus!4v1696150075230!5m2!1sen!2sus" 
          frameborder="0" 
          allowfullscreen="" 
          loading="lazy" 
          referrerpolicy="no-referrer-when-downgrade">
  </iframe>
</div><!-- End Google Maps -->




    <div class="row gy-4">

      <div class="col-lg-4">
        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
          <i class="bi bi-geo-alt flex-shrink-0"></i>
          <div>
            <h3>Address</h3>
            <p>A108 Adam Street, New York, NY 535022</p>
          </div>
        </div><!-- End Info Item -->

        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
          <i class="bi bi-telephone flex-shrink-0"></i>
          <div>
            <h3>Call Us</h3>
            <p>+255 717 480 156</p>
          </div>
        </div><!-- End Info Item -->

        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
          <i class="bi bi-envelope flex-shrink-0"></i>
          <div>
            <h3>Email Us</h3>
            <p><a href="https://bootstrapmade.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="b6dfd8d0d9f6d3ced7dbc6dad398d5d9db">[email&#160;protected]</a></p>
          </div>
        </div><!-- End Info Item -->

      </div>

      <div class="col-lg-8">
        <form action="https://bootstrapmade.com/content/demo/Remember/forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
          <div class="row gy-4">

            <div class="col-md-6">
              <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
            </div>

            <div class="col-md-6 ">
              <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
            </div>

            <div class="col-md-12">
              <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
            </div>

            <div class="col-md-12">
              <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
            </div>

            <div class="col-md-12 text-center">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>

              <button type="submit">Send Message</button>
            </div>

          </div>
        </form>
      </div><!-- End Contact Form -->

    </div>

  </div>

</section><!-- /Contact Section -->

</main>


 @endsection