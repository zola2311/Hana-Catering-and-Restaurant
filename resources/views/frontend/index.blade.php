@extends('frontend.body.links')
@section('main')

    @section('title')
        Kagnew | Home
    @endsection

    @php
        $route = Route::current()->getName();
    @endphp
    @section('title', 'Kagnew FC - Latest News and Results')

    @section('description', 'Stay updated with the latest news and results from Kagnew FC. Join us to experience thrilling matches and exciting events.')

    @section('keywords', 'Kagnew FC, Latest News, Latest Results, Football Club, National Cup, Become a Member')

    <section id="hero">
        <div class="hero-container">
            <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
                <div class="carousel-inner" role="listbox">
                    <!-- Slide 1 -->
                    <div class="carousel-item active" style="background-image: url({{ asset('frontend/assets/img/slide/1.jpg') }});">
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <br><br><br>
                                <h2 class="animate__animated animate__fadeInDown">Join us</h2>
                                <p class="animate__animated animate__fadeInUp">Join our community as a valued member! Elevate your experience and be part of something special - become a member today!</p>
                                <div>
                                    <a href="{{ route('register') }}" class="btn-menu animate__animated animate__fadeInUp scrollto">Become a member</a>
                                </div>
                            </div>

                        </div>
                    </div>



                    <!-- Slide 2 -->
                    <div class="carousel-item" style="background-image: url({{ asset('frontend/assets/img/slide/2.jpg') }});">
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <br><br><br>
                                <h2 class="animate__animated animate__fadeInDown">Latest </h2>
                                <h6 class="animate__animated animate__fadeInUp">Higher Division Competition</h6>
                                <h5 class="animate__animated animate__fadeInUp">Kagnew Vs Ferensay</h5>

                            </div>
                        </div>
                    </div>

                    <!-- Slide 3 -->
                    <div class="carousel-item" style="background-image: url({{ asset('frontend/assets/img/slide/3.jpg') }});">
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <br><br><br>
                                <h2 class="animate__animated animate__fadeInDown">Order Now</h2>
                                <p class="animate__animated animate__fadeInUp">Elivate your Style with kagnew goods order now accessorize effortlessly </p>
                                <div>
                                    <a href="{{ route('register') }}" class="btn-menu animate__animated animate__fadeInUp scrollto">Order now</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
                </a>
                <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
                </a>
            </div>
        </div>
    </section>

    <main id="main">


        <section id="recent-blog-posts" class="recent-blog-posts">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Latest Stories</h2>
                    <p>Explore the top stories from our blog</p>
                </div>
                <div class="row">
                    @foreach($story as $item)
                            <?php $id = $item->id ?>
                        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                            <div class="post-box">
                                <a href="{{route('story_detail',$item->id)}}">
                                    <div class="post-img">
                                        <img src="{{$item->image}}" class="img-fluid" alt="{{ $item->name }} Image">
                                    </div>
                                </a>
                                <div class="meta">
                                    <span class="post-date">{{ date('M d, Y', strtotime($item->created_at)) }}</span>
                                    <span class="post-author"> / Admin</span>
                                </div>
                                <a href="{{route('story_detail',$item->id)}}">
                                    <h3 class="post-title">{{ $item->name }}</h3>
                                </a>
                                <p style="text-align: justify">{{substr(strip_tags($item->story),0,72)}} . . .</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>


        <section id="specials" class="specials">
            <div class="container">
                <div class="section-title">
                    <h2>Check our <span></span></h2>
                    <p>Results Fixtures & League table</p>
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <ul class="nav nav-tabs flex-column">
                            <li class="nav-item">
                                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">League Table</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Latest Results</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Upcoming Fixtures</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-9 mt-4 mt-lg-0">
                        <div class="tab-content">
                            <div class="tab-pane active show" id="tab-1">
                                <!-- ======= Table section ======= -->
                                <div class="row">
                                    <div class="col-lg-12 details order-2 order-lg-1">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                <tr class="table-active">
                                                    <th scope="col"></th>
                                                    <th scope="col"></th>
                                                    <th scope="col">name</th>
                                                    <th scope="col">Played</th>
                                                    <th scope="col">Won</th>
                                                    <th scope="col">Drawn</th>
                                                    <th scope="col">Lost</th>
                                                    <th scope="col">GD</th>
                                                    <th scope="col">Points</th>
                                                </tr>
                                                </thead>
                                                <tbody>

                                                @forelse($teams as $team)
                                                    <tr data-entry-id="{{ $team->id }}">
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>
                                                            @if ($team->logo)
                                                                <img src="{{ $team->logo }}" alt="{{ $team->name }}" width="50" height="50">
                                                            @else
                                                                <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
                                                            @endif
                                                        </td>
                                                        <td>{{ $team->name }}</td>
                                                        <td>{{ $team->games }}</td>
                                                        <td>{{ $team->won }}</td>
                                                        <td>{{ $team->tied }}</td>
                                                        <td>{{ $team->lost }}</td>
                                                        <td>{{ $team->goal_difference }}</td> <!-- Display goal difference -->
                                                        <td>{{ $team->points }}</td>

                                                    </tr>
                                                @empty
                                                    <tr>
                                                        <td colspan="12" class="text-center">{{ __('Data Empty') }}</td>
                                                    </tr>
                                                @endforelse

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- End of table Section -->
                            </div>

                            <div class="tab-pane" id="tab-2">
                                <!-- Matches Section -->
                                <div class="row">
                                    <div class="col-lg-10 details order-2 order-lg-1">
                                        @foreach($results->take(5) as $result)
                                            <div class="main-lates-matches">
                                                <a href="#" class="item">
                                                    <span class="championship">{{ $result->championship }}</span>
                                                    <span class="teams-wrap">
                                            <span class="team">
                                                <span>
                                                    @if ($result->team1->logo)
                                                        <img src="{{ $result->team1->logo }}" alt="{{ $result->team1->name }}" width="30" height="30">
                                                    @endif
                                                </span>
                                                <span>{{ $result->team1->name }}</span>
                                            </span>
                                            <span class="score">
                                                <span>{{ $result->result1 }}:{{ $result->result2 }}</span>
                                            </span>
                                            <span class="team1">
                                                <span>{{ $result->team2->name }}</span>
                                                <span>
                                                    @if ($result->team2->logo)
                                                        <img src="{{ $result->team2->logo }}" alt="{{ $result->team2->name }}" width="30" height="30">
                                                    @endif
                                                </span>
                                            </span>
                                        </span>
                                                    <span class="game-result">{{ $result->start_time }}</span>
                                                </a>
                                                <!-- Add more matches as needed -->
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <!-- End of Matches Section -->
                            </div>

                            <div class="tab-pane" id="tab-3">
                                <!-- Fixtures Section -->
                                <div class="row">
                                    <div class="col-lg-10 details order-2 order-lg-1">
                                        @foreach($fixture as $game )
                                            <div class="main-lates-matches">
                                                <a href="#" class="item">
                                                    <span class="championship">{{ $game->championship }}</span>
                                                    <span class="teams-wrap">
                                            <span class="team">
                                                <span>{{ $game->team1->name }}</span>
                                                <span>
                                                    @if ($game->team1->logo)
                                                        <img src="{{ $game->team1->logo }}" alt="{{ $game->team1->name }}" width="30" height="30">
                                                    @endif
                                                </span>
                                            </span>
                                            <span class="score">
                                                <span>Vs</span>
                                            </span>
                                            <span class="team1">
                                                <span>
                                                    @if ($game->team2->logo)
                                                        <img src="{{ $game->team2->logo }}" alt="{{ $game->team2->name }}" width="30" height="30">
                                                    @endif
                                                </span>
                                                <span>{{ $game->team2->name }}</span>
                                            </span>
                                        </span>
                                                    <span class="game-result">{{ $game->start_time }}</span>
                                                </a>
                                                <!-- Add more fixtures as needed -->
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <!-- End of Fixtures Section -->
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>




        <section id="events" class="events">

                <div class="container">
                    <div class="section-title">
                        <h2>New in Store</h2>
                        <p>Explore the Latest Arrivals</p>
                    </div>
                </div>

            <div class="container">
                <div class="events-slider swiper">
                    <div class="swiper-wrapper">

                        @foreach ($products as $item)

                            <div class="swiper-slide">
                                <div class="row event-item">
                                    <div class="col-lg-6">
                                        <a href="{{ route('membership_and_shop') }}#shop">
                                            <img src="{{ asset( $item->image_1 ) }}" class="img-fluid" alt="T-shirts">
                                        </a>
                                    </div>
                                    <div class="col-lg-6 pt-4 pt-lg-0 content">
                                        <a href="{{ route('membership_and_shop') }}#shop">
                                            <h3>{{ $item->name }}</h3>
                                        </a>
                                        <div class="price">
                                            <p><span>{{ $item->price }}</span></p>
                                        </div>
                                        <p class="fst-italic">
                                            {{$item->description}}
                                        </p>
                                        <ul>
                                            <li><i class="bi bi-check-circle"></i> With color varieties</li>
                                            <li><i class="bi bi-check-circle"></i> {{ $item->size }}</li>
                                            <li><i class="bi bi-check-circle"></i>  Discount for members</li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!-- End Event Slide 1 -->
                        @endforeach


                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>



    </main>

@guest()
        <div class="notification-container" id="notification-container">
            <button class="close-x" id="close-btn" onclick="closeNotification()"><img src="{{asset('frontend/assets/img/notification/x.png')}}" alt="close" height="15px" width="15px"></button>
            <div id="notification-content">
                <div id="notification-image-container">
                    <img src="{{asset('frontend/assets/img/notification/kagnew.png')}}" alt="Notification Image" id="notification-image">
                </div>
                <div id="notification-text">
                    <p id="notification-message"></p>
                    <p id="notification-paragraph">Click register to be a member</p>
                    <div id="notification-buttons">
                        <button onclick="closeNotification()">Later</button>
                        <button onclick="handleRegister()">Register</button>
                    </div>
                </div>
            </div>
        </div>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <script type="text/javascript">

        $(document).ready(function(){
            // Delay in milliseconds (300,000 milliseconds = 5 minutes)
            var delay = 9000;

            // Hide the notification initially

            $('#notification-container').hide();

            // Show notification after the specified delay
            setTimeout(function() {
                $('#notification-container').fadeIn(600);
            }, delay);

            // Set up click event handlers
            $('#notification-container').on('click', function() {
                $(this).fadeOut(800);
            });

            $(".close-x").on('click', function() {
                $("#notification-container").fadeOut(800);
            });
        });

        function onDOMContentLoaded() {
            window.onload = $('#notification-container').hide();
        }

        // Attach the function to the DOMContentLoaded event
        document.addEventListener('DOMContentLoaded', onDOMContentLoaded);


        function showNotification(message) {
            const notificationContainer = document.getElementById('notification-container');
            const notificationMessage = document.getElementById('notification-message');

            notificationMessage.textContent = message;
            notificationContainer.style.display = 'block';
        }
        window.onload = function() {
            const hiddenContent = document.getElementById("notification-container");
            hiddenContent.style.display = "block"; // Show the hidden content
        };

        function closeNotification() {
            const notificationContainer = document.getElementById('notification-container');
            notificationContainer.style.display = 'none';
        }

        function handleRegister(){
            location.href = '{{route('register')}}';
        }

        // Example usage
        showNotification('You can register for more club information.');

        function isDesktop() {
            return window.innerWidth >= 768;
        }
    </script>

@else
@endguest
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

@endsection

