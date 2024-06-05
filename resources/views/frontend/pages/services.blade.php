@extends('frontend.layouts.main')
@section('title')
{{ 'Home' }}
@endsection
@section('header.css')
<style>

</style>
@endsection
@section('main.content')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="page-header d-flex align-items-center"
            style="background-image: url('{{ url('/'. $setting->service_banner_image ) }}');">
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h2>Services</h2>
                        <p>{{@$setting->service_banner_text }}</p>
                    </div>
                </div>
            </div>
        </div>
        <nav>
            <div class="container">
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li>Services</li>
                </ol>
            </div>
        </nav>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Sevice Page Section ======= -->
    <section id="about" class="about pt-5">
        <div class="container" data-aos="fade-up">
            <div class="row gy-4 align-items-center features-item" data-aos="fade-up">
                @foreach ($service as $index => $services)
                <div class="col-md-5 order-md-{{ $index % 2 == 0 ? '1' : '2' }}">
                    <img src="{{ url('public/service/'.$services->image) }}" class="img-fluid" alt="">
                </div>
                <div class="col-md-7 order-md-{{ $index % 2 == 0 ? '2' : '1' }}">
                    <h3>{{ $services->title }}</h3>
                    <p class="fst-italic">
                        {{ $services->description }}
                    </p>
                </div>
                @endforeach
            </div><!-- Features Item -->
        </div>
    </section><!-- End About Us Section -->
</main><!-- End #main -->
@endsection
@section('footer.js')
@endsection