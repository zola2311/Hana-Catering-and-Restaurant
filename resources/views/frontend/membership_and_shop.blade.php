@extends('frontend.body.links')
@section('main')

    @section('title')
        Kagnew | Membership & Shop
    @endsection

    @php
        $route = Route::current()->getName();
    @endphp
    @section('title', 'Membership and Shop')
    @section('meta_description', 'Membership benefits and shop items')
<section id="shophead" class="shophead">
    <div class="container position-relative">
        <div class="shophead-slider swiper" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">
            </div>
        </div>
    </div>
</section>
<main id="main">
    <section id="why-us" class="why-us">
        <div class="container">
            <div class="section-title">
                <h2>Benefits of Joining Our Club</h2>
                <p>Explore the advantages of becoming a valued member</p>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="box">
                        <span>01</span>
                        <h4>Free Digital Goodies</h4>
                        <p>Enjoy a complimentary digital calendar, Kagnew-themed wallpaper, and an exclusive membership card to show your pride in Kagnew FC.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="box">
                        <span>02</span>
                        <h4>Exclusive Content</h4>
                        <p>Stay in the loop with insider news, captivating photos, and thrilling videos available only to Kagnew FC members, giving you a unique perspective on the club.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="box">
                        <span>03</span>
                        <h4>Discounts on Merchandise</h4>
                        <p>Benefit from special discounts when purchasing items associated with Kagnew FC, allowing you to showcase your support in style at a more affordable price.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="box">
                        <span>04</span>
                        <h4>Membership Bonus</h4>
                        <p>Be among the elite members of the club and receive an exclusive free gift as a token of appreciation for your commitment to Kagnew FC.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="box">
                        <span>05</span>
                        <h4>Community Engagement</h4>
                        <p>Immerse yourself in the Kagnew FC community by participating in the year-end meeting and having a say in crucial decisions that shape the club's future.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="box">
                        <span>06</span>
                        <h4>Access to Training</h4>
                        <p>Get an insider's view by accessing exclusive content showcasing Kagnew FC training sessions, providing a behind-the-scenes look at the team's preparation for success.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <div class="cta-container text-center">
                        <div class="become-member">
                            <p class="membership-text">Become a Member</p>
                            <h2>Get closer to Kagnew FC: Discount offers, updates & much more.</h2>
                        </div>
                        <div class="row justify-content-center gy-6">
                            <div class="col-lg-9 text-center">
                                <a class="btn btn btn btn-orange" href="{{ route('register') }}" target="_blank" rel="noopener noreferrer">Register Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2"></div>
            </div>
        </div>
    </section>



    <section id="shop" class="courses">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Products</h2>
                <p>Popular Products</p>
            </div>

            <div class="row" data-aos="zoom-in" data-aos-delay="100">
                @foreach ($products as $item)
                <article class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" itemscope itemtype="http://schema.org/Product">
                    <div class="course-item">
                        <div class="image-container">
                            <img src="{{ $item->image_1 }}" class="img-fluid first-image" alt="First image" itemprop="image">
                            <img src="{{ $item->image_2 }}" class="img-fluid second-image" alt="Second Image">
                        </div>
                        <div class="course-content">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                             <div class="col-6">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#verticalycentered">Order Now</button>
                                <div class="modal fade" id="verticalycentered" tabindex="-1">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title"><i class="bi bi-info-circle"></i> Information</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <b>Total Price =1000 <span id="Qty"></span></b><br>Location Gerji Korea Hospital Compound
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary Centered" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                                <p class="price">
                                    <span itemprop="price">{{ $item->price }}</span> <span itemprop="priceCurrency">Birr</span>
                                </p>
                            </div>

                            <h3><a href="{{ route('checkout',$item->id) }}" itemprop="url">{{ $item->name }}</a></h3>
                            <p itemprop="description">{{ $item->description }}</p>
                            <div class="trainer d-flex justify-content-between align-items-center">
                                <div class="trainer-profile d-flex align-items-center">
                                    <div class="row mb-3">
                                        @if($item->color_1)
                                            <div class="col-3">
                                                <label for="inputColor" class="col-sm-2 col-form-label">Colors</label>
                                            </div>
                                            <div class="col-3">
                                                <input disabled type="color" class="form-control form-control-color" id="exampleColorInput1" value="{{$item->color_1}}">
                                            </div>
                                        @endif

                                        @if($item->color_2)
                                            <div class="col-3">
                                                <input disabled type="color" class="form-control form-control-color" id="exampleColorInput2" value="{{$item->color_2}}">
                                            </div>
                                        @endif

                                        @if($item->color_3)
                                            <div class="col-3">
                                                <input disabled type="color" class="form-control form-control-color" id="exampleColorInput3" value="{{$item->color_3}}">
                                            </div>
                                        @endif
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </article>
                @endforeach


            </div>
        </div>
    </section>


</main>


@endsection
