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
    <link rel="stylesheet"  href="./css/main.css">
    <link rel="stylesheet"  href="./css/tab.css">
    
    
    <!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    
<style>
  table {
    width: 100%;
    border-collapse: collapse;
    text-align: center;
  }
  th, td {
    border: 1px solid #ddd;
    padding: 10px; /* Add padding around table elements */
  }
  th {
    background-color: #f2f2f2; /* Optional: Adds a light background to header */
    font-weight: bold;
  }
  tr:hover {
    background-color: #f9f9f9; /* Optional: Highlight rows on hover */
  }
</style>

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
<header id="header1" class="p-5">
  <div class="container">
    <div class="row">
      <div class="col-md-6 mx-auto text-center">
        <h1 class="text-light text-uppercase font-weight-bold">
          <p class="text-light">Registration</p>
          
        </h1>
       
      </div>
    </div>
  </div>
</header>
<!--end of header-->



  <div class="container-fluid">
      <div class="row pt-5 align-items-center justify-content-center">
          <div class="col-md-10">
          <div style="overflow-x: auto;">
          <!--<table class="p-3 mb-5">-->
          <table>
              <tr>
                  <th>S.No</th>
                  <th>Category</th>
                  
                  <!--<th>Early Bird (Indian) + 18% GST in INR*</th>
                  <th>Early Bird (International) in USD*</th>-->
                  <th>Regular (Indian) + 18% GST in INR*</th>
                  <th>Regular (International) in USD*</th>
                  <!--<th>On-Spot (Indian) + 18% GST in INR*</th>
                  <th>On-Spot (International) in USD*</th>-->
              </tr>
              <tr>
                  <td>1</td>
                  <td>Student</td>
                  <!--<td>8142</td>
                  <td>100</td>-->
                  <td>9499</td>
                  <td>125</td>
                  <!--<td>10856</td>
                  <td>200</td>-->
              </tr>
              <tr>
                  <td>2</td>
                  <td>Student (IEEE Member)</td>
                  <!--<td>7080</td>
                  <td>75</td>-->
                  <td>8260</td>
                  <td>100</td>
                  <!--<td>9440</td>
                  <td>125</td>-->
              </tr>
              <tr>
                  <td>3</td>
                  <td>Academician</td>
                  <!--<td>10856</td>
                  <td>150</td>-->
                  <td>12213</td>
                  <td>175</td>
                  <!--<td>13570</td>
                  <td>200</td>-->
              </tr>
              <tr>
                  <td>4</td>
                  <td>Academician (IEEE member)</td>
                  <!--<td>9440</td>
                  <td>125</td>-->
                  <td>10620</td>
                  <td>150</td>
                  <!--<td>11800</td>
                  <td>175</td>-->
              </tr>
              <tr>
                  <td>5</td>
                  <td>Researcher/Industrialist</td>
                  <!--<td>12213</td>
                  <td>175</td>-->
                  <td>13570</td>
                  <td>200</td>
                  <!--<td>14927</td>
                  <td>225</td>-->
              </tr>
              <tr>
                  <td>6</td>
                  <td>Researcher/Industrialist (IEEE member)</td>
                  <!--<td>10620</td>
                  <td>150</td>-->
                  <td>11800</td>
                  <td>175</td>
                  <!--<td>12980</td>
                  <td>200</td>-->
              </tr>
              <tr>
                  <td>7</td>
                  <td>Accommodation- (for 2 night)</td>
                  <!--<td>11800</td>
                  <td>200</td>-->
                  <td>17700</td>
                  <td>250</td>
                  <!--<td>-</td>
                  <td>-</td>-->
              </tr>
              <!--<tr>
                  <td>8</td>
                  <td>Additional Page*</td>
                  <td>800</td>
                  <td>15</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
              </tr>-->
          </table>
          <br><br>
          <table>
              <tr>
                  <th>S.No</th>
                  <th>Category</th>
                  <th>Registration Fee(INR)</th>
              </tr>
              <tr>
                  <td>1.</td>
                  <td>Attendee</td>
                  <td>2000</td>
              </tr>
              <tr>
                  <td>2.</td>
                  <td>Poster Presentation</td>
                  <td>2000 upto 2 participants / 1000 per participant</td>
              </tr>
              <tr>
                  <td>3.</td>
                  <td>Best PhD / M.Tech Thesis Presentation</td>
                  <td>2000 </td>
              </tr>
          </table>
          </div>
          </div>
          
          
      </div>
  </div>
 
    <div class="container-fluid">
<div class="row px-5 m-5 d-flex align-items-center justify-content-center">  
<p class="text-dark text-justify">* : excluding GST</p>
<p class="text-dark text-justify">The regular fee will be charged upto 6 pages and after that extra fee charges will be applicable beyond 6 pages (up to 2 additional pages). The extra page charge: 1200/page (for Indian Author) and $25/page ( for Foreign authors).</p>
          <p class="text-dark text-justify">For detailed instruction on preparation, submission of paper and all conference related information, please click <a href="guidelines.php" target="_blank">HERE</a>.</p>
          <p class="text-dark text-justify">CMT ACKNOWLEDGMENT: The Microsoft CMT service was used for managing the peer-reviewing process for this conference. This service was provided for free by Microsoft and they bore all expenses, including costs for Azure cloud services as well as for software development and support.</p>
          <h3 class="text-dark text-justify"><a href="https://forms.gle/FNqxcHyGMeNNwZrW6" target="_blank">Conference Registration Form</a></h3>
</div></div>
       
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