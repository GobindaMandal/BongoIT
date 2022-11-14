
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Bongo IT</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('frontend') }}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ asset('frontend') }}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{ asset('frontend') }}/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="{{ asset('frontend') }}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{ asset('frontend') }}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('frontend') }}/assets/css/main.css" rel="stylesheet">

</head>

<body>
  <header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="" class="logo d-flex align-items-center">
        
        <h1>BongoIT</h1>
      </a>
      <nav id="navbar" class="navbar">
        
            <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
                @if (Route::has('login'))
                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Login</a>
    
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>
        
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">
    <div class="container position-relative">
      <div class="row gy-5" data-aos="fade-in">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
          <h2>Welcome to <span>Bongo IT Limited</span></h2>
          <p>Sed autem laudantium dolores. Voluptatem itaque ea consequatur eveniet. Eum quas beatae cumque eum quaerat.</p>
        </div>
        <div class="col-lg-6 order-1 order-lg-2">
          <img src="{{ asset('frontend') }}/assets/img/hero-img.svg" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="50">
        </div>
      </div>
    </div>

    </div>
  </section>
  <!-- End Hero Section -->

  <main id="main">
    <form action="">
        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>Employees</h2>
                    <p>Voluptatem quibusdam ut ullam perferendis repellat non ut consequuntur est eveniet deleniti fignissimos eos quam</p>
                </div>

                <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="50">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                    <div class="testimonial-wrap">
                        <div class="testimonial-item">
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('frontend') }}/assets/img/testimonials/employee1.jpg" class="testimonial-img flex-shrink-0" alt="">
                            <div>
                            <h3>Sourav Paul</h3>
                            <h4>Mobile App Developer</h4>
                            </div>
                        </div>
                        <p>
                            Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                        </p>
                        </div>
                    </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                    <div class="testimonial-wrap">
                        <div class="testimonial-item">
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('frontend') }}/assets/img/testimonials/employee2.jpg" class="testimonial-img flex-shrink-0" alt="">
                            <div>
                            <h3>Nahid Hossain</h3>
                            <h4>Java Developer</h4>
                            </div>
                        </div>
                        <p>
                            Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                        </p>
                        </div>
                    </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                    <div class="testimonial-wrap">
                        <div class="testimonial-item">
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('frontend') }}/assets/img/testimonials/employee3.jpg" class="testimonial-img flex-shrink-0" alt="">
                            <div>
                            <h3>Rafi Alam</h3>
                            <h4>PHP Developer</h4>
                            </div>
                        </div>
                        <p>
                            Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                        </p>
                        </div>
                    </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                    <div class="testimonial-wrap">
                        <div class="testimonial-item">
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('frontend') }}/assets/img/testimonials/employee4.jpg" class="testimonial-img flex-shrink-0" alt="">
                            <div>
                            <h3>Mahiya Mahi</h3>
                            <h4>Laravel Developer</h4>
                            </div>
                        </div>
                        <p>
                            Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore.
                        </p>
                        </div>
                    </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                    <div class="testimonial-wrap">
                        <div class="testimonial-item">
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('frontend') }}/assets/img/testimonials/employee5.jpg" class="testimonial-img flex-shrink-0" alt="">
                            <div>
                            <h3>Tanjir Hossain</h3>
                            <h4>Graphic Designer</h4>
                            </div>
                        </div>
                        <p>
                            Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore.
                        </p>
                        </div>
                    </div>
                    </div><!-- End testimonial item -->

                </div>
                <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Testimonials Section -->
    </form>

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-info">
          <a href="" class="logo d-flex align-items-center">
            <span>BongoIT</span>
          </a>
          <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
          <div class="social-links d-flex mt-4">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>About Us</h4>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Terms of service</a></li>
            <li><a href="#">Privacy policy</a></li>
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
            Shymoli Square Complex,<br>
            Shymoli, Dhaka-1207,<br>
            Bangladesh <br><br>
            <strong>Phone:</strong> +880 1000000000<br>
            <strong>Email:</strong> info@example.com<br>
          </p>

        </div>

      </div>
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('frontend') }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('frontend') }}/assets/vendor/aos/aos.js"></script>
  <script src="{{ asset('frontend') }}/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="{{ asset('frontend') }}/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="{{ asset('frontend') }}/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="{{ asset('frontend') }}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="{{ asset('frontend') }}/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('frontend') }}/assets/js/main.js"></script>

</body>

</html>