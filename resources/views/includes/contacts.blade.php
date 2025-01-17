@extends('index')
@section('slot')

<body>
  <main>
    <div class="container py-2">
      <div class="row g-5">
        <!-- Contact Information Block -->
        <div class="col-xl-6">
          <div class="row row-cols-md-2 g-4"></div>
          <div class="aos-item mt-4" data-aos="fade-up" data-aos-delay="600">
            <div class="aos-item__inner">
              <div class="bg-light hvr-shutter-out-horizontal d-block p-3">
                <div class="d-flex justify-content-start">
                  <i class="fa-solid fa-location-pin h3 pe-2"></i>
                  <span class="h5">Office location</span>
                </div>
                <span>Plot No. 37, GEPF House New Bagamoyo Road, Dar es Salaam, Dar es Salaam · 1.1 km</span>
              </div>
            </div>
          </div>
          <div class="aos-item" data-aos="fade-up" data-aos-delay="800">
            <div class="mt-4 w-100 aos-item__inner">
              <iframe class="hvr-shadow" width="100%" height="345" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=300&amp;hl=en&amp;q=1%20Grafton%20Street,%20Dublin,%20Ireland+()&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
              </iframe>
            </div>
          </div>
        </div>

        <!-- Contact Form Block -->
        <div class="col-xl-6">
          <div class="text-center mt-2">
            <h3>Leave a message</h3>
          </div>
    
          <div class="row">
            <div class="col-lg-12">
              <div class="card mt-2 mx-auto p-4 bg-light">
                <div class="card-body bg-light">
                  <div class="container">
                    <form id="contact-form" role="form">
                      <div class="controls">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="form_name">Firstname *</label>
                              <input id="form_name" type="text" name="name" class="form-control" placeholder="Enter first name" required="required" data-error="Firstname is required.">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="form_lastname">Lastname *</label>
                              <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Enter lastname *" required="required" data-error="Lastname is required.">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="form_email">Email *</label>
                              <input id="form_email" type="email" name="email" class="form-control" placeholder="Enter your email *" required="required" data-error="Valid email is required.">
                            </div>
                          </div>
                          <!-- <div class="col-md-6">
                            <div class="form-group">
                              <label for="form_need">Please specify your need *</label>
                              <select id="form_need" name="need" class="form-control" required="required" data-error="Please specify your need.">
                                <option value="" selected disabled>--Select Your Issue--</option>
                                <option>Request Invoice for order</option>
                                <option>Request order status</option>
                                <option>Haven't received cashback yet</option>
                                <option>Other</option>
                              </select>
                            </div>
                          </div> -->
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="form_email">Phone No.</label>
                              <input id="form_number" type='numeric' name="pnumber" class="form-control" placeholder="Phone Number" required="required" data-error="Valid Phone no. is required.">
                            </div>
                          </div>

                        </div>
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label for="form_message">Message *</label>
                              <textarea id="form_message" name="message" class="form-control" placeholder="Write your message here." rows="4" required="required" data-error="Please, leave us a message."></textarea>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <input type="submit" class="btn btn-success btn-send pt-2 btn-block" value="Send Message">
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <!-- /.8 -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
</body>

@endsection
