@extends('frontend.body.links')
@section('main')

    @section('title')
        Kagnew | Gallery
    @endsection

    @php
        $route = Route::current()->getName();
    @endphp



<main id="main">

    <section id="contacthead" class="contacthead">
        <div class="container position-relative">
            <div class="contacthead-slider swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">
                </div>
            </div>
        </div>
    </section>


    <main id="main">

        <section id="portfolio-details" class="portfolio-details">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-8">
                        <div class="portfolio-details-slider swiper">
                            <div class="swiper-wrapper align-items-center">
                                <div class="swiper-slide">
                                    <img src="{{asset($product->image_1)}}" alt="T-shirt Image 1">
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{asset($product->image_2)}}" alt="T-shirt Image 2">
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{asset($product->image_3)}}" alt="T-shirt Image 3">
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <form>
                            <div class="portfolio-info">
                                <h1>{{$product->name}}</h1>
                                <h2>{{$product->price}}</h2>
                                <p>
                                    {{$product->description}}
                                </p>

                                <div class="row mb-3">
                                    <div class="col-3">
                                        <label for="inputQuantity" class="col-sm-2 col-form-label">Qty</label>
                                    </div>
                                    <div class="col-4">
                                        <input type="number" class="form-control" id="inputQuantity" aria-label="Quantity">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    @if($product->color_1)
                                        <div class="col-3">
                                            <label for="inputColor" class="col-sm-2 col-form-label">Available Colors</label>
                                        </div>
                                        <div class="col-3">
                                            <input disabled type="color" class="form-control form-control-color" id="exampleColorInput1" value="{{$product->color_1}}">
                                        </div>
                                    @endif

                                    @if($product->color_2)
                                        <div class="col-3">
                                            <input disabled type="color" class="form-control form-control-color" id="exampleColorInput2" value="{{$product->color_2}}">
                                        </div>
                                    @endif

                                    @if($product->color_3)
                                        <div class="col-3">
                                            <input disabled type="color" class="form-control form-control-color" id="exampleColorInput3" value="{{$product->color_3}}">
                                        </div>
                                    @endif
                                </div>

{{--                                    <div class="col-3">--}}
{{--                                        <label for="inputSize" class="col-sm-2 col-form-label">Available Size</label>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-4">--}}
{{--                                        <select class="form-select" id="inputSize" aria-label="Select Size">--}}
{{--                                            <option selected>Xl</option>--}}
{{--                                            <option value="1">XXL</option>--}}
{{--                                            <option value="2">Sm</option>--}}
{{--                                            <option value="3">xxl</option>--}}
{{--                                        </select>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

                                <div class="row mb-3">
                                    <div class="col-3">
                                        <h3>Total</h3>
                                    </div>
                                    <div class="col-3">
                                        <h3>450</h3>
                                    </div>
{{--                                    <div class="col-6">--}}
{{--                                        <button type="submit" class="btn btn-primary">Confirm Order</button>--}}
{{--                                    </div>--}}
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>




    </main>


@endsection
