<!doctype html>
<html>
@include('frontend.layouts.partials.header')

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.png" alt=""> -->
                <h1>Neuroverse</h1>
            </a>

            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="{{route('index')}}">Home</a></li>
                    <li><a href="{{route('about')}}" class="active">About</a></li>

                    <li><a href="{{route('casestudy')}}">Case Study</a></li>
                    <li><a class="get-a-quote" href="{{route('contact')}}">Contact</a></li>
                </ul>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->
    <!-- End Header -->
    @yield('main.content')

    <!--====== footer start ======-->
    @include('frontend.layouts.partials.footer')
    <!--====== footer end ======-->
    {{-- @include('layouts.partials.cart') --}}
    <!-- JS here -->

    @include('frontend.layouts.partials.scripts')


</body>

</html>