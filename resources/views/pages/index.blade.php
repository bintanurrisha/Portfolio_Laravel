
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Mystery Code - Blog</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="{{(@$about->img)?url($about->img):asset("assets/img/img.jpg")}}" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="index.html">{{(@$home->title_2)?$home->title_2:"The title"}} </a></h1>
        <div class="social-links mt-3 text-center">
 @if (count($Social_link_section) > 0)
    @foreach ($Social_link_section as $Social_link)
          <a href="{{url($Social_link->Link)}}" class="twitter"><i class="<?php echo $Social_link->icon;?> "></i></a>
    @endforeach
@endif
    </div>
      </div>

      <nav class="nav-menu">
        <ul>
          <li class="active"><a href="index.html"><i class="bx bx-home"></i> <span>Home</span></a></li>
          <li><a href="#about"><i class="bx bx-user"></i> <span>About</span></a></li>
          <li><a href="#portfolio"><i class="bx bx-book-content"></i> Portfolio</a></li>
          <li><a href="#services"><i class="bx bx-server"></i> Services</a></li>
          <li><a href="#contact"><i class="bx bx-envelope"></i> Contact</a></li>

        </ul>
      </nav><!-- .nav-menu -->
      <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center"
  style="background-image: url(<?php echo (@$home->bc_img)?url($home->bc_img):asset("assets/img/bc_img.jpg") ?>)">
    <div class="hero-container" data-aos="fade-in">
      <h3>{{(@$home->title_1)?$home->title_1:"The title"}}</h3>
      <h1>I'M <span> {{(@$home->title_2)?$home->title_2:"The title"}}</span></h1>
      <p>{{(@$home->sub_title)?$home->sub_title:"Sub Title"}}</p>
    <a href="#about"><button class="btn btn-success">{{(@$home->button)?$home->button:"Sub Title"}} <i class="icofont-ui-user"></i></button></a>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>{{$about->title_1}}</h2>
          <p> {{$about->sub_title}}</p>
        </div>

        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <img src="{{(@$about->img)?url($about->img):asset("assets/img/img.jpg")}}" class="img-fluid" alt="">
            <div class="text-center mt-3">
            <a href="{{url($about->cv)}}" ><button class="btn btn-success  ">Downloder CV <i class="icofont-download"></i></button></a>
          </div></div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3>{{$about->title_2}}</h3>
            <p class="font-italic">
              {{$about->sub_title_2}}
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="icofont-rounded-right"></i> <strong>{{$about->list_name_1}}:</strong> {{$about->list_description_1}}</li>
                  <li><i class="icofont-rounded-right"></i> <strong>{{$about->list_name_2}}:</strong>{{$about->list_description_2}}</li>
                  <li><i class="icofont-rounded-right"></i> <strong>{{$about->list_name_3}}:</strong>{{$about->list_description_3}}</li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="icofont-rounded-right"></i> <strong>{{$about->list_name_4}}:</strong>{{$about->list_description_4}}</li>
                  <li><i class="icofont-rounded-right"></i> <strong>{{$about->list_name_5}}:</strong>{{$about->list_description_5}}</li>
                  <li><i class="icofont-rounded-right"></i> <strong>{{$about->list_name_6}}:</strong> {{$about->list_description_6}}</li>
                </ul>
              </div>
            </div>
            <p>
              {{$about->sub_title_3}}
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Facts Section ======= -->
    <section id="facts" class="facts section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Facts</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>
        <div class="row no-gutters">
 @if (count($facts) > 0)
       @foreach ($facts as $fact)
        
          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="count-box">
              <i class="<?php echo $fact->icon;?> "></i>
              <span data-toggle="counter-up">{{$fact->Counter}}</span>
              <p><strong>{{$fact->description}}</strong> </p>
            </div>
          </div>
        
    @endforeach
@endif
</div>
      </div>
    </section><!-- End Facts Section -->

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills ">
      <div class="container">

        <div class="section-title">
          <h2>{{$skill_head_sections->title}}</h2>
          <p>{{$skill_head_sections->sub_title}}</p>
        </div>

        <div class="row skills-content">
 @if (count($skill_section) > 0)
  @foreach ($skill_section as $skills)
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="progress">
              <span class="skill">{{$skills->skill}}<i class="val">{{$skills->score}}%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $skills->score;?>" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>

      @endforeach
    @endif


        </div>
      </div>
    </section>
    <!-- End Skills Section -->

    

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Portfolio</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-6 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-1.jpg" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-6 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-2.jpg" data-gall="portfolioGallery" class="venobox" title="Web 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-6 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-3.jpg" data-gall="portfolioGallery" class="venobox" title="App 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-6 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-4.jpg" data-gall="portfolioGallery" class="venobox" title="Card 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-5.jpg" data-gall="portfolioGallery" class="venobox" title="Web 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-6.jpg" data-gall="portfolioGallery" class="venobox" title="App 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-7.jpg" data-gall="portfolioGallery" class="venobox" title="Card 1"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-8.jpg" data-gall="portfolioGallery" class="venobox" title="Card 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-9.jpg" data-gall="portfolioGallery" class="venobox" title="Web 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Services</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>
        <div class="row">
         @if (count($service_section) > 0)
                        @foreach ($service_section as $service)
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
             <div class="card">
      <div class="card-body">
            <div class="icon"> <i class="<?php echo $service->icon;?> "></i></div>
            <h4 class="title"><a href="">{{$service->Title}}</a></h4>
            <p class="description">{{$service->description}}</p>
            <div class="text-center mt-3">
            <a href="{{route('admin.service.show', $service->id)}}" ><button class="btn btn-outline-success">Read Details</button></a>
          </div>

          </div>  
             </div>  
                 </div>
          
  @endforeach
                        
                    @endif
</div>

</div>
</section>
    <!-- End Services Section -->

 

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row" data-aos="fade-in">

          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>{{$about->list_name_1}}</h4>
                <p>{{$about->list_description_6}}</p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>{{$about->list_name_1}}</h4>
                <p>{{$about->list_description_6}}</p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>{{$about->list_name_1}}</h4>
                <p>{{$about->list_description_6}}</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5  mt-lg-0 d-flex align-items-stretch" data-aos="fade-left">
          
           <div class="form-bg">
    <div class="container">
        
          
                <div class="form-container">
                    <div class="form-icon">
                        <i class="bx bx-plus"></i>
                    </div>
                    <form class="form-horizontal">
                        <h3 class="title">Contact Us</h3>
                        <div class="form-group">
                            <span class="input-icon"><i class="bx bx-plus"></i></span>
                            <input class="form-control" type="text" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <span class="input-icon"><i class="icofont-envelope"></i></span>
                            <input class="form-control" type="email" placeholder="Email Address">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" rows="4" cols="120" placeholder="Message"></textarea>
                        </div>
                        <button class="btn signin">Send Message <i class="fa fa-long-arrow-alt-right"></i></button>
                    </form>
                </div>
            
        
    </div>
</div>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Mystery Code</span></strong>
      </div>
      <div class="credits">
       Designed by <a href="#">Mystery Code</a>
      </div>
    </div>
  </footer> End  Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>