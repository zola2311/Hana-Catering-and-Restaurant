
@extends('frontend.body.links')
@section('main')

    @section('title')
        Kagnew | Gallery
    @endsection

    @php
        $route = Route::current()->getName();
    @endphp
    @section('title', 'Gallery gallery category - Kagnew')
    @section('meta_description', 'Explore our team\'s photos in the gallery.')
<section id="galleryhead" class="galleryhead">
    <div class="container position-relative">
        <div class="galleryhead-slider swiper" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">
            </div>
        </div>
    </div>
</section>
<main id="main">


    <section id="gallery" class="gallery">
        <div class="container-fluid">
                    <div class="section-title">
                        <h2>Some photos from <span>Our Team</span></h2>
                        <p>Gallery</p>
                    </div>
            <div class="row g-0">


                @foreach ($category->galleries as $gallery)
                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="{{ asset($gallery->images) }}" class="gallery-lightbox">
                            <img src="{{ asset($gallery->images) }}" alt="gallery images" class="img-fluid">
                        </a>
                    </div>
                </div>
                @endforeach


            </div>

        </div>
    </section>

</main>
@endsection
