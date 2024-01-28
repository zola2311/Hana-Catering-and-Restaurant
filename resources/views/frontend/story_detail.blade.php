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

    <!-- ======= Blog Single Section ======= -->
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">

            <div class="row">

                <div class="col-lg-12 entries">

                    <article class="entry entry-single">

                        <div class="entry-img">
                            <img src="{{asset($story->image)}}" alt="Story Image" class="img-fluid">
                        </div>

                        <h2 class="entry-title">
                            <a href="">{{$story->name}}</a>
                        </h2>

                        <div class="entry-meta">
                            <ul>
                                <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="#">Admin</a></li>
                                <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="#">{{$story->created_at}}<time datetime="2020-01-01"></time></a></li>
                            </ul>
                        </div>

                        <div class="entry-content">
                            <p style="text-align: justify">
                                {{strip_tags($story->story)}}
                            </p>
                        </div>

                        <div class="entry-footer">
                            <i class="bi bi-folder"></i>
                            <ul class="cats">
                                <li><a href="#">Sport</a></li>
                            </ul>

                            <i class="bi bi-tags"></i>
                            <ul class="tags">
                                <li><a href="#">Kagnew</a></li>
                                <li><a href="#">Football</a></li>
                                <li><a href="#">Club</a></li>
                            </ul>
                        </div>

                    </article><!-- End blog entry -->

                </div><!-- End blog entries list -->

                {{--<div class="col-lg-4">

                    <div class="sidebar">

                        <h3 class="sidebar-title">Search</h3>
                        <div class="sidebar-item search-form">
                            <form action="">
                                <input type="text">
                                <button type="submit"><i class="bi bi-search"></i></button>
                            </form>
                        </div><!-- End sidebar search formn-->

                        <h3 class="sidebar-title">Categories</h3>
                        <div class="sidebar-item categories">
                            <ul>
                                <li><a href="#">General <span>(25)</span></a></li>
                                <li><a href="#">Lifestyle <span>(12)</span></a></li>
                                <li><a href="#">Travel <span>(5)</span></a></li>
                                <li><a href="#">Design <span>(22)</span></a></li>
                                <li><a href="#">Creative <span>(8)</span></a></li>
                                <li><a href="#">Educaion <span>(14)</span></a></li>
                            </ul>
                        </div><!-- End sidebar categories-->

                    </div><!-- End sidebar -->

                </div><!-- End blog sidebar -->--}}

            </div>

        </div>
    </section><!-- End Blog Single Section -->
@endsection

