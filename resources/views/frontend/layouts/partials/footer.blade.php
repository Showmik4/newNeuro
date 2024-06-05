<!-- ======= Footer ======= -->
<footer id="footer" class="footer">

    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-5 col-md-12 footer-info">
                <a href="index.html" class="logo d-flex align-items-center">
                    <span>Logis</span>
                </a>
                <p>{!!@$setting->footer_text!!}</p>
                <div class="social-links d-flex mt-4">
                    <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                    <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>

            <div class="col-lg-2 col-6 footer-links">
                <h4>Useful Links</h4>
                <ul>
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li><a href="{{route('about')}}">About us</a></li>
                    <li><a href="{{route('casestudy')}}">Case Study</a></li>
                    <li><a href="{{route('contact')}}">Contact</a></li>
                </ul>
            </div>

            <div class="col-lg-2 col-6 footer-links">
                <h4>Our Services</h4>
                <ul>
                    <li><a href="#">Web Design</a></li>
                    <li><a href="#">Web Development</a></li>
                    <li><a href="#">Product Management</a></li>
                    <li><a href="#">Marketing</a></li>
                    <li><a href="#">Graphic Design</a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                <h4>Contact Us</h4>
                <p>
                    {{@$setting->address}} <br>
                    <strong>Phone:</strong>{{@$setting->phone}}<br>
                    <strong>Email:</strong>{{@$setting->email}}<br>
                </p>

            </div>

        </div>
    </div>

    <div class="container mt-4">
        <div class="copyright">
            &copy; Copyright <strong><span>Logis</span></strong>. All Rights Reserved
        </div>
        <div class="credits">

            Designed by <a href="">Neuroverse</a>
        </div>
    </div>

</footer><!-- End Footer -->
<!-- End Footer -->