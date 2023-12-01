@include('frontend.includes.header')
<main id="main">
    <!-- Hero Section - Home Page -->
    <section id="hero" class="hero">
        <img src="{{asset('assets/frontend/img/hero-bg.jpg')}}" alt="" data-aos="fade-in">
        <div class="container">
            <div class="row">
                <center>
                <div class="col-lg-10">
                    <h2 data-aos="fade-up" data-aos-delay="100">Welcome to  {{$data['settings']->name}}</h2>
                    <p data-aos="fade-up" data-aos-delay="200">We are team of talented photographer making videos, film with pure creativity. </p>
                </div>
                </center>
            </div>
        </div>
    </section>
    <!-- End Hero Section -->
    <!-- About Section - Home Page -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row align-items-xl-center gy-5">
                <div class="col-xl-5 content">
                    <h3>About Us</h3>
                    <h2>Unleash Your Imagination with Our Creative Mastery: Crafting the Future of Digital Experiences</h2>
                    <p>Your Trusted Collaborator for Exceptional Content Production and Innovative Digital Solutions</p>
                    <p>Embark on a journey into boundless creativity! With a legacy of over 5 years of mastery, we stand at the forefront of online photography, film, CGI, AR/VR, design, audio, and beyond. Welcome to the future of digital experiences, where our expert insights blend seamlessly with business intelligence, shaping content that uniquely amplifies your business impact. Join us in redefining digital horizons.</p>
                    <a href="#" class="read-more"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
                </div>
                <div class="col-xl-7">
                    <div class="row gy-4 icon-boxes">
                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                            <div class="icon-box">
                                <i class="bi bi-buildings"></i>
                                <h3> Our Mesmerizing Online Photography</h3>
                                <p>Get ready to be enchanted! Our online photography is a symphony of creativity that paints stories with light and shadows. With every click, we immortalize fleeting moments, transforming them into everlasting memories.</p>
                            </div>
                        </div> <!-- End Icon Box -->
                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                            <div class="icon-box">
                                <i class="bi bi-clipboard-pulse"></i>
                                <h3>Redefining Storytelling through Our Captivating Films</h3>
                                <p>Prepare to be transported into a world of visual wonder! Our films are more than just sequences of scenes – they are journeys that ignite the senses and stir the soul. With each frame meticulously crafted, we bring stories to life with a cinematic prowess that leaves a lasting imprint.</p>
                            </div>
                        </div> <!-- End Icon Box -->
                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                            <div class="icon-box">
                                <i class="bi bi-command"></i>
                                <h3>Crafting Awe-Inspiring CGI Experiences</h3>
                                <p>Get ready to witness the extraordinary! Our CGI ventures take creativity to a whole new dimension, where imagination and technology converge to create stunning visual marvels. We meticulously sculpt each detail, infusing realism and magic into every pixel.</p>
                            </div>
                        </div> <!-- End Icon Box -->
                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
                            <div class="icon-box">
                                <i class="bi bi-graph-up-arrow"></i>
                                <h3>Where Vision and Innovation Collide</h3>
                                <p>Our design expertise is a symphony of innovation, weaving together colors, shapes, and concepts to create visual masterpieces. We blend aesthetics with functionality, ensuring that every design element serves a purpose. </p>
                            </div>
                        </div> <!-- End Icon Box -->
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End About Section -->
    <!-- Stats Section - Home Page -->
    <!-- Clients Section - Home Page -->
    <section id="clients" class="clients">
            <!--  Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Our Clients</h2>
                <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
            </div><!-- End Section Title -->
        <div class="container-fluid" data-aos="fade-up">
            <div class="row gy-4">
                <div class="col-xl-2 col-md-2 col-6 client-logo">
                    <img src="{{asset('assets/frontend/img/clients/client-1.jpg')}}" width="1000px" class="img-fluid" alt="">
                </div><!-- End Client Item -->
                <div class="col-xl-2 col-md-2 col-6 client-logo">
                    <img src="{{asset('assets/frontend/img/clients/client-2.jpg')}}" width="1000px" class="img-fluid" alt="">
                </div><!-- End Client Item -->
                <div class="col-xl-2 col-md-2 col-6 client-logo">
                    <img src="{{asset('assets/frontend/img/clients/client-3.jpg')}}" width="1000px" class="img-fluid" alt="">
                </div><!-- End Client Item -->
                <div class="col-xl-2 col-md-2 col-6 client-logo">
                    <img src="{{asset('assets/frontend/img/clients/client-4.jpg')}}" width="1000px" class="img-fluid" alt="">
                </div><!-- End Client Item -->
                <div class="col-xl-2 col-md-2 col-6 client-logo">
                    <img src="{{asset('assets/frontend/img/clients/client-5.jpg')}}" width="1000px" class="img-fluid" alt="">
                </div><!-- End Client Item -->
                <div class="col-xl-2 col-md-2 col-6 client-logo">
                    <img src="{{asset('assets/frontend/img/clients/client-6.jpg')}}" width="1000px" class="img-fluid" alt="">
                </div><!-- End Client Item -->
                <div class="col-xl-2 col-md-2 col-6 client-logo">
                    <img src="{{asset('assets/frontend/img/clients/client-7.jpg')}}" width="1000px" class="img-fluid" alt="">
                </div><!-- End Client Item -->
                <div class="col-xl-2 col-md-2 col-6 client-logo">
                    <img src="{{asset('assets/frontend/img/clients/client-8.jpg')}}" width="1000px" class="img-fluid" alt="">
                </div><!-- End Client Item -->
                <div class="col-xl-2 col-md-2 col-6 client-logo">
                    <img src="{{asset('assets/frontend/img/clients/client-9.jpg')}}" width="1000px" class="img-fluid" alt="">
                </div><!-- End Client Item -->
                <div class="col-xl-2 col-md-2 col-6 client-logo">
                    <img src="{{asset('assets/frontend/img/clients/client-10.jpg')}}" width="1000px" class="img-fluid" alt="">
                </div><!-- End Client Item -->
                <div class="col-xl-2 col-md-2 col-6 client-logo">
                    <img src="{{asset('assets/frontend/img/clients/client-11.jpg')}}" width="1000px" class="img-fluid" alt="">
                </div><!-- End Client Item -->
                <div class="col-xl-2 col-md-2 col-6 client-logo">
                    <img src="{{asset('assets/frontend/img/clients/client-12.jpg')}}" width="1000px" class="img-fluid" alt="">
                </div><!-- End Client Item -->
                <div class="col-xl-2 col-md-2 col-6 client-logo">
                    <img src="{{asset('assets/frontend/img/clients/client-13.jpg')}}" width="1000px" class="img-fluid" alt="">
                </div><!-- End Client Item -->
                <div class="col-xl-2 col-md-2 col-6 client-logo">
                    <img src="{{asset('assets/frontend/img/clients/client-14.jpg')}}" width="1000px" class="img-fluid" alt="">
                </div><!-- End Client Item -->
                <div class="col-xl-2 col-md-2 col-6 client-logo">
                    <img src="{{asset('assets/frontend/img/clients/client-15.jpg')}}" width="1000px" class="img-fluid" alt="">
                </div><!-- End Client Item -->
                <div class="col-xl-2 col-md-2 col-6 client-logo">
                    <img src="{{asset('assets/frontend/img/clients/client-16.jpg')}}" width="1000px" class="img-fluid" alt="">
                </div><!-- End Client Item -->
                <div class="col-xl-2 col-md-2 col-6 client-logo">
                    <img src="{{asset('assets/frontend/img/clients/client-17.jpg')}}" width="1000px" class="img-fluid" alt="">
                </div><!-- End Client Item -->
                <div class="col-xl-2 col-md-2 col-6 client-logo">
                    <img src="{{asset('assets/frontend/img/clients/client-18.jpg')}}" width="1000px" class="img-fluid" alt="">
                </div><!-- End Client Item -->
            </div>
        </div>
    </section>
    <!-- End Clients Section -->
    <!-- Services Section - Home Page -->
    <section id="services" class="services">
        <!--  Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Services</h2>
{{--            <center><a href="services-details.php" id="btnMore">+ More Services</a></center>--}}
            <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
        </div><!-- End Section Title -->
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item d-flex">
                        <div class="icon flex-shrink-0"><i class="bi bi-camera"></i></div>
                        <div>
                            <h4 class="title"><a href="services-details.php" class="stretched-link">Online photography</a></h4>
                            <p class="description">Online photography is the art of capturing and sharing visual stories through digital platforms, using a lens to transform moments into captivating images that resonate across the digital landscape.</p>
                        </div>
                    </div>
                </div>
                <!-- End Service Item -->
                <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="200">
                    <div class="service-item d-flex">
                        <div class="icon flex-shrink-0"><i class="bi bi-camera-reels"></i></div>
                        <div>
                            <h4 class="title"><a href="services-details.php" class="stretched-link">Film</a></h4>
                            <p class="description">Film is a medium of storytelling that combines moving images, audio, and narrative to evoke emotions, convey messages, and immerse audiences in diverse cinematic experiences.</p>
                        </div>
                    </div>
                </div><!-- End Service Item -->
                <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="300">
                    <div class="service-item d-flex">
                        <div class="icon flex-shrink-0"><i class="bi bi-laptop"></i></div>
                        <div>
                            <h4 class="title"><a href="services-details.php" class="stretched-link">CGI</a></h4>
                            <p class="description">CGI (Computer-Generated Imagery) is the digital wizardry of creating lifelike visuals using advanced software, bringing unreal worlds, characters, and effects to life with stunning realism for movies, games, and simulations.</p>
                        </div>
                    </div>
                </div><!-- End Service Item -->
                <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="400">
                    <div class="service-item d-flex">
                        <div class="icon flex-shrink-0"><i class="bi bi-binoculars"></i></div>
                        <div>
                            <h4 class="title"><a href="services-details.php" class="stretched-link">AR/VR</a></h4>
                            <p class="description">
                                AR (Augmented Reality) overlays digital elements onto the real world, enhancing perception, while VR (Virtual Reality) immerses users in entirely simulated environments, both offering interactive and immersive experiences through technology.</p>
                        </div>
                    </div>
                </div><!-- End Service Item -->
                <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="500">
                    <div class="service-item d-flex">
                        <div class="icon flex-shrink-0"><i class="bi bi-brightness-high"></i></div>
                        <div>
                            <h4 class="title"><a href="services-details.php" class="stretched-link">Graphic Design</a></h4>
                            <p class="description">Graphic design is the artistic craft of combining visuals and typography to communicate ideas, messages, and aesthetics, creating visually engaging materials for branding, advertising, and communication purposes.</p>
                        </div>
                    </div>
                </div><!-- End Service Item -->
                <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="600">
                    <div class="service-item d-flex">
                        <div class="icon flex-shrink-0"><i class="bi bi-mic"></i></div>
                        <div>
                            <h4 class="title"><a href="services-details.php" class="stretched-link">Audio</a></h4>
                            <p class="description">
                                Audio encompasses the realm of sound, music, and voice, adding depth, emotion, and atmosphere to various mediums like films, games, and media productions, enhancing the sensory experience.</p>
                        </div>
                    </div>
                </div><!-- End Service Item -->
            </div>
        </div>
    </section><!-- End Services Section -->
    <!-- Portfolio Section - Home Page -->
    <section id="portfolio" class="portfolio">
        <!--  Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Portfolio</h2>
{{--            <center><a href="portfolio-details.php" id="btnMore">+ More Porfolio</a></center>--}}
            <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
        </div><!-- End Section Title -->
        <div class="container">
            <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
                <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                    <li data-filter="*" class="filter-active">All</li>
                    <li data-filter=".filter-images">Images</li>
                    <li data-filter=".filter-video">Video</li>
                    <!-- <li data-filter=".filter-branding">Web</li> -->
                </ul><!-- End Portfolio Filters -->
                <div class="container">
                    <!-- Video Section -->
                    <div class="row gy-12 isotope-container filter-video" data-aos="fade-up" data-aos-delay="200">
                        <div class="col-lg-12 col-md-12 portfolio-item isotope-item filter-video">
                            <video controls>
                                <source src="https://youtu.be/X_Z8_pQV4eA?si=kSS3XLjMUeoKs8AD" width="">
                            </video>
                        </div><!-- End Video Portfolio Item -->
                    </div>
                    <!-- Image Section -->
                    <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
                        <!-- Image Item 1 -->
                        @forelse($data['portfolio_images'] as $portfolioImages)
                            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-images">
                                <div class="portfolio_images">
                                <img src="{{asset('images/portfolio_images/'.$portfolioImages->image)}}" class="img-fluid" alt="{{$portfolioImages->title}}">
                                <div class="portfolio-info">
                                    <h4>{{$portfolioImages->title}}</h4>
                                    <p>{!! $portfolioImages->short_description !!}</p>
                                    <a href="{{asset('images/portfolio_images/'.$portfolioImages->image)}}" title="{{$portfolioImages->short_description}}"
                                       data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                </div>
                                </div>
                            </div>
                        @empty
                            <h2 class="text-danger">No Data Found</h2>
                        @endforelse
                    </div><!-- End Image Section -->
                </div><!-- End Container -->
                <!-- End Portfolio Item -->
                </div><!-- End Portfolio Container -->
            </div>
        </div>
        <!-- Team Section - Home Page -->
        <section id="team" class="team">
            <!--  Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Team</h2>
                <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
            </div><!-- End Section Title -->
            <div class="container">
                <div class="row gy-5">
                    @forelse($data['teams'] as $teams)
                        <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="100">
                            <div class="member-img">
                                <div class="img-container">
                                    <img src="{{asset('images/teams/'.$teams->image)}}" alt="{{$teams->name}}">
                                </div>
                                <div class="social">
                                    <a href="{{$teams->twitter}}"><i class="bi bi-twitter"></i></a>
                                    <a href="{{$teams->facebook}}"><i class="bi bi-facebook"></i></a>
                                    <a href="{{$teams->instagram}}"><i class="bi bi-instagram"></i></a>
                                    <a href="{{$teams->linked_in}}"><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info text-center">
                                <h4>{{ucfirst($teams->name)}}</h4>
                                <span>{{ucfirst($teams->position)}}</span>
                                <p>{!! $teams->description !!}</p>
                            </div>
                        </div>
                    @empty
                        <h2 class="text-danger">No Data Found</h2>
                    @endforelse
                        <!-- End Team Member -->
                </div>
            </div>
        </section><!-- End Team Section -->
    </section><!-- End Recent-posts Section -->
    <!-- Contact Section - Home Page -->
    <section id="contact" class="contact">
        <!--  Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Contact</h2>
            <p>Feel free to forward your inquiries here.</p>
        </div><!-- End Section Title -->
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row gy-4">
                <div class="col-lg-6">
                    <div class="row gy-4">
                        <div class="col-md-6">
                            <div class="info-item" data-aos="fade" data-aos-delay="200">
                                <i class="bi bi-geo-alt"></i>
                                <h3>Address</h3>
                                <p>{{$data['settings']->address}}</p>
                                <p>Asia, Nepal</p>
                            </div>
                        </div><!-- End Info Item -->
                        <div class="col-md-6">
                            <div class="info-item" data-aos="fade" data-aos-delay="300">
                                <i class="bi bi-telephone"></i>
                                <h3>Call Us</h3>
                                <p>{{$data['settings']->mobile}}</p>
                                <p>{{$data['settings']->phone}}</p>
                            </div>
                        </div><!-- End Info Item -->
                        <div class="col-md-6">
                            <div class="info-item" data-aos="fade" data-aos-delay="400">
                                <i class="bi bi-envelope"></i>
                                <h3>Email Us</h3>
                                <p>{{$data['settings']->optional_email}}</p>
                                <p>{{$data['settings']->email}}</p>
                            </div>
                        </div><!-- End Info Item -->
                        <div class="col-md-6">
                            <div class="info-item" data-aos="fade" data-aos-delay="500">
                                <i class="bi bi-clock"></i>
                                <h3>Open Hours</h3>
                                <p>Sunday - Friday</p>
                                <p>10:00AM - 04:00PM</p>
                            </div>
                        </div><!-- End Info Item -->
                    </div>
                </div>
                <div class="col-lg-6">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3533.9556693357586!2d85.32777307414428!3d27.656843227719516!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb17abd80a5925%3A0x7eb8499528680c09!2sJamana%20Studio!5e0!3m2!1sen!2snp!4v1693397886161!5m2!1sen!2snp" width="500" height="420" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div><!-- End Contact Form -->
            </div>
        </div>
    </section><!-- End Contact Section -->
</main>
@include('frontend.includes.footer')
