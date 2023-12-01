<!-- ======= Footer ======= -->
<footer id="footer" class="footer">
    <div class="container footer-top">
        <div class="row gy-4">
            <div class="col-lg-5 col-md-12 footer-about">
                <a href="{{route('frontend.home')}}" class="logo d-flex align-items-center">
                    <span>{{$data['settings']->name}}</span>
                </a>
                <p>Contact <b>{{$data['settings']->name}}</b> to elevate your digital presence with five years of creative expertise spanning online photography, film, CGI, and more, tailored to amplify your business impact.</p>
                <div class="social-links d-flex mt-4">
                    <a href="{{$data['social_medias']->twitter}}"><i class="bi bi-twitter"></i></a>
                    <a href="{{$data['social_medias']->facebook}}"><i class="bi bi-facebook"></i></a>
                    <a href="{{$data['social_medias']->instagram}}"><i class="bi bi-instagram"></i></a>
                    <a href="{{$data['social_medias']->linked_in}}"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>
            <div class="col-lg-2 col-6 footer-links">
                <h4>Useful Links</h4>
                <ul>
                    <li><a href="{{route('frontend.home')}}#hero">Home</a></li>
                    <li><a href="{{route('frontend.home')}}#about">About us</a></li>
                    <li><a href="{{route('frontend.home')}}#services">Services</a></li>
                    <li><a href="{{route('frontend.home')}}#portfolio">Portfolio</a></li>
                    <li><a href="{{route('frontend.home')}}#team">Team</a></li>
                    <li><a href="{{route('frontend.home')}}#contact">Contact</a></li>
                </ul>
            </div>
            <div class="col-lg-2 col-6 footer-links">
                <h4>Our Services</h4>
                <ul>
                    <li><a href="#">Online Photography</a></li>
                    <li><a href="#">film</a></li>
                    <li><a href="#">CGI</a></li>
                    <li><a href="#">AR/VR</a></li>
                    <li><a href="#">Graphic Design</a></li>
                    <li><a href="#">Audio</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                <h4>Contact Us</h4>
                <p>{{$data['settings']->address}}</p>
                <p>Asia, Nepal</p>
                <p class="mt-4"><strong>Phone:</strong> <span>{{$data['settings']->phone}}</span></p>
                <p><strong>Email:</strong> <span>{{$data['settings']->email}}</span></p>
            </div>
        </div>
    </div>
    <div class="container copyright text-center mt-4">
        <p>&copy; <span>Copyright</span> <strong class="px-1">{{$data['settings']->name}}</strong> <span>All Rights Reserved</span></p>
    </div>
</footer><!-- End Footer -->
<!-- Scroll Top Button -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>
<!-- Preloader -->
<div id="preloader">
    <div></div>
    <div></div>
    <div></div>
    <div></div>
</div>
<!-- Vendor JS Files -->
<script src="{{asset('assets/frontend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/frontend/vendor/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{asset('assets/frontend/vendor/purecounter/purecounter_vanilla.js')}}"></script>
<script src="{{asset('assets/frontend/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('assets/frontend/vendor/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{asset('assets/frontend/vendor/aos/aos.js')}}"></script>
<script src="{{asset('assets/frontend/vendor/php-email-form/validate.js')}}"></script>
<!-- Template Main JS File -->
<script src="{{asset('assets/frontend/js/main.js')}}"></script>
</body>
</html>
