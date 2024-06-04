@extends('frontend.layouts.main')
@section('title')
{{ 'Home' }}
@endsection
@section('header.css')
<style>

</style>
@endsection
@section('main.content')
<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex align-items-center">
    <div class="container">
        <div class="row gy-4 d-flex justify-content-between">
            <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                <h2 data-aos="fade-up">{{@$setting->home_banner_large_text}}</h2>
                <p data-aos="fade-up" data-aos-delay="100">{{@$setting->home_banner_small_text}}</p>

            </div>

            <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
                <img src="{{ asset('public/frontend/assets/img/hero-img.svg')}}" class="img-fluid mb-3 mb-lg-0" alt="">
            </div>

        </div>
    </div>
</section><!-- End Hero Section -->

<main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about pt-5">
        <div class="container" data-aos="fade-up">

            <div class="row gy-4 align-items-center features-item" data-aos="fade-up">
                <div class="col-md-5">
                    <img src="{{ url('/'.@$setting->homepage_our_mission_image) }}" class="img-fluid" alt="">
                </div>
                <div class="col-md-7">
                    <h3>{{@$setting->homepage_our_mission_large_text}}</h3>
                    <p class="fst-italic">
                        {{@$setting->homepage_our_mission_small_text}}
                    </p>

                </div>

            </div><!-- Features Item -->

        </div>
    </section><!-- End About Us Section -->

    <!-- ======= Services Section ======= -->
    <section id="service" class="services pt-0">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <span>Our Services</span>
                <h2>Our Services</h2>

            </div>

            <div class="row gy-4">
                @foreach ($work as $item)
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="card">
                        <div class="card-img">
                            <img src="{{ asset('public/frontend/assets/img/cargo-service.jpg')}}" alt=""
                                class="img-fluid">
                        </div>
                        <h3><a href="service-details.html" class="stretched-link">{{$item->title}}</a></h3>
                        <p>{{$item->description}}</p>
                    </div>
                </div><!-- End Card Item -->
                @endforeach
            </div>

        </div>
    </section><!-- End Services Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
        <div class="container">
            <div class="row gy-4 align-items-center features-item" data-aos="fade-up">
                <div class="col-md-5 order-1 order-md-2">
                    <img src="{{ url('/'.@$setting->homepage_our_vision_image)}}" class="img-fluid" alt="">
                </div>
                <div class="col-md-7 order-2 order-md-1">
                    <h3>{{@$setting->homepage_our_vision_small_text}}</h3>
                    <p class="fst-italic">
                        {{@$setting->homepage_our_vision_large_text}}
                    </p>
                </div>
            </div><!-- Features Item -->
        </div>
    </section><!-- End Features Section -->

    <!-- ======= Latest News Section ======= -->
    <section id="service" class="services pt-0">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <span>Latest News</span>
                <h2>Latest News</h2>

            </div>

            <div class="row gy-4">

                @foreach ($latestNews as $latest)
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="card">
                        <div class="card-img">
                            <img src="{{ url('/'. @$latest->image) }}" alt="" class="img-fluid">
                        </div>
                        <h3><a href="service-details.html" class="stretched-link">{{$latest->title}}</a></h3>
                        <p>{{$latest->description}}</p>
                    </div>
                </div><!-- End Card Item -->
                @endforeach
            </div>
        </div>
    </section><!-- End Services Section -->

</main><!-- End #main -->
@endsection
@section('footer.js')
@endsection