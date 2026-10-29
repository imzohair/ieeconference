<?php
  $host="localhost";
  $username="kareemwebadmin";
  $password="kareem_123!@#";
  $databasename="mjcollege2013";

  $connect=mysql_connect($host,$username,$password);
  $db=mysql_select_db($databasename);

  // gets the user IP Address
  $user_ip=$_SERVER['REMOTE_ADDR'];

  $check_ip = mysql_query("select userip from raceiview where page='yourpage' and userip='$user_ip'");
  if(mysql_num_rows($check_ip)>=1)
  {
	
  }
  else
  {
    $insertview = mysql_query("insert into raceiview values(' ','yourpage','$user_ip')");

  }
?>
  <?php
$result = mysql_query("SELECT * FROM raceiview where page='yourpage'");
?>
  



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

    <title>RACEI-2019</title>


    <!---- font awesome ---->
    <script defer src="./js/all.js"></script>

    <!---- google fonts ---->
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    
    <!--- main css ----->
    <link rel="stylesheet"  href="./css/main.css">
    <link rel="stylesheet"  href="./css/tab.css">

</head>

<body>


 <!--main contact section-->
<section id="contact1" class="py bg-info">
    <div class="container-fluid">
      <div class="row">
  <!--single col-->
  <div class="col-md-6 col-lg-3 text-center my-4">
    <a href="http://mjcollege.ac.in/" target="_blank"><img align="center" height="80" src="img/mjlogo.png" alt="sues"></a>
 
  </div>
  <!--end of single column-->
  <!--single col-->
  <div class="col-md-6 col-lg-3 text-center my-4">
      <i class="fas fa-envelope-square fa-2x text-white"></i>
      
      <a href="mailto:racei19.ced@mjcollege.ac.in"><p class="text-white">racei19.ced@mjcollege.ac.in</p></a>
     
    </div>
    <!--end of single column-->
    <!--single col-->
  <div class="col-md-6 col-lg-3 text-center my-4">
      <i class="fas fa-map-marker-alt fa-2x text-white"></i>
      
     <p class="text-white">Hyderabad, Telangana</p>
      
    </div>
    <!--end of single column-->
    <!--single col-->
  <div class="col-md-6 col-lg-3 text-center my-4">
      <i class="fas fa-phone-alt fa-2x text-white"></i>
      
      <p class="text-white">+91-40 23280321<br>Office : 9:30 AM to 3:30 PM</p>
    </div>
    <!--end of single column-->
      </div>
    </div>
  </section>
  <!--end of main contact section-->


  
   
      <nav class="navbar shift bg-info navbar-expand-sm sticky-top">
          <button class="navbar-toggler navbar-light" type="button" data-toggle="collapse" data-target="#navbarLinks">
              <span class="navbar-toggler-icon"></span>
            </button>
      <div class="collapse navbar-collapse" id="navbarLinks">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item active"><a href="http://mjcollege.ac.in/civil/racei.php" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
          <li class="nav-item"><a href="call.php" class="nav-link">Call for Paper</a></li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button">Registration/Paper Submission</a>
            <div class="dropdown-menu bg-info">
              <a class="dropdown-item" href="https://docs.google.com/forms/d/e/1FAIpQLScSS2V3JgwF5VRMF2Xkcc8XvmM46ohYaD4KeJDMllP5h8HSOA/viewform?usp=sf_link" target="_blank">Author</a>
              <a href="https://docs.google.com/forms/d/e/1FAIpQLSfzgxHFtkCeqsEEeaL-_1DOJUb3TOWE7ZelTdVstAKSxIRQ0A/viewform?usp=sf_link" class="dropdown-item" target="_blank">Delegate</a>
            </div>
          </li>
          <li class="nav-item"><a href="committee.php" class="nav-link">Committee</a></li>
  <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button">Downloads</a>
            <div class="dropdown-menu bg-info">
              <a class="dropdown-item" href="http://mjcollege.ac.in/civil/racei/International Conference-RACEI-2019_CED MJCET brochure.pdf" target="_blank">Conference Brouchure</a>
              <a href="IJRTE_Paper_Template .doc" class="dropdown-item">Sample Abstract/Paper</a>
            </div>
          </li>
          <li class="nav-item"><a href="https://www.google.co.in/maps/search/Hotels/@17.4282953,78.4340932,15z/data=!3m1!4b1!4m8!2m7!3m6!1sHotels!2sMuffakham+Jah+College+Of+Engineering+And+Technology,+Rd+Number+3,+Venkateshwara+Hills,+Banjara+Hills,+Hyderabad,+Telangana+500034!3s0x3bcb90d333154ddb:0xfcf718680e41f674!4m2!1d78.442848!2d17.4282648" target="_blank" class="nav-link">Hotels Nearby</a></li>
          <li class="nav-item"><a href="faq.php" class="nav-link">FAQ</a></li>
          <li class="nav-item"><a href="venue.php" class="nav-link">Venue</a></li>
          <li class="nav-item"><a href="contactus.php" class="nav-link">Contact Us</a></li>
        </ul>
      </div>
      </nav>
  
   
      
      

<!--header-->
<header id="header1" class="p-5">
  <div class="container">
    <div class="row">
      <div class="col-md-6 mx-auto text-center">
        <h1 class="text-light text-uppercase font-weight-bold">
          <p class="text-light">FAQ's</p>
        </h1>
     
       
      </div>
    </div>
  </div>
</header>
<!--end of header-->


<!---about section-->
<section id="about" class="bg-white">
    <div class="container-fluid">
      <div class="row">
        <!---about text col-->
        <div class="col-md-6 height-80 m-5 mx-auto">
          <!---this is for centering-->
          <div class="about-text-center">
  

    <!---single item-->
    <div class="checkbox-item d-flex m-4">
      <i class="fas fa-chevron-right fa-3x p-2 bg-warning mr-3 align-self-center"></i>
      <p class="text-dark"><b>Q. How do I register for the Conference?</b><br>You need to first do Online Payment through NEFT. You can find the prices for different categories in the Registration/Paper Submission page and then for registration go to the Registration/Paper Submission page. This is for both Speakers and Delegates. Select the respective category and proceed further to confirm your participation. To complete the registration, online payment is necessary.</p>
    </div>
    <!--end of single item-->
    <!---single item-->
    <div class="checkbox-item d-flex m-4">
        <i class="fas fa-chevron-right fa-3x p-2 bg-warning mr-3 align-self-center"></i>
        <p class="text-dark"><b>Q. I haven't had confirmation of my Conference booking yet, when should I expect it?</b><br>Once the payment has been received, we will email you a registration acknowledgement.</p>
      </div>
      <!--end of single item-->
      <!---single item-->
    <div class="checkbox-item d-flex m-4">
        <i class="fas fa-chevron-right fa-3x p-2 bg-warning mr-3 align-self-center"></i>
        <p class="text-dark"><b>Q. I need an invitation letter to the Conference, how do i get one?</b><br>Invitation letter is provided, who require an invitation to assist with their travel visa application. Regarding the same you can directly contact the respective conference convenor through an email.</p>
      </div>
      <!--end of single item-->
 <!---single item-->
    <div class="checkbox-item d-flex m-4">
        <i class="fas fa-chevron-right fa-3x p-2 bg-warning mr-3 align-self-center"></i>
        <p class="text-dark"><b>Q. I think I have paid twice, what should I do?</b><br>Contact the Convenor through email or you may directly contact at racei19.ced@mjcollege.ac.in</p>
      </div>
      <!--end of single item-->

   
  
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--end of about section-->



 
  
            





          
      

     
     
      
      

       


     
<!--main footer section-->
<section id="skills" class="py bg-info">
    <div class="container">
      <div class="row">
  <!--single col-->
  <div class="col-md-6 col-lg-4 text-center my-4">
    
    <h5 class="text-uppercase text-center my-3">RACEI-2019</h5>
    <p class="text-dark text-justify">Welcome to the official website of International Conference on Recent Advances in Civil Engineering Infrastructure (RACEI-19). It is going to be held on 16th - 18th December 2019 at MJCET, Hyderabad. RACEI-19 is being organized by Civil Engg. Dept. in MJCET</p>
    
  </div>
  <!--end of single column-->
  <!--single col-->
  <div class="col-md-6 col-lg-4 text-center my-4">
      
      <h5 class="text-uppercase my-3">useful links</h5>
      
        <p class="text-left m-4 p-2"><a class="text-dark" href="http://mjcollege.ac.in/civil/racei.php">Home</a><br>
        <a class="text-dark" href="call.php">Call for Paper</a><br>
        <a class="text-dark" href="#navbarLinks">Registration</a><br>
        <a class="text-dark" href="committee.php">Committee</a><br>
        <a class="text-dark" href="faq.php">FAQ</a><br>
        <a class="text-dark" href="contactus.php">Contact Us</a></p>
      
      
     
    </div>
    <!--end of single column-->
    <!--single col-->
  <div class="col-md-6 col-lg-4 text-left my-4 text-dark">
      <h5 class="text-uppercase text-center my-3 text-dark">contact info</h5>
      <i class="fas fa-map-marker-alt fa-2x text-light"></i>
      <a class="text-dark" href="#contact">Mount Pleasant, 8-2-249 to 267, 
          Road No. 3, Banjara Hills, 
          Hyderabad - 500 034, Telangana State, India</a><br>
      <i class="fas fa-phone-alt fa-2x text-light"></i>&nbsp;+91-40 23280321<br>
      <i class="fas fa-envelope-square fa-2x text-light"></i>
      <a class="text-dark" href="mailto:racei19.ced@mjcollege.ac.in">racei19.ced@mjcollege.ac.in</a>
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
          <p class="text-dark p-2"><strong>Copyright &copy;2019 RACEI-2019. All Rights Reserved. This page is viewed <?php echo mysql_num_rows($result);?> times</strong></p>
        </div>
        <a id="back-to-top" href="#" class="btn btn-info btn-lg back-to-top" role="button" data-toggle="tooltip" data-placement="left"><i class="fas fa-2x fa-angle-up"></i></a>
      </div>
      
  </div>
</footer>

<!--end of footer section-->




</body>
</html>