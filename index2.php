<?php
  session_start();
  if($_SESSION['id'] && $_SESSION['email'])
  {
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Green Circle</title>
    <link rel="stylesheet" href="index.css">
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <script src="assets/js/contactus.js"></script>
    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/css for elements.css">
    <link rel="stylesheet" href="assets/css/animated.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="index.html" class="logo">
              <img src="assets/images/green circle_logo.jpeg">
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
              <li class="scroll-to-section"><a href="#services">Services</a></li>
              <li class="scroll-to-section"><a href="#about">About</a></li> 
              <li>
              <div class="navbar-menu">
                <a class="dropdown" href="#" role="button" data-bs-toggle="dropdown">
                  Green Energy
                </a>
                <ul class="dropdown-menu" role="menu" aria-labelledby="involved-menu">
                  <li class="scroll-to-section"><a class="dropdown-item" href="Biogas/Biogas.html">Biogas</a></li>
                  <li class="scroll-to-section"><a class="dropdown-item" href="green cells/greencell.html">Green cell</a></li>
                  <li class="scroll-to-section"><a class="dropdown-item" href="solarpanel/solar.html">Solar panel</a></li>
                  <li></li>
                </ul>
              </div>
              </li>
              <li class="scroll-to-section"><a href="#portfolio">Case Studies</a></li>
              <li class="scroll-to-section"><a href="#video">Videos</a></li> 
              <li>
              <div class="navbar-menu">
                <a class="dropdown" href="#" role="button" data-bs-toggle="dropdown">
                  Area
                </a>
                <ul class="dropdown-menu" role="menu" aria-labelledby="involved-menu">
                  <li class="scroll-to-section"><a class="dropdown-item" href="plans.html">Farms</a></li>
                  <li class="scroll-to-section"><a class="dropdown-item" href="#">Domestic</a></li>
                  <li></li>
                </ul>
              </div>
              </li>
              <?php 
              $temp="#";
              $temp1="w13";
              if(session_status() == PHP_SESSION_ACTIVE)
              {
                $temp1="#";
                $temp="w13";
              }
              ?>
              <li class="scroll-to-section" id=<?php echo $temp;?>>
              <div class='main-red-button-hover'><a href='login.html'>Sign In</a></div>
              </li>
              <li id=<?php echo $temp1;?>>
                <div class='navbar-menu'>
                  <a class='dropdown' href='#' role='button' data-bs-toggle='dropdown'>
                  <div class='main-red-button-hover'>
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="Black" class="bi bi-person-circle" viewBox="0 0 16 16" style="margin:-30px">
                      <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                      <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                    </svg>
                  </div>
                  </a>
                  <ul class="dropdown-menu" role="menu" aria-labelledby="involved-menu">
                  <li class="scroll-to-section"><a class="dropdown-item" href="logout.php">Logout</a></li>

                  <li class="scroll-to-section"><a class="dropdown-item" href="Dash.php">DashBoard</a></li>
                  <li></li>
                </ul>
                </div>
              </li>
            </ul>        
            <a class='menu-trigger'>
                <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="main-banner" id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="owl-carousel owl-banner">
                <div class="item header-text">
                  <h6>Welcome to GREEN CIRCLE</h6>
                  <h2>Our <em>mission</em> is to make alternative sources of energy reach every <span>home!</span></h2>
                  <p>We aim to live on the principle of recycling, thus making a complete green circle! </p>
                  <div class="down-buttons">
                    <div class="main-blue-button-hover">
                      <a href="#contact">Message Us Now</a>
                    </div>
                    <div class="call-button">
                      <a href="#"><i class="fa fa-phone"></i> 010-020-0340</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="services" class="our-services section">
    <div class="services-right-dec">
      <img src="assets/images/services-right-dec.png" alt="">
    </div>
    <div class="container">
      <div class="services-left-dec">
        <img src="assets/images/services-left-dec.png" alt="">
      </div>
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading">
            <h2>We believe in <em>Sustainable Development</em> and offer you an opportunity to contribute to <span>making the planet a better place to live!</span></h2>
            <span>Our Services</span>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="owl-carousel owl-services">
            <div class="item">
              <h4>BIOGAS</h4>
              <div class="icon"><img src="assets\images\128px-Biogas_icon.png" alt=""></div>
              <p>Our biogas kit helps you to turn your kitchen waste into biogas. It is an effective, economical and environment friendly means of managing waste in urban and rural areas.</p>
            </div>
            <div class="item">
              <h4>SOLAR PANELS</h4>
              <div class="icon"><img src="assets\images\solar_new.png" alt="" width="100px" height="60px"></div>
              <p>Move towards a greener future by harnessing the solar energy using technology. Let's take a step forward into the era of renewable energy resources.</p>
            </div>
            <div class="item">
              <h4>GREEN BATTERIES</h4>
              <div class="icon"><img src="assets\images\battery.png" alt=""></div>
              <p>We need to save our planet by switching to better storage solutions.</p>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="about" class="about-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <div class="left-image">
            <img src="assets/images/about-left-image.png" alt="Two Girls working together">
          </div>
        </div>
        <div class="col-lg-6">
          <div class="section-heading">
            <h2>Avail our <span>affordable energy solutions</span> &amp; <em>enjoy</em> these benefits!</h2>
            <p>You can browse free HTML templates on Too CSS website. Visit the website and explore latest website templates for your projects.</p>
            <div class="row">
              <div class="col-lg-4">
                <div class="fact-item">
                  <div class="count-area-content">
                    <div class="icon">
                      <img src="assets/images/service-icon-01.png" alt="">
                    </div>
                    <div class="count-digit">320</div>
                    <div class="count-title">Rupees</div>
                    <p>saved every year on gas</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="fact-item">
                  <div class="count-area-content">
                    <div class="icon">
                      <img src="assets/images/service-icon-02.png" alt="">
                    </div>
                    <div class="count-digit">640</div>
                    <div class="count-title"></div>
                    <p>Lorem ipsum dolor sitti amet, consectetur.</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="fact-item">
                  <div class="count-area-content">
                    <div class="icon">
                      <img src="assets/images/service-icon-03.png" alt="">
                    </div>
                    <div class="count-digit">100%</div>
                    <div class="count-title">Eco-Friendly Batteries</div>
                    <p>Our non toxic and non explosive green cells are made of aloe vera.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="portfolio" class="our-portfolio section">
    <div class="portfolio-left-dec">
      <img src="assets/images/portfolio-left-dec.png" alt="">
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading">
            <h2>Global Recent <em>Projects</em> &amp; Case Studies <span>on Renewable Energy</span></h2>
            <span>Our Portfolio</span>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="owl-carousel owl-portfolio">
            <a href="https://www.sciencedirect.com/science/article/pii/S1877705814029099?ref=pdf_download&fr=RR-2&rr=7a97bbaaf8800337"
            target="_blank">
            <div class="item">
              <div class="thumb">
                <img src="assets/images/r1.png" alt="">
                <div class="hover-effect">
                  <div class="inner-content">
                    <h4 style="margin:10px">Anaerobic digestion of kitchen waste to produce biogas</h4>
                    <span>BioGas</span>
                  </div>
                </div>
              </div>
            </div>
            </a>
            <a href="https://www.researchgate.net/publication/316691176_The_Need_For_Renewable_Energy_Sources" target="_blank">
            <div class="item">
              <div class="thumb"style="margin-top:40px ;">
                <img src="assets/images/r2.png" alt="">
                <div class="hover-effect" >
                  <div class="inner-content">
                      <h4 style="margin:10px;">The Need For Renewable Energy Sources </h4>
                    <span>Renewable Energy </span>
                  </div>
                </div>
              </div>
            </div>
            </a>
            <a href="https://www.mdpi.com/2071-1050/14/14/8852" target="_blank">
            <div class="item">
              <div class="thumb">
                <img src="assets/images/r3.png" alt="">
                <div class="hover-effect">
                  <div class="inner-content">
                    <h4 style="margin:10px">Analysing the Impact of Human Capital on Renewable Energy</h4>
                    <span>Renewable Energy</span>
                  </div>
                </div>
              </div>
            </div>
            </a>
            <div class="item">
              <div class="thumb">
                <img src="assets/images/portfolio-04.jpg" alt="">
                <div class="hover-effect">
                  <div class="inner-content">
                    <a href="#"><h4>Project Four</h4></a>
                    <span>Website Marketing</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="thumb">
                <img src="assets/images/portfolio-01.jpg" alt="">
                <div class="hover-effect">
                  <div class="inner-content">
                    <a href="#"><h4>Fifth Project</h4></a>
                    <span>Digital Assets</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="thumb">
                <img src="assets/images/portfolio-02.jpg" alt="">
                <div class="hover-effect">
                  <div class="inner-content">
                    <a href="#"><h4>Sixth Project</h4></a>
                    <span>SEO &amp; Marketing</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="thumb">
                <img src="assets/images/portfolio-03.jpg" alt="">
                <div class="hover-effect">
                  <div class="inner-content">
                    <a href="#"><h4>7th Project</h4></a>
                    <span>SEO &amp; Marketing</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="thumb">
                <img src="assets/images/portfolio-04.jpg" alt="">
                <div class="hover-effect">
                  <div class="inner-content">
                    <a href="#"><h4>8th Project</h4></a>
                    <span>SEO &amp; Marketing</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="thumb">
                <img src="assets/images/portfolio-01.jpg" alt="">
                <div class="hover-effect">
                  <div class="inner-content">
                    <a href="#"><h4>9th Project</h4></a>
                    <span>SEO &amp; Marketing</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="thumb">
                <img src="assets/images/portfolio-02.jpg" alt="">
                <div class="hover-effect">
                  <div class="inner-content">
                    <a href="#"><h4>Project Ten</h4></a>
                    <span>SEO &amp; Marketing</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="thumb">
                <img src="assets/images/portfolio-03.jpg" alt="">
                <div class="hover-effect">
                  <div class="inner-content">
                    <a href="#"><h4>Project Eleven</h4></a>
                    <span>SEO &amp; Marketing</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="thumb">
                <img src="assets/images/portfolio-04.jpg" alt="">
                <div class="hover-effect">
                  <div class="inner-content">
                    <a href="#"><h4>12th Project</h4></a>
                    <span>SEO &amp; Marketing</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="pricing" class="pricing-tables">
    <div class="tables-left-dec">
      <img src="assets/images/tables-left-dec.png" alt="">
    </div>
    <div class="tables-right-dec">
      <img src="assets/images/tables-right-dec.png" alt="">
    </div>
    <div id="plans" class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading">
            <h2>Select a suitable <em>plan</em> for your next <span>projects</span></h2>
            <span>Our Plans</span>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="owl-carousel owl-services">
            <div class="item">
              <h4>Solax Panels 3-6kW</h4>
              <div class="d2"><img src="https://www.solaxpower.com/wp-content/uploads/2020/01/X1BoostWebImage.png" alt=""></div><br>
              <button type="button" class="btn btn-success"><a class="d23" href="log.php?id=21" target="_blank">BUY</a></button>
            </div>
            <div class="item">
              <h4>Plug & Play Portable Biogas Plant</h4>
              <div class="d2"><img src="https://5.imimg.com/data5/OX/BA/MY-31987046/portable-biogas-plant-500x500.png" alt=""></div><br>
              <br />
              <button type="button" class="btn btn-success"><a class="d23" href="log.php?id=11" target="_blank">BUY</a></button>
            </div>
            <div class="item">
              <h4>Eco friendly aloe vera batteries</h4>
              <div class="d2"><img src="assets/images/aloecell.png" alt="" height="310px" ></div>
              <button type="button" class="btn btn-success"><a class="d23" href="log.php?id=24" target="_blank">BUY</a></button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="video" class="our-videos section">
    <div class="videos-left-dec">
      <img src="assets/images/videos-left-dec.png" alt="">
    </div>
    <div class="videos-right-dec">
      <img src="assets/images/videos-right-dec.png" alt="">
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="naccs">
            <div class="grid">
              <div class="row">
                <div class="col-lg-8">
                  <ul class="nacc">
                    <li class="active">
                      <div>
                        <div class="thumb">
                          <iframe width="100%" height="auto" src="https://www.youtube.com/embed/nRTrxA3gWXY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                          <div class="overlay-effect">
                            <a href="#"><h4>Renewable Energy</h4></a>
                            <span>Climate a major factor</span>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="thumb">
                          <iframe width="100%" height="auto" src="https://www.youtube.com/embed/gl5tY5Noacc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                          <div class="overlay-effect">
                            <a href="#"><h4>Solar Energy</h4></a>
                            <span>Solar PV's &amp; Advantages</span>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="thumb">
                          <iframe width="100%" height="auto" src="https://www.youtube.com/embed/aYZfdBxFfz8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                          <div class="overlay-effect">
                            <a href="#"><h4>Biomass Energy</h4></a>
                            <span>Sustainable &amp; Clean Air</span>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="thumb">
                          <iframe width="100%" height="auto" src="https://www.youtube.com/embed/ML-XiyppalY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                          <div class="overlay-effect">
                            <a href="#"><h4>Green Cell</h4></a>
                            <span>Alternative To Toxic Batteries</span>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="col-lg-4">
                  <div class="menu">
                    <div class="active">
                      <div class="thumb">
                        <img src="assets/images/video-thumb-01.png" alt="">
                        <div class="inner-content">
                          <h4>Renewable Energy</h4>
                          <span>Climate a major factor</span>
                        </div>
                      </div>
                    </div>
                    <div>
                      <div class="thumb">
                        <img src="assets/images/video-thumb-02.png" alt="">
                        <div class="inner-content">
                          <h4>Solar Energy</h4>
                          <span>Solar PV's &amp; Advantages</span>
                        </div>
                      </div>
                    </div>
                    <div>
                      <div class="thumb">
                        <img src="assets/images/video-thumb-03.png" alt="Marketing">
                        <div class="inner-content">
                          <h4>Biomass Energy</h4>
                          <span>Sustainable &amp; Clean Air</span>
                        </div>
                      </div>
                    </div>
                    <div>
                      <div class="thumb">
                        <img src="assets/images/video-thumb-04.png" alt="SEO Work">
                        <div class="inner-content">
                          <h4>Green Cell</h4>
                          <span>Alternative To Toxic Batteries</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>             
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="footer-dec">
    <img src="assets/images/footer-dec.png" alt="">
  </div>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="about footer-item">
            <div class="logo">
              <a href="#"><img src="assets/images/green circle_logo.jpeg" alt="Onix Digital TemplateMo"></a>
            </div>
            <h4>About Us</h4>            
            <p>We help people switch to cleaner fuels for their kitchens by converting the kitchen waste to biogas.</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="portfolio footer-item">
            <h4>Services</h4>
            <ul>
              <li><a href="#top">Home</a></li>
              <li><a href="#services">Services</a></li>
              <li><a href="#portfolio">Portfolio</a></li>
              <li><a href="#plans">Installation Plans</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="about">
            <h4>Reach us out</h4>
              <ul>
                <li><a href="https://www.facebook.com/people/Green-Circle/100090633651497/?mibextid=ZbWKwL"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="mailto:circlegreen23@gmail.com"><i class="fa fa-envelope"></i></a></li>
                <li><a href="https://www.instagram.com/greencircle_23/?hl=en"><i class="fa fa-instagram"></i></a></li>
              </ul>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="copyright">
            <p>
              Copyright &copy;
              <script>document.write(new Date().getFullYear());</script> All rights reserved | This template
              is made by <a href="https://gdsc.community.dev/birla-vishvakarma-mahavidyalaya-engineering-college-anand/" target="_blank">GDSC | BVM</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </footer>


  <!-- Scripts -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/animation.js"></script>
  <script src="assets/js/imagesloaded.js"></script>
  <script src="assets/js/custom.js"></script>
  

  <script>
  // Acc
    $(document).on("click", ".naccs .menu div", function() {
      var numberIndex = $(this).index();

      if (!$(this).is("active")) {
          $(".naccs .menu div").removeClass("active");
          $(".naccs ul li").removeClass("active");

          $(this).addClass("active");
          $(".naccs ul").find("li:eq(" + numberIndex + ")").addClass("active");

          var listItemHeight = $(".naccs ul")
            .find("li:eq(" + numberIndex + ")")
            .innerHeight();
          $(".naccs ul").height(listItemHeight + "px");
        }
    });
  </script>
</body>
</html>
<?php
  }
  else
  {
    ?>
    <script>
      alert("Please Login...");
      window.location.href="login.html";
    </script>
    <?php
  }
?>