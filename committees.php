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
        .committee {
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
            color: #333;
        }
        h1 {
            text-align: center;
            color: #2c3e50;
        }
        h4, h5 {
            color: #2980b9;
        }
        .section-title {
            font-weight: bold;
            color: #2980b9;
        }
        .wrapper {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        .committee-list {
            margin-bottom: 20px;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .committee-list p, .committee-list ul {
            margin: 5px 0;
        }
        ul {
            list-style-type: none;
            padding-left: 20px;
        }
        li {
            margin: 5px 0;
        }

        /* Responsive design */
        @media (max-width: 768px) {
            h1 {
                font-size: 1.5em;
            }
            .committee-list {
                padding: 10px;
            }
            .committee-list p {
                font-size: 0.9em;
            }
            .committee-list ul {
                padding-left: 15px;
            }
        }

        @media (max-width: 480px) {
            h1 {
                font-size: 1.2em;
            }
            .committee-list {
                padding: 8px;
            }
            .committee-list p {
                font-size: 0.8em;
            }
            .committee-list ul {
                padding-left: 10px;
            }
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
          <p class="text-light">Committee</p>
          
        </h1>
       
      </div>
    </div>
  </div>
</header>
<!--end of header-->

<div class="wrapper">
<div class="committee">
  <div class="committee-list">
        <h4>Chief Patron</h4>
        <p>Janab Zafar Javeed, Hony Secretary, SUES</p>
    </div>

    <div class="committee-list">
        <h4>Patron</h4>
        
        <p>S. Srinivasa Rao, MJCET, Hyderabad</p>
        <p>MGPL Narayana, Chair-IEEE Hyderabad Section, Hyderabad</p>
    </div>

    <div class="committee-list">
        <h4>Co Patron</h4>
        <p>K.V Narsimha Rao, MJCET</p>
        <p>Syed Ferhathullah Hussainy, MJCET, Hyderabad</p>
        <p>Mohd. Hamraj, MJCET, Hyderabad</p>
    </div>

    <div class="committee-list">
        <h4>General Chairs</h4>
        <p>Tasneem Bano Rehman, CSED, MJCET, Hyderabad</p>
        <p>Marina Tropmann Frick, University of Applied Science (HAW), Hamburg, Germany</p>
    </div>

    <div class="committee-list">
        <h4>General Co Chairs</h4>
        <p>Ayesha Naaz, ECED, MJCET, Hyderabad</p>
        <p>G. Sailaja, MED, MJCET, Hyderabad</p>
        <p>Fernando Ortiz Rodriguez, Universidad Autonoma de Tamaulipas, Mexico</p>
    </div>

    <div class="committee-list">
        <h4>Conference Chairs</h4>
        <p>Syed Shabbeer Ahmed, CSED, MJCET, Hyderabad</p>
        <p>Viquar Mohiuddin, MED, MJCET, Hyderabad</p>
        <p>Arif Sohel, Head, Research and Development, ACES India</p>
        <p>Jehad Ali, Ajou University, South Korea</p>
        
        
    </div>

    <div class="committee-list">
        <h4>Conference Co Chair</h4>
        
        <p>Sabir Hussain, ECED, MJCET, Hyderabad</p>
        <p>Ishrat Meera Mirzana, MED, MJCET, Hyderabad</p>
        <p>A. H. Abdul Hafez, King Faisal University, Al Hofuf, KSA</p>
    </div>

    <div class="committee-list">
        <h4>Track Chairs</h4>
        
            <h5>Track-1</h5>
            <p>Meenu Chawala, MANIT, Bhopal</p>
            <p>M A Jabbar, Vardhaman College of Engineering, Hyderabad</p>
            
            <h5>Track-2</h5>
            <p>Dr. K. Jaya Sankar, Dean - Industry Partnerships and Outreach, Methodist College of Engineering and Technology (MCET) </p>
            <p>P Koti Lakshmi, Osmania Uinversity, Hyderabad</p>
            
            <h5>Track-3</h5>
            <p>Saraswathamma, Department of Mechanical Engineering Osmania University, Hyderabad.</p>
            <p>C. Thirmal, Assistant Professor, Dept. Of Physics, VNRVJIET, Chair, IEEE-NTC, Hyderabad Section.</p>
            
            <h5>Track-4</h5>
            <p>Durgesh Mishra, Chairman IEEE Computer Society (MP), Director Symbiosis University of Applied Sciences, Indore </p>
            <p>Rupam Sharma, Rajiv Gandhi University, Arunachal Pradesh</p>
            
        
    </div>

    <div class="committee-list">
        <h4>Finance Chairs</h4>
        <p>Maniza Hijab, CSED, MJCET, Hyderabad</p>
        <p>Nazeerunissa, ECED, MJCET, Hyderabad</p>
        <p>Sanju Tiwari, Sharda University, Greater Noida, UP and TIB Hannover, Germany</p>
        <p>Qutubuddin S M, PDA College of Engineering, Gulbarga</p>
        
    </div>

    <div class="committee-list">
        <h4>Publication Chairs</h4>
        <p>Jyoti Singhai, MANIT, Bhopal</p>
        <p>Arshad Mohammed, EED, MJCET, Hyderabad</p>
        <p>Gouri R Patil, CSED, Hyderabad</p>
        <p>Irfan Sadaq, MED, MJCET, Hyderabad</p>
        
    </div>

    <div class="committee-list">
        <h4>Advisory/Steering Committee</h4>
            
            <p>C Krishna Mohan, IIT, Hyderabad</p>
            <p>Debajyoty Banik, Anurag University, Hyderabad</p>
            <p>Uma Dulhare, IEEE Hyderabad Section</p>
            <p>Murtuza Rizvi, NITTTR, Bhopal</p>
            <p>JVR Ravindra, IEEE CAS/EDS Society</p>
            <p>Ghanshyam Singh, NIT Jaipur</p>
            <p>Mohan Raidu, IEEE Computer Society</p>
            <p>M Farukh Hashmi, NIT, Warangal</p>
            <p>Ahmed A Kishk, Concordia University, Montreal, Canada</p>
            <p>Ahad Ali, Lawrence Technological University, Michigan, USA</p>
            <p>Adekunle Ibrahim Musa, Olabisi Onabanjo University, Nigeria</p>
            <p>M A Raheem, ECED, MJCET, Hyderabad</p>
            <p>G Krishnamohan, JNTU, Hyderabad</p>
            <p>Ajay Kumar, Bennette University, Greater Noida</p>
        
    </div>

    <div class="committee-list">
        <h4>Technical Program Committee</h4>
        
            <p>Fahmina Taranum, CSED, MJCET, Hyderabad</p>
            <p>Nazia Parveen, ECED, MJCET, Hyderabad</p>
            <p>Phani R.Katuru, Director SAP Consulting, KEA Tech Solutions LLC, Dallas, USA</p>
            <p>Santhosh Kumar Gugulothu, NIT, Andhra Pradesh</p>
            <p>Mushtaq Ahmed, NIT, Jaipur</p>
            <p>Arshia Azam, MANUU, Hyderabad</p>
            <p>Mona Z Saleh, Ain Shams University, Egypt</p>
            <p>Amandeep Kaur, GTBIT, New Delhi</p>
            <p>Renu Mishra, Sharda University, Greater Noida</p>
            
        
    </div>

    <div class="committee-list">
        <h4>Publicity Committee</h4>
        
            <p>Hashim Ali, MED, MJCET, Hyderabad</p>
            <p>Iftekharuddin, ECED, MJCET, Hyderabad</p>
            <p>Sayyada Hajera Begum, CSED, Hyderabad</p>
            <p>P.Yagnasri, School of Engineering University of Greenwich, Greenwich, London</p>
            <p>Anazida Bt Zinal, Universiti Teknologi, Malaysia</p>
            <p>Gourav Shrivastava, Sage University, Bhopal</p>
            
            
        
    </div>

    <!--<div class="committee-list">
        <h4>Organizing Committee</h4>
        <p>Shubhangi Saxena, ECED, MJCET, Hyderabad</p>
        <p>Salma Fauzia, ECED, MJCET, Hyderabad</p>
        <p>Mohd. Muneeruddin, ECED, MJCET, Hyderabad</p>
    </div>-->
 </div>
 </div>
       
       
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