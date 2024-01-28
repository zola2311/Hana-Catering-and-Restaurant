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
            </div>


        </div>
    </section>

</main>

@endsection
