@extends('frontend.body.links')
@section('main')

    @section('title')
        Kagnew | About
    @endsection

    @php
        $route = Route::current()->getName();
    @endphp

    @section('title', 'History - Kagnew Football Club')

    @section('description', 'Explore the history of Kagnew Football Club, including significant events and achievements.')
<section id="abouthead" class="abouthead">
    <div class="container position-relative">
        <div class="abouthead-slider swiper" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">
            </div>
        </div>
    </div>
</section>


    <section id="details" class="details">
        <div class="container">



            <section id="why-us" class="why-us">


                <div class="container">

                    <div class="row">

                        <div class="col-lg-12 d-flex align-items-stretch">
                            <div class="icon-boxes d-flex flex-column justify-content-center">
                                <div class="row">
                                    <div class="col-xl-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                                        <div class="icon-box mt-4 mt-xl-0">
                                            <i class=""><img src="{{ asset('frontend/assets/img/Mission-01.png') }}" height="80" width="80" alt="Kagnew FC Image"></i>
                                            <h3>Mission </h3>

                                            <p>Kagnew Football Club's mission is to serve as an inspiration for football clubs in Ethiopia, prioritizing the growth of football nationwide through extensive community connections. We are committed to nurturing players by providing the essential care and support needed for their development, ensuring a holistic approach that not only strengthens the team but also contributes to the overall advancement of Ethiopian football.</p>

                                        </div>
                                    </div>
                                    <div class="col-xl-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
                                        <div class="icon-box mt-4 mt-xl-0">
                                            <i class=""><img src="{{ asset('frontend/assets/img/Vision-01.png') }}" height="80" width="80" alt="Kagnew FC Image"></i>
                                            <h3>Vision </h3>
                                            <p>Kagnew Football Club is dedicated to leading Ethiopia's football development, aspiring to elevate the nation's standing on the global football stage. We are committed to fostering excellence, unity, and community engagement, with a vision to install pride and competence in Ethiopian football internationally.</p>

                                        </div>
                                    </div>
                                    <div class="col-xl-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
                                        <div class="icon-box mt-4 mt-xl-0">
                                            <i class=""><img src="{{ asset('frontend/assets/img/Value-01.png') }}" height="80" width="80" alt="Kagnew FC Image"></i>
                                            <h3> Value</h3>
                                            <p><b>Community :</b> We're here to support and be a part of the society we connect with. We want to blend into the community, working together for shared progress and success.
                                                <br><b>Courage:</b> is about facing challenges head-on, taking bold risks on the field, and bouncing back stronger from setbacks.
                                                <br><b>Champion: </b>means more than winning titles, its setting the standard and inspiring others to reach for greatness.</p>

                                        </div>
                                    </div>
                                </div>
                            </div><!-- End .content-->
                        </div>
                    </div>

                </div>
            </section>

            <div class="row content">

                    <div class="container align-items-center ">

                        <div class=" cta-btn-container text-center">
                            <div class="center_title">
                                <p class="align-middle">Club Badge</p>
                            <h2>The visual heartbeat of our club's identity</h2>
                            </div>

                        </div>
                    </div>

                <div class="col-md-4" data-aos="fade-right">
                    <ul>
                    <li><i class="bi bi-check"></i>
                        Kagnew is the name Ras Makonnen's (Emperor Haile Selassie's father) war-horse. It is also the name of Battalions selected from the Ethiopian Imperial Bodyguard Division, that went to Korea during the Korean War.
                    </li>
                        <br><br>
                    <li><i class="bi bi-check"></i> Three Stars:
                            The three stars stand for the three core values Kagnew Football Club has; which are Community, Courage and Champion.
                    </li>
                    </ul>
                </div>
                <div class="col-md-4" data-aos="fade-right">
                    <br><br>
                    <img src="{{ asset('frontend/assets/img/45.png') }}" class="img-fluid" alt="Kagnew FC Club Badge">
                </div>
                <div class="col-md-4 pt-3" data-aos="fade-up">
                    <br><br>
                    <ul>
                        <li><i class="bi bi-check"></i> Symbolic Horse (KAGNEW):
                            Central to the emblem is the depiction of a horse, symbolizing Ras Makonnen's warhorse. This iconic representation serves as a tribute to the historical legacy and martial spirit that the club proudly embraces.</li>
                    </ul>

                </div>
            </div>

            <section id="specials" class="specials">
                <div class="container">
                    <div class="section-title">
                        <h2>History (Kagnew Battalion)</h2>
                        <p>History</p>
                    </div>
                    <div class="row content">
                        <div class="col-md-7" data-aos="fade-right">
                            <section id="portfolio-details" class="portfolio-details">
                                <div class="container">
                                    <div class="row gy-4">
                                        <div class="col-lg-12">
                                            <div class="portfolio-details-slider swiper">
                                                <div class="swiper-wrapper align-items-center">
                                                    <div class="swiper-slide">
                                                        <img src="{{ asset('frontend/assets/img/kagnew_battlon.jpg') }}" alt="kagnew battlon">
                                                    </div>
{{--                                                    <div class="swiper-slide">--}}
{{--                                                        <img src="{{ asset('frontend/assets/img/1.png') }}" alt="T-shirt Image 2">--}}
{{--                                                    </div>--}}
{{--                                                    <div class="swiper-slide">--}}
{{--                                                        <img src="{{ asset('frontend/assets/img/1.png') }}" alt="T-shirt Image 3">--}}
{{--                                                    </div>--}}
                                                </div>
                                                <div class="swiper-pagination"></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="col-md-5 pt-3" data-aos="fade-up">
                            <div class="title_up">
                                <h2>Establishment</h2>
                            </div>
                            <p>
                                The history of the Kagnew Battalions is a testament to bravery and resilience forged during the Korean War. Originating from the Ethiopian Imperial Bodyguard Division and named after Emperor Haile Selassie's father's warhorse, these troops played a pivotal role in the conflict. Notably, they emerged as the only UN troops that the Chinese or North Koreans couldn't capture alive. The Kagnew Battalions engaged in 238 battles without a single defeat, showcasing strategic brilliance and unwavering commitment to defending freedom. Beyond the battlefield, their legacy includes retrieving fallen comrades and establishing an orphanage for Korean children. Honors such as the US Presidential Unit Citation and an impressive night patrol record further underscore their indelible mark on military history.
                            </p>
                        </div>
                        <div class="col-md-7 order-1 order-md-2" data-aos="fade-left">
                            <section id="portfolio-details" class="portfolio-details">
                                <div class="container">
                                    <div class="row gy-4">
                                        <div class="col-lg-12">
                                            <div class="portfolio-details-slider swiper">
                                                <div class="swiper-wrapper align-items-center">
                                                    <div class="swiper-slide">
                                                        <img src="{{ asset('frontend/assets/img/kagnew_players.jpg') }}" alt="T-shirt Image 1">
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="{{ asset('frontend/assets/img/11.jpg') }}" alt="T-shirt Image 2">
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="{{ asset('frontend/assets/img/3333.jpg') }}" alt="T-shirt Image 3">
                                                    </div>
                                                </div>
                                                <div class="swiper-pagination"></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="col-md-5 pt-5" data-aos="fade-up">
                            <div class="title_up">
                                <h2>2023</h2>
                            </div>
                            <p>
                                In a modern context, Kagnew F.C., established in November 2022, embodies the spirit of courage and values championing. Beyond football victories, the club focuses on community engagement, excellence, and unity, instilling courage and a champion mindset in players. Recent success in the 2022/23 First Division, winning every game and securing The Addis Ababa Football Federation First Division Cup, highlights the club's commitment to shaping Ethiopian football's future while upholding its historical values. With a growing legacy, Kagnew F.C. stands as a beacon of inspiration for aspiring athletes and football enthusiasts alike, fostering a sense of pride and unity within the community.
                            </p>
                        </div>
                    </div>


                </div>
            </section>



        </div>
    </section>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var portfolioSwiper = new Swiper('.portfolio-details-slider', {
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
            });

            if (document.readyState === 'complete') {
                portfolioSwiper.update();
            } else {
                window.addEventListener('load', function () {
                    portfolioSwiper.update();
                });
            }
        });
    </script>

    <!-- Script for events-slider -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var eventsSwiper = new Swiper('.events-slider', {
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
            });

            if (document.readyState === 'complete') {
                eventsSwiper.update();
            } else {
                window.addEventListener('load', function () {
                    eventsSwiper.update();
                });
            }
        });
    </script>
    </section><!-- End Details Section -->

@endsection
