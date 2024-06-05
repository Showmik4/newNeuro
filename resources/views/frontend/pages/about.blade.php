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
            style="background-image: url('{{ url('/'. $setting->about_banner_image) }}')" ;>
            <div class=" container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h2>About</h2>
                        <p>{{@$setting->about_banner_text}}</p>
                    </div>
                </div>
            </div>
        </div>
        <nav>
            <div class="container">
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li>About</li>
                </ol>
            </div>
        </nav>
    </div><!-- End Breadcrumbs -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about pt-5">
        <div class="container" data-aos="fade-up">

            <div class="row gy-4 align-items-center features-item" data-aos="fade-up">
                <div class="col-md-5">
                    <img src="{{ asset('public/frontend/assets/img/features-4.jpg')}}" class="img-fluid" alt="">
                </div>
                <div class="col-md-7">
                    <h3>{{@$setting->home_banner_large_text}}</h3>
                    <p class="fst-italic">
                        {{@$setting->home_banner_small_text}}
                    </p>
                    {{-- <p>
                        Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                        in voluptate
                        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in
                        culpa qui officia deserunt mollit anim id est laborum
                    </p> --}}
                </div>

            </div><!-- Features Item -->

        </div>
    </section><!-- End About Us Section -->

    <!-- ======= Latest News Section ======= -->
    <section id="service" class="services pt-0">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <span>Our Goals</span>
                <h2>Our Goals</h2>

            </div>

            <div class="row gy-4">

                @foreach ($ourGoals as $ourGoal)
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="card">
                        <div class="card-img">
                            <img src="{{ url('/'. @$ourGoal->image) }}" alt="" class="img-fluid">
                        </div>
                        <h3><a href="service-details.html" class="stretched-link">{{$ourGoal->title}}</a></h3>
                        <p>{{$ourGoal->description}}</p>
                    </div>
                </div><!-- End Card Item -->
                @endforeach
            </div>

        </div>
    </section><!-- End Services Section -->

    <!-- ======= Our Team Section ======= -->
    <section id="team" class="team pt-0">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <span>Our Team</span>
                <h2>Our Team</h2>

            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="100">

                @foreach ($team as $teams)
                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="member">
                        <img src="{{ url('/'. @$teams->image) }}" class="img-fluid" alt="">
                        <div class="member-content">
                            <h4>{{$teams->name}}</h4>
                            <span>{{$teams->designation}}</span>
                            {{-- <p>
                                Magni qui quod omnis unde et eos fuga et exercitationem. Odio veritatis perspiciatis
                                quaerat qui aut aut aut
                            </p> --}}
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!-- End Team Member -->
                @endforeach
            </div>

        </div>
    </section><!-- End Our Team Section -->

    <!-- ======= Latest News Section ======= -->
    <section id="service" class="services pt-0">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <span>Latest News</span>
                <h2>Latest News</h2>

            </div>
            <div class="row gy-4">
                @foreach ($latestAllNews as $item)
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
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