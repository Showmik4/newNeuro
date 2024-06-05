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
<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs">
    <div class="page-header d-flex align-items-center"
        style="background-image: url('{{ url('/'. $setting->case_study_image) }}')" ;>
        <div class=" container position-relative">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-6 text-center">
                    <h2>Case Study</h2>
                    <p>{{@$setting->case_study_banner_large_text}}</p>
                </div>
            </div>
        </div>
    </div>
    <nav>
        <div class="container">
            <ol>
                <li><a href="index.html">Home</a></li>
                <li>Case Study</li>
            </ol>
        </div>
    </nav>
</div><!-- End Breadcrumbs -->

<main id="main">

    <!-- ======= Services Section ======= -->
    <section id="service" class="services pt-0">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <span>Case Study</span>
                <h2>Case Study</h2>
            </div>
            <div class="row gy-4">
                @foreach ($caseStudy as $item)
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="card">
                        <div class="card-img">
                            <img src="{{ url('/'. @$item->image) }}" alt="" class="img-fluid">
                        </div>
                        <h3><a href="service-details.html" class="stretched-link">{{$item->title}}</a></h3>
                        <p>{{$item->description}}</p>
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