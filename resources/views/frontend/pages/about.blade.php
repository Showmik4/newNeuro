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
            style="background-image: url('{{ asset('public/frontend/assets/img/page-header.jpg') }}')" ;>
            <div class=" container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h2>About</h2>
                        <p>Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas
                            consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione
                            sint. Sit quaerat ipsum dolorem.</p>
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

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="card">
                        <div class="card-img">
                            <img src="{{ asset('public/frontend/assets/img/storage-service.jpg')}}" alt=""
                                class="img-fluid">
                        </div>
                        <h3><a href="service-details.html" class="stretched-link">Storage</a></h3>
                        <p>Cumque eos in qui numquam. Aut aspernatur perferendis sed atque quia voluptas quisquam
                            repellendus temporibus itaqueofficiis odit</p>
                    </div>
                </div><!-- End Card Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="card">
                        <div class="card-img">
                            <img src="{{ asset('public/frontend/assets/img/logistics-service.jpg')}}" alt=""
                                class="img-fluid">
                        </div>
                        <h3><a href="service-details.html" class="stretched-link">Logistics</a></h3>
                        <p>Asperiores provident dolor accusamus pariatur dolore nam id audantium ut et iure incidunt
                            molestiae dolor ipsam ducimus occaecati nisi</p>
                    </div>
                </div><!-- End Card Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="card">
                        <div class="card-img">
                            <img src="{{ asset('public/frontend/assets/img/cargo-service.jpg')}}" alt=""
                                class="img-fluid">
                        </div>
                        <h3><a href="service-details.html" class="stretched-link">Cargo</a></h3>
                        <p>Dicta quam similique quia architecto eos nisi aut ratione aut ipsum reiciendis sit doloremque
                            oluptatem aut et molestiae ut et nihil</p>
                    </div>
                </div><!-- End Card Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="card">
                        <div class="card-img">
                            <img src="{{ asset('public/frontend/assets/img/trucking-service.jpg')}}" alt=""
                                class="img-fluid">
                        </div>
                        <h3><a href="service-details.html" class="stretched-link">Trucking</a></h3>
                        <p>Dicta quam similique quia architecto eos nisi aut ratione aut ipsum reiciendis sit doloremque
                            oluptatem aut et molestiae ut et nihil</p>
                    </div>
                </div><!-- End Card Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="card">
                        <div class="card-img">
                            <img src="{{ asset('public/frontend/assets/img/packaging-service.jpg')}}" alt=""
                                class="img-fluid">
                        </div>
                        <h3><a href="service-details.html" class="stretched-link">Packaging</a></h3>
                        <p>Illo consequuntur quisquam delectus praesentium modi dignissimos facere vel cum onsequuntur
                            maiores beatae consequatur magni voluptates</p>
                    </div>
                </div><!-- End Card Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                    <div class="card">
                        <div class="card-img">
                            <img src="{{ asset('public/frontend/assets/img/warehousing-service.jpg')}}" alt=""
                                class="img-fluid">
                        </div>
                        <h3><a href="service-details.html" class="stretched-link">Warehousing</a></h3>
                        <p>Quas assumenda non occaecati molestiae. In aut earum sed natus eatae in vero. Ab modi
                            quisquam aut nostrum unde et qui est non quo nulla</p>
                    </div>
                </div><!-- End Card Item -->

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
                            <p>
                                Magni qui quod omnis unde et eos fuga et exercitationem. Odio veritatis perspiciatis
                                quaerat qui aut aut aut
                            </p>
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