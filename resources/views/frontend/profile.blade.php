@extends('frontend.body.links')
@section('main')

    @section('title')
        Kagnew | Profile
    @endsection

    @php
        $route = Route::current()->getName();
    @endphp
    @section('title', 'Team - Kagnew Football Club')

    @section('description', 'Explore the profiles of players and coaches at Kagnew Football Club.')
<section id="profilehead" class="profilehead">
    <div class="container position-relative">
        <div class="profilehead-slider swiper" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">
            </div>
        </div>
    </div>
</section>

<section id="team" class="team">
    <div class="container">
        <div class="section-title">
            <h2>Profile </h2>
            <p> Players</p>
        </div>

        <div class="row">


            @foreach($players as $player)

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="{{ asset($player->photo3) }}" class="gallery-lightbox" >
                            <div class="member">
                                <img src="{{ asset($player->photo1) }}" class="img-fluid" alt="">
                                <!-- Second Image (Replica) -->
                                <div class="second-member">
                                    <img src="{{ asset($player->photo2) }}" class="second-img img-fluid" alt="">
                                    <div class="second-member-info">
                                        <span class="corner-number">01</span>
                                    </div>
                                </div>
                                <div class="member-info">
                                    <div class="member-info-content">
                                        <h4>{{$player->name}}</h4>
                                        <span>{{$player->position}}</span>
                                    </div>
                                    <span class="corner-number">{{$player->squad_no}}</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>



            @endforeach
            <div class="section-title">
                <h2>Profile </h2>
                <p> Coaches</p>
            </div>
                <div class="col-xl-4 col-lg-4 col-md-6" data-aos="fade-up">

                </div>
                <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up">
                    <div class="member">
                        <img src="{{ asset('frontend/assets/img/coaches/coach.jpg') }}" class="img-fluid" alt="Walter White - Chief Executive Officer">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4>Alemayehu Mekuriya</h4>
                                <span>Main Coach</span>
                            </div>
                        </div>
                    </div>
                </div><div class="col-xl-4 col-lg-4 col-md-6" data-aos="fade-up">

                </div>


            <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up">
                <div class="member">
                    <img src="{{ asset('frontend/assets/img/coaches/coach5.jpg') }}" class="img-fluid" alt="Walter White - Chief Executive Officer">
                    <div class="member-info">
                        <div class="member-info-content">
                            <h4>Tariku Tesfaye</h4>
                            <span>Goal Keeper Coach</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up">
                <div class="member">
                    <img src="{{ asset('frontend/assets/img/coaches/coach2.jpg') }}" class="img-fluid" alt="Walter White - Chief Executive Officer">
                    <div class="member-info">
                        <div class="member-info-content">
                            <h4>Matias Kebede</h4>
                            <span>Assistant Coach</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up">
                <div class="member">
                    <img src="{{ asset('frontend/assets/img/coaches/coach3.jpg') }}" class="img-fluid" alt="Walter White - Chief Executive Officer">
                    <div class="member-info">
                        <div class="member-info-content">
                            <h4>Solomon Chala</h4>
                            <span>Assistant</span>
                        </div>
                    </div>
                </div>
            </div>
                <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up">
                    <div class="member">
                        <img src="{{ asset('frontend/assets/img/coaches/coach4.jpg') }}" class="img-fluid" alt="Walter White - Chief Executive Officer">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4>Solomon Kebede</h4>
                                <span>Physiotherapist</span>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</section>

<section id="chefs" class="chefs">
    <div class="container">
        <div class="section-title">
            <h2>Profile</h2>
            <p>Management</p>

        </div>

        <div class="row">
            <div class="col-lg-3 col-md-6">
{{--                <div class="member">--}}
{{--                    <div class="pic"><img src="{{ asset('frontend/assets/img/chefs/Elias_Profile_Photo.webp') }}" class="img-fluid" alt="Walter White"></div>--}}
{{--                    <div class="member-info">--}}
{{--                        <h4>Walter White</h4>--}}
{{--                        <span>kjvhjfg</span>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="member">
                    <div class="pic"><img src="{{ asset('frontend/assets/img/chefs/John_Profile_Photo.webp') }}" class="img-fluid" alt="Sarah Jhonson"></div>
                    <div class="member-info">
                        <h4>John Hwang</h4>
                        <span>CEO</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="member">
                    <div class="pic"><img src="{{ asset('frontend/assets/img/chefs/Loius_2_Profile_Photo.webp') }}" class="img-fluid" alt="William Anderson"></div>
                    <div class="member-info">
                        <h4>Louis Jung</h4>
                        <span>President</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
{{--                <div class="member">--}}
{{--                    <div class="pic"><img src="{{ asset('frontend/assets/img/chefs/John_Profile_Photo.jpg') }}" class="img-fluid" alt="William Anderson"></div>--}}
{{--                    <div class="member-info">--}}
{{--                        <h4>William Anderson</h4>--}}
{{--                        <span>skkkk</span>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>
</section>

@endsection

