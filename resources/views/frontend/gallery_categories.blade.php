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
    <section id="gallerycategoryhead" class="gallerycategoryhead">
    <div class="container position-relative">
        <div class="gallerycategoryhead-slider swiper" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">
            </div>
        </div>
    </div>
</section>
<main id="main">
    <section id="recent-blog-posts" class="recent-blog-posts">
        <div class="container" data-aos="fade-up">
            <div class="cta-container text-center">
                <div class="become-member">
                    <p class="membership-text">GALLERY</p>
                    <h2>SOME PHOTOS FROM OUR TEAM</h2>
                </div>
            </div>

            <div class="row">
                @foreach ($categories as $category)
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="post-box">
                            <div class="post-img">
                                <a href="{{ route('gallery_cat', ['category_id' => $category->id]) }}">
                                    <img src="{{ $category->category_image }}" class="img-fluid" alt="{{ $category->name }}">
                                </a>
                            </div>
                            <div class="meta">
                                <span class="post-date">{{ $category->created_at->format('F j, Y') }}</span>
                            </div>
                            <a class="post-title" href="{{ route('gallery_cat', ['category_id' => $category->id]) }}">
                                <h3 class="post-title">{{ $category->name }}</h3>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>

</main>

@endsection
