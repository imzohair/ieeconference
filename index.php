<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<!---- jquery ---->
<script src="./js/jquery-3.4.1.min.js"></script>

   <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>-->

    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>-->
  
 

<!---- bootstrap js ---->
<script src="./js/bootstrap.bundle.min.js"></script>
<script src="./js/scrolltop.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">

    <title>ICCMM-2026</title>

<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
    <!---- font awesome ---->
    <script defer src="./js/all.js"></script>

    <!---- google fonts ---->
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    
    <!--- main css ----->
    <link rel="stylesheet"  href="./css/main.css?v=7.0">
    <link rel="stylesheet"  href="./css/tab.css">
    
    
    <!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

<script>
  // Set your conference date here
  const countdownDate = new Date("Nov 20, 2026 09:00:00").getTime();

  const x = setInterval(function () {

    const now = new Date().getTime();
    const distance = countdownDate - now;

    const days = Math.floor(distance / (1000 * 60 * 60 * 24));
    const hours = Math.floor((distance / (1000 * 60 * 60)) % 24);
    const minutes = Math.floor((distance / (1000 * 60)) % 60);
    const seconds = Math.floor((distance / 1000) % 60);

    document.getElementById("days").innerHTML = days;
    document.getElementById("hours").innerHTML = hours;
    document.getElementById("minutes").innerHTML = minutes;
    document.getElementById("seconds").innerHTML = seconds;

    if (distance < 0) {
      clearInterval(x);
      document.getElementById("countdown").innerHTML = "Event Started";
    }

  }, 1000);
</script>

</head>

<body>

  
  
  

<!-- Combined Header: Left Logo | Center Navigation | Right Logo -->
<header id="main-header">
    <div class="header-layout">

        <!-- Left Logo: IEEE Hyderabad -->
        <div class="header-logo left-logo">
            <img src="img/ieee_hyd_logo.jpg"
                 alt="IEEE Hyderabad">
        </div>

        <!-- Center Navigation -->
        <nav class="navbar navbar-expand-xl navbar-dark">
            <button class="navbar-toggler"
                    type="button"
                    data-toggle="collapse"
                    data-target="#navbarLinks"
                    aria-controls="navbarLinks"
                    aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarLinks">
                <ul class="navbar-nav mx-auto">

                    <li class="nav-item">
                        <a href="index.php" class="nav-link">Home</a>
                    </li>

                    <li class="nav-item">
                        <a href="call.php" class="nav-link">Call for Paper</a>
                    </li>

                    <li class="nav-item">
                        <a href="registration.php" class="nav-link">Registration</a>
                    </li>

                    <li class="nav-item">
                        <a href="program.php" class="nav-link">Program</a>
                    </li>

                    <li class="nav-item">
                        <a href="speaker.php" class="nav-link">Keynote Speaker</a>
                    </li>

                    <li class="nav-item">
                        <a href="events.php" class="nav-link">Events</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a href="#"
                           class="nav-link dropdown-toggle"
                           data-toggle="dropdown"
                           role="button"
                           aria-haspopup="true"
                           aria-expanded="false">
                            Committee
                        </a>

                        <div class="dropdown-menu">
                            <a href="committees.php" class="dropdown-item">
                                Conference Committee
                            </a>
                            <a href="organizingcommittee.php" class="dropdown-item">
                                Organizing Committee
                            </a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a href="sponsors.php" class="nav-link">
                            Sponsors &amp; Exhibitors
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="venue.php" class="nav-link">
                            Venue &amp; Travel Info
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="contactus.php" class="nav-link">Contact Us</a>
                    </li>

                </ul>
            </div>
        </nav>

        <!-- Right Logo: MJCET -->
        <div class="header-logo right-logo">
            <a href="https://sultanululoom.ac.in/"
               target="_blank"
               rel="noopener noreferrer">
                <img src="img/logo_sues.jpg" alt="MJCET">
            </a>
        </div>

    </div>
</header>

    

<!--header-->
<!--<header id="header1" class="p-5">-->
  <div id="slider-container" class="position-relative">
  <!-- Slider -->
  <div id="image-slider" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/IEEE_01.jpg" class="d-block w-100" alt="Image 1">
      </div>
      <div class="carousel-item">
        <img src="img/IEEE_02.jpg" class="d-block w-100" alt="Image 2">
      </div>
      <div class="carousel-item">
        <img src="img/IEEE_03.jpg" class="d-block w-100" alt="Image 3">
      </div>
      <div class="carousel-item">
        <img src="img/IEEE_04.jpg" class="d-block w-100" alt="Image 1">
      </div>
      <div class="carousel-item">
        <img src="img/IEEE_05.jpg" class="d-block w-100" alt="Image 2">
      </div>
      <div class="carousel-item">
        <img src="img/IEEE_06.jpg" class="d-block w-100" alt="Image 3">
      </div>
    </div>
  </div>
  <!-- Left and Right Controls -->
  <!--<button class="carousel-control-prev" type="button" data-bs-target="#image-slider" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#image-slider" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>-->

  <!-- Content -->
  <div class="container position-absolute bottom-0 start-50 translate-middle-x pb-4 d-none d-md-block">
    <div class="row">
      <div class="col-12 col-md-10 col-lg-8 mx-auto">
        <div style="background: rgba(0, 0, 0, 0.7); box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.5); border-radius: 10px; padding: 20px;">
          <h1 class="font-weight-bold fs-3 fs-md-2 text-light text-center">IEEE</h1>
          <h1 class="font-weight-bold fs-3 fs-md-2 text-light text-center">1st International Conference on</h1>
          <h2 class="fs-5 fs-md-3 text-light text-center">Next-Gen Computing: Converging Microelectronics and Mechatronics for Transformative Solutions</h2>
          <p class="fs-6 fs-md-5 text-light text-center">20-21 November, 2026</p>
          <p class="fs-6 fs-md-5 text-light text-center">Conference ID – 66375</p>
          
          <div class="countdown-box text-center text-light mt-3">
  <div id="countdown" class="d-flex justify-content-center gap-4 flex-wrap">
    
    <div>
      <h3 id="days">00</h3>
      <p>Days</p>
    </div>

    <div>
      <h3 id="hours">00</h3>
      <p>Hours</p>
    </div>

    <div>
      <h3 id="minutes">00</h3>
      <p>Minutes</p>
    </div>

    <div>
      <h3 id="seconds">00</h3>
      <p>Seconds</p>
    </div>

  </div>
</div>
          
        </div>
      </div>
    </div>
  </div>
</div>

<!--</header>-->
<!--end of header-->


<!---about section-->
<section id="about" class="bg-white">
    <div class="container-fluid">
      <div class="row">
        <!---about image col-->
        <div class="col-md-12 bg-info about-text height-80 px-5 d-flex align-items-center justify-content-center">
          <div class="text-center">
            <h1 class="display-5 text-dark mb-0">About the Conference</h1>
            <div class="title-underline bg-warning"></div>
            <br><p class="text-dark text-justify">The 1st International Conference on Next-Gen Computing: Converging Microelectronics and Mechatronics for Transformative Solutions (ICCMM-26) is being organized to address emerging challenges and promote the development of intelligent, future-ready solutions. The conference is technically co-sponsored by the IEEE Hyderabad Section, AICTE, Shodhguru and is approved by IEEE with Conference ID: #66375. The conference spotlights cutting-edge research and technological advancements. This conference offers a unique platform for academic and industrial communities to explore new trends, challenges, and emerging technologies relevant to today’s rapidly evolving fields, including computing, microelectronics, and mechatronics. ICCMM-26 features keynote addresses, invited talks, peer-reviewed paper and poster presentations, product exhibitions, and panel discussions. Its goal is to foster collaboration and dynamic discussions to address critical research issues and facilitate the exchange of innovative ideas. By focusing on specific engineering disciplines, the conference allows speakers to engage deeply with topics set to impact the near future. The fields of engineering and technology are both compelling and essential. To stay at the forefront, one must remain vigilant in monitoring the latest trends, identifying key challenges, and engaging in independent research. The primary aim of this two-day conference is to unite experts, researchers, and innovators from academia, research and development, and industry across various engineering and technology sectors. This forum will provide a platform for attendees to learn about current research developments, identify and conceptualize new ideas, and share their valuable insights and findings. Additionally, the conference will feature distinguished keynote speakers to inspire young graduates to consider research as a potential career path. It will also promote interdisciplinary collaboration among researchers, helping to bridge gaps between different fields.</p>
          </div>
        </div>
        
      </div>
    </div>
  </section>
  <!--end of about section-->



    <!---about section-->
<section id="about" class="bg-white">
    <div class="container-fluid">
      <div class="row">
        <!---about image col-->
        <div class="col-md-12 px-5 about-text height-80 d-flex align-items-center justify-content-center">
          <div class="text-center">
            <h1 class="display-5 text-dark mb-0">IEEE Hyderabad Section</h1>
            <div class="title-underline bg-warning"></div>
           

<br><p class="text-dark text-justify">The IEEE Hyderabad Section stands out as one of the most vibrant and active sections of the IEEE community in India. Its journey began in June 1981, when a dedicated group of engineers in Hyderabad took the initiative to establish an IEEE sub-section. Their hard work and determination led to the rapid advancement of this sub-section, which became a full-fledged section in 1984, coinciding with the centenary celebrations of IEEE.</p>

<p class="text-dark text-justify">Today, the IEEE Hyderabad Section proudly encompasses all IEEE members residing in the Indian states of Telangana and Andhra Pradesh, with the exception of those living in the Vizag Bay area. For those interested in learning more about the Section's endeavors and accomplishments, the official website of the IEEE Hyderabad Section provides comprehensive information about its activities and milestones.</p>
<a href="ICCMM-26-28-9-2026.pdf" target="_blank" class="btn btn-lg btn-info m-2">ICCMM Brochure</a>
          </div>
        </div>
        <!---about text col-->
       
      </div>
    </div>
  </section>
  <!--end of about section-->


     <!--<section class="tech-sponsors py-5 text-center">
  <div class="container">
    <h1 class="display-5 text-dark mb-0">In-Kind Sponsors</h1>
    <div class="title-underline bg-warning"></div><br><br>

    <div class="row justify-content-center mt-5">
         
         <div class="col-12 col-sm-6 col-lg-3 mb-4">
        <div class="sponsor-box">
          <a href="https://mjcollege.ac.in/" target="_blank"><img src="img/Logo-14Oct2025.jpg" alt=""></a>
        </div>
      </div>

      <div class="col-12 col-sm-6 col-lg-3 mb-4">
        <div class="sponsor-box">
          <a href="https://ieeehyd.org/" target="_blank"><img src="img/hydsec.webp" alt=""></a>
        </div>
      </div>
      
     </div>
  </div>
</section>-->
    
    <section class="tech-sponsors py-5 text-center">
  <div class="container">
    <h1 class="display-5 text-dark mb-0">Technically Sponsored by IEEE Hyderabad Section</h1>
    <div class="title-underline bg-warning"></div><br><br>

    <div class="row justify-content-center mt-5">
         
         <div class="col-12 col-sm-6 col-lg-3 mb-4">
        <div class="sponsor-box">
          <a href="https://ieeehyd.org/" target="_blank"><img src="img/charminar.webp" alt=""></a>
        </div>
      </div>

      <div class="col-12 col-sm-6 col-lg-3 mb-4">
        <div class="sponsor-box">
          <a href="https://ieeehyd.org/" target="_blank"><img src="img/hydsec.webp" alt=""></a>
        </div>
      </div>
      
     
      
     </div>
  </div>
</section>

<!-- Grant Sponsors Section -->
<section class="tech-sponsors py-5 text-center">
    <div class="container">

        <h1 class="display-5 text-dark mb-0">
           Technically Co-Sponsored by SHODHGURU Research Labs
        </h1>

        <div class="title-underline bg-warning"></div>

        <div class="row justify-content-center mt-5">

            <!-- Shodhguru -->
            <div class="col-12 col-sm-6 col-lg-3 mb-4">
                <div class="sponsor-box">
                    <img src="img/shodhguru.jpeg"
                         alt="Shodhguru">
                </div>
            </div>

            

        </div>
    </div>
</section>
<!-- End Grant Sponsors Section -->

<!-- Grant Sponsors Section -->
<section class="tech-sponsors py-5 text-center">
    <div class="container">

        <h1 class="display-5 text-dark mb-0">
            Financially Supported by AICTE
        </h1>

        <div class="title-underline bg-warning"></div>

        <div class="row justify-content-center mt-5">

            <!-- AICTE -->
            <div class="col-12 col-sm-6 col-lg-3 mb-4">
                <div class="sponsor-box">
                    <img src="img/aicte.jpeg"
                         alt="AICTE">
                </div>
            </div>

            

        </div>
    </div>
</section>
<!-- End Grant Sponsors Section -->


  

<!--filler section-->
<section id="filler" class="p-5">
  <div class="container">
    <div class="row">
      <div class="col-md-10 mx-auto text-center">
        <h1 class="text-light">MJCET</h1>
        <p class="lead text-white">
          Muffakham Jah College of Engineering and Technology (MJCET) was established in the year 1980 by Sultan-ul-Uloom Education Society (SUES) which is formed by a group of visionaries and intellectuals from various walks of life. Today that tiny acorn has developed into a mighty oak.
        </p>
        <a href="https://mjcollege.ac.in/about-mjcet" target="_blank"class="btn btn-lg btn-info m-2">About MJCET</a>
      </div>
    </div>
  </div>
</section>
<!--end filler section-->


     

<!--contact-->
<section id="contact" class="py-5 bg-white">
  <div class="container">
    
    <div class="row">
     <!---about text col-->
        <div class="col-md-6 about-text height-80 px-5 d-flex align-items-center justify-content-center">
          <!---this is for centering-->
          <div class="about-text-center">
  
  <!--title-->
  
        <h1 class="display-5 text-center text-dark mb-0">
          <strong>Important Dates</strong>
        </h1>
        <div class="title-underline bg-warning"></div>
        
      
    <!--end of title-->
    <!---single item-->
    <div class="checkbox-item d-flex m-4">
      <i class="fas fa-chevron-right fa-3x p-2 bg-warning mr-3 align-self-center"></i>
      <p class="text-dark lead">Full Paper Submission Deadline : 30<sup>th</sup> <del>April</del> <del>May</del> June, 2026</p>
    </div>
    <!--end of single item-->
    <!---single item-->
    <div class="checkbox-item d-flex m-4">
      <i class="fas fa-chevron-right fa-3x p-2 bg-warning mr-3 align-self-center"></i>
      <p class="text-dark lead">Review Notification : 31<sup>st</sup> August, 2026</p>
    </div>
    <!--end of single item-->
      <!---single item-->
    <div class="checkbox-item d-flex m-4">
        <i class="fas fa-chevron-right fa-3x p-2 bg-warning mr-3 align-self-center"></i>
        <p class="text-dark lead">Early Bird Registration Deadline : 1<sup>st</sup> September, 2026</p>
      </div>
      <!--end of single item-->
      <!---single item-->
    <div class="checkbox-item d-flex m-4">
        <i class="fas fa-chevron-right fa-3x p-2 bg-warning mr-3 align-self-center"></i>
        <p class="text-dark lead">Registration Deadline : 10<sup>th</sup> <del>September</del> October, 2026</p>
      </div>
      <!--end of single item-->
      <!---single item-->
    <div class="checkbox-item d-flex m-4">
        <i class="fas fa-chevron-right fa-3x p-2 bg-warning mr-3 align-self-center"></i>
        <p class="text-dark lead">Submission of Camera Ready Paper : 10<sup>th</sup> <del>September</del> October, 2026</p>
      </div>
      <!--end of single item-->
      <!---single item-->
    <div class="checkbox-item d-flex m-4">
        <i class="fas fa-chevron-right fa-3x p-2 bg-warning mr-3 align-self-center"></i>
        <p class="text-dark lead">Submission of Electronic IEEE Copyright Form : 10<sup>th</sup> October, 2026</p>
      </div>
      <!--end of single item-->
      <!---single item-->
    <div class="checkbox-item d-flex m-4">
        <i class="fas fa-chevron-right fa-3x p-2 bg-warning mr-3 align-self-center"></i>
        <p class="text-dark lead">Release of Final Conference Program : 30<sup>th</sup> October, 2026</p>
      </div>
      <!--end of single item-->
  
          </div>
        </div>
      
      <!--google maps-->
      <div class="col-md-6 my-3">
<h2 class="text-center m-4">Location</h2>
        <div class="embed-responsive embed-responsive-4by3">
          <iframe class="embed-responsive-item"src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3806.6563931731494!2d78.4406593143538!3d17.42826990621324!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb90d333154ddb%3A0xfcf718680e41f674!2sMuffakham+Jah+College+Of+Engineering+And+Technology!5e0!3m2!1sen!2sin!4v1561197119566!5m2!1sen!2sin" width="600" height="750" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>
</section>
<!--end of contact-->


       


     
<!--main footer section-->
<section id="skills" class="py bg-info">
    <div class="container">
      <div class="row">
  <!--single col-->
  <!--<div class="col-md-6 col-lg-4 text-center my-4">
    <i class="fas fa-home fa-2x text-danger"></i>
    <h5 class="text-uppercase text-center my-3">ICCMM-2025</h5>
    <p class="text-dark text-justify m-4 p-2">Welcome to the official website of 1st IEEE International Conference on Recent Advances in Computing, Microelectronics and Mechatronics (ICCMM-2025). It is going to be held on 23rd - 24th December 2025 at MJCET, Hyderabad.</p>
    <a href="#" class="btn btn-outline-danger btn-block text-uppercase">press here</a>
  </div>-->
  <!--end of single column-->
  <!--single col-->
  <div class="col-md-6 col-lg-6 text-center my-4">
      
      <h5 class="text-uppercase text-left my-3">useful links</h5>
      
        <p class="text-left m-4 p-2"><a class="text-dark" href="index.php">Home</a><br>
        <a class="text-dark" href="call.php">Call for Paper</a><br>
        <a class="text-dark" href="registration.php">Registration</a><br>
        <a class="text-dark" href="committees.php">Committee</a><br>
        <a class="text-dark" href="sponsors.php">Sponsors & Exhibitors</a><br>
        <a class="text-dark" href="contactus.php">Contact Us</a></p>
      
      
     
    </div>
    <!--end of single column-->
    <!--single col-->
  <div class="col-md-6 col-lg-6 text-left my-4 text-dark">
      <h5 class="text-uppercase text-center my-3 text-dark">contact info</h5>
      <i class="fas fa-map-marker-alt fa-2x text-light"></i>
      <a class="text-dark" href="#contact">Mount Pleasant, 8-2-249 to 267, 
          Road No. 3, Banjara Hills, 
          Hyderabad - 500 034, Telangana State, India</a><br>
      
      <i class="fas fa-envelope-square fa-2x text-light"></i>
      <a class="text-dark" href="mailto:iccmm@mjcollege.ac.in">iccmm@mjcollege.ac.in</a>
    </div>
    <!--end of single column-->
    <!--single col-->
  <!--<div class="col-md-6 col-lg-3 text-center my-4">
    <h5 class="text-uppercase my-3">connect with us</h5>
      <i class="fab fa-facebook fa-2x text-light m-2"></i>
      <i class="fab fa-twitter fa-2x text-light m-2"></i>
      <i class="fab fa-instagram fa-2x text-light m-2"></i>
      <i class="fab fa-google-plus fa-2x text-light m-2"></i>-->
      
      
   
    </div>
    <!--end of single column-->
      </div>
    </div>
  </section>
  <!--end of main footer section-->  



         
      
       

<!--footer section-->
<footer id="footer" class="bg-light">
  <div class="container">
      <div class="row">
        <div class="col text-center">
          <p class="text-dark p-2"><strong>Copyright &copy;2025 ICCMM-2026. All Rights Reserved.</strong></p>
        </div>
        <!--<a id="back-to-top" href="#" class="btn btn-info btn-lg back-to-top" role="button" data-toggle="tooltip" data-placement="left"><i class="fas fa-2x fa-angle-up"></i></a>-->
      </div>
      
  </div>
</footer>

<!--end of footer section-->




</body>
</html>