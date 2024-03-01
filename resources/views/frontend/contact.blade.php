@extends('frontend.body.links')
@section('main')

    @section('title')
        Kagnew | Contact
    @endsection

    @php
        $route = Route::current()->getName();
    @endphp
    @section('title', 'Contact')
    @section('meta_description', 'Cotact for Kagnew football club')
<section id="contacthead" class="contacthead">
    <div class="container position-relative">
        <div class="contacthead-slider swiper" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">
            </div>
        </div>
    </div>
</section>

<main id="main">
    <section id="contact" class="contact">
        <div class="container">

            <div class="section-title">
                <h2>Contact</h2>
                <p> Contact Us </p>
            </div>
        </div>


        <div class="container">
            <div class="row mt-5" itemscope itemtype="http://schema.org/Organization">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="info-box">
                                <i class="bx bx-map"></i>
                                <h3>Our Address</h3>
                                <p itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                                    <span itemprop="streetAddress">Gerji Korea Hospital Compound</span><br>
                                    <span itemprop="addressLocality">Bole Sub City</span>,<br>
                                    <span itemprop="addressCountry">Addis Ababa, Ethiopia</span>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box mt-4">
                                <i class="bx bx-envelope"></i>
                                <h3>Email Us</h3>
                                <p itemprop="email">tesfafootball@gmail.com</p>
                                <br>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box mt-4">
                                <i class="bx bx-phone-call"></i>
                                <h3>Call Us</h3>
                                <p itemprop="telephone">+251-935-126252</p>
                                <p itemprop="telephone">+251-912-403173</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <form method="post" action="{{ route('store.message') }}" class="php">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                                @error('name')
                                <span class="text-danger" role="alert">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                                @error('email')
                                <span class="text-danger" role="alert">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                                @error('subject')
                                <span class="text-danger" role="alert">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="number" class="form-control" name="phone" id="phone" placeholder="Your Phone" required>
                                @error('phone')
                                <span class="text-danger" role="alert">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                            <div class="error-message">
                                @error('message')
                                <span class="text-danger" role="alert">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <div class="text-center">
                            <button type="submit" class="btn btn-outline-danger" role="button">&nbsp;&nbsp;&nbsp;&nbsp;Send Message&nbsp;&nbsp;&nbsp;&nbsp;</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6">
                    <form method="post" action="{{ route('booking') }}" class="php">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="booking" class="form-control" id="name" placeholder="Your Name" required>
                                @error('name')
                                <span class="text-danger" role="alert">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <div class="text-center">
                            <button type="submit" class="btn btn-outline-danger" role="button">&nbsp;&nbsp;&nbsp;&nbsp;Send Message&nbsp;&nbsp;&nbsp;&nbsp;</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6">
                    <form method="post" action="" class="php">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="delivery" class="form-control" id="name" placeholder="Your Name" required>
                                @error('name')
                                <span class="text-danger" role="alert">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <div class="text-center">
                            <button type="submit" class="btn btn-outline-danger" role="button">&nbsp;&nbsp;&nbsp;&nbsp;Send Message&nbsp;&nbsp;&nbsp;&nbsp;</button>
                        </div>
                    </form>
                </div>
            </div>


        </div>
    </section>
 <section id="book-a-table" class="book-a-table">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">

        <div class="section-title">
          <h2> <span>Book a Table</span></h2>
<!--          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>-->
        </div>

        <form method="post" action="{{ route('booking') }}" class="php">
            @csrf
          <div class="row">
            <div class="col-lg-4 col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
              <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3">
              <input type="date" name="date" class="form-control" id="date" placeholder="Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3">
              <input type="time" class="form-control" name="time" id="time" placeholder="Time" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3">
              <input type="number" class="form-control" name="people" id="people" placeholder="# of people" data-rule="minlen:1" data-msg="Please enter at least 1 chars">
              <div class="validate"></div>
            </div>
          </div>
          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
            <div class="validate"></div>
          </div>
          <div class="mb-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your booking request was sent. We will call back or send an Email to confirm your reservation. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Send Message</button></div>
        </form>
          </div>
          <div class="col-lg-6">

            <div class="section-title">
              <h2><span> Order Now</span></h2>
<!--              <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>-->
            </div>

            <form action="{{ route('delivery') }}" method="post" class="php">
                @csrf
              <div class="row">
                <div class="col-lg-4 col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                  <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
                  <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
                  <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                  <div class="validate"></div>
                </div>

                <div class="col-lg-4 col-md-6 form-group mt-3">
                  <input type="text" class="form-control" name="order" id="order" placeholder="write you order" data-rule="minlen:1" data-msg="Please enter at least 1 chars">
                  <div class="validate"></div>
                </div>
                  <div class="col-lg-4 col-md-6 form-group mt-3">
                      <input type="number" class="form-control" name="quantity" id="quantity" placeholder="# of quantity" data-rule="minlen:1" data-msg="Please enter at least 1 chars">
                      <div class="validate"></div>
                  </div>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="description" rows="5" placeholder="Details of your Order"></textarea>
                <div class="validate"></div>
              </div>
              <div class="text-center"><button type="submit">Send Order</button></div>
            </form>
          </div>
        </div>
      </div>
    </section><!-- End Book A Table Section -->
</main>

@endsection
