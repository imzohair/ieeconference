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
          <p class="text-light">Committee</p>
        </h1>
        
       
      </div>
    </div>
  </div>
</header>
<!--end of header-->



     
      
 <!----team section-->
<section id="team" class="py-5 bg-light">
  <div class="container">
    <!--title-->
    <div class="row">
        <div class="col text-center m-5">
          <h2 class="text-uppercase text-dark mb-0">
            <strong>Patrons</strong>
          </h2>
          <div class="title-underline bg-warning"></div>
        </div>
      </div>
      <!--end of title-->
      <div class="row">
        <!---team memeber-->
        <div class="col-md-6 col-lg-4 my-3 mx-auto">
          <div class="card">
            <img src="img/chairman.jpg" alt="member" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title text-capitalize">mr. khan lateef mohammed khan</h5>
              <p class="card-text">Chairman, Sultan-Ul-Uloom Education Society</p>
             <!--<a href="http://mjcollege.ac.in/about/chairman.php" target="_blank" class="btn btn-outline-info text-uppercase">press here</a>-->
            </div>
          </div>
        </div>
        <!---end team memeber-->
        <!---team memeber-->
        <div class="col-md-6 col-lg-4 my-3 mx-auto">
            <div class="card">
              <img src="img/secretary.jpg" alt="member" class="card-img-top">
              <div class="card-body">
                <h5 class="card-title text-capitalize">mr. zafar javeed</h5>
                <p class="card-text">Hon. Secretary, Sultan-Ul-Uloom Education Society</p>
                <!--<a href="" target="_blank" class="btn btn-outline-info text-uppercase">press here</a>-->
              </div>
            
            </div>
          </div>
          <!---end team memeber-->
</div>




 <div class="row">
        <div class="col text-center m-5">
          <h2 class="text-uppercase text-dark mb-0">
            <strong>Chairman</strong>
          </h2>
          <div class="title-underline bg-warning"></div>
        </div>
      </div>
      <!--end of title-->
      <div class="row">
          <!---team memeber-->
        <div class="col-md-6 col-lg-4 my-3 mx-auto">
            <div class="card">
              <img src="img/director.jpg" alt="member" class="card-img-top">
              <div class="card-body">
                <h5 class="card-title text-capitalize">prof. basheer ahmed</h5>
                <p class="card-text">Advisor cum Director</p>
                <a href="http://mjcollege.ac.in/director/index.php" target="_blank" class="btn btn-outline-info text-uppercase">press here</a>
              </div>
             
            </div>
          </div>
          <!---end team memeber-->
</div>



<div class="row">
        <div class="col text-center m-5">
          <h2 class="text-uppercase text-dark mb-0">
            <strong>Co-Chairman</strong>
          </h2>
          <div class="title-underline bg-warning"></div>
        </div>
      </div>
      <!--end of title-->
      <div class="row">
          <!---team memeber-->
        <div class="col-md-6 col-lg-4 my-3 mx-auto">
            <div class="card">
              <img src="img/principal.jpg" alt="member" class="card-img-top">
              <div class="card-body">
                <h5 class="card-title text-capitalize">prof. n. seetharamaiah</h5>
                <p class="card-text">Principal (I/C), MJCET</p>
                <a href="http://mjcollege.ac.in/about/principal.php" target="_blank" class="btn btn-outline-info text-uppercase">press here</a>
              </div>
             
            </div>
          </div>
          <!---end team memeber-->
</div>




<div class="row">
        <div class="col text-center m-5">
          <h2 class="text-uppercase text-dark mb-0">
            <strong>Convenor</strong>
          </h2>
          <div class="title-underline bg-warning"></div>
        </div>
      </div>
      <!--end of title-->
      <div class="row">
          <!---team memeber-->
        <div class="col-md-6 col-lg-4 my-3 mx-auto">
            <div class="card">
              <img src="img/convenor.jpg" alt="member" class="card-img-top">
              <div class="card-body">
                <h5 class="card-title text-capitalize">prof. mohd. hamraj</h5>
                <p class="card-text">Head, Department of Civil Engg., MJCET</p>
                <a href="http://mjcollege.ac.in/civil/staffdetails.php?facultyID=32&FacultyDept=CED" target="_blank" class="btn btn-outline-info text-uppercase">press here</a>
              </div>
             
            </div>
          </div>
          <!---end team memeber-->
</div>




<div class="row">
        <div class="col text-center m-5">
          <h2 class="text-uppercase text-dark mb-0">
            <strong>Chairman, Technical committee</strong>
          </h2>
          <div class="title-underline bg-warning"></div>
        </div>
      </div>
      <!--end of title-->
      <div class="row">
          <!---team memeber-->
        <div class="col-md-6 col-lg-4 my-3 mx-auto">
            <div class="card">
              
              <div class="card-body">
                <h5 class="card-title text-capitalize">prof. ashfaque jafari</h5>
                <p class="card-text">Dean (Academics) and Professor, Department of Civil Engg., MJCET</p>
                <a href="http://mjcollege.ac.in/civil/staffdetails.php?facultyID=291&FacultyDept=CED" target="_blank" class="btn btn-outline-info text-uppercase">press here</a>
              </div>
             
            </div>
          </div>
          <!---end team memeber-->
</div>









<div class="row">
        <div class="col text-center m-5">
          <h2 class="text-uppercase text-dark mb-0">
            <strong>Co-ordinators</strong>
          </h2>
          <div class="title-underline bg-warning"></div>
        </div>
      </div>


<div class="row">
          <!---team memeber-->
        <div class="col-md-6 col-lg-4 my-3">
            <div class="card">
             <!-- <img src="img/drmoinuddin_ahmed.jpg" alt="member" class="card-img-top">-->
              <div class="card-body">
                <h5 class="card-title text-capitalize">prof. moinuddin ahmed</h5>
                <p class="card-text">Professor, Department of Civil Engg., MJCET</p>
                <a href="http://mjcollege.ac.in/civil/staffdetails.php?facultyID=145&FacultyDept=CED" target="_blank" class="btn btn-outline-info text-uppercase">press here</a>
             </div>
            </div>
          </div>
          <!---end team memeber-->
          <!---team memeber-->
        <div class="col-md-6 col-lg-4 my-3">
            <div class="card">
             
              <div class="card-body">
                <h5 class="card-title text-capitalize">prof . md. abdullah sharif</h5>
                <p class="card-text">Professor & Co-ordinator M.E. (Structural Engg.), Department of Civil Engg., MJCET</p>
                <a href="http://mjcollege.ac.in/civil/staffdetails.php?facultyID=134&FacultyDept=CED" target="_blank" class="btn btn-outline-info text-uppercase">press here</a>
             </div>
            </div>
          </div>
          <!---end team memeber-->
          <!---team memeber-->
        <div class="col-md-6 col-lg-4 my-3">
            <div class="card">
             
              <div class="card-body">
                <h5 class="card-title text-capitalize">mr. Shakeel Ayjaz</h5>
                <p class="card-text">Associate Professor and Associate Head, Department of Civil Engg., MJCET</p>
                <a href="http://mjcollege.ac.in/civil/staffdetails.php?facultyID=49&FacultyDept=CED" target="_blank" class="btn btn-outline-info text-uppercase">press here</a>
             </div>
            </div>
          </div>
          <!---end team memeber-->
</div>







<div class="row">
          <!---team memeber-->
        <div class="col-md-6 col-lg-4 my-3">
            <div class="card">
             
              <div class="card-body">
                <h5 class="card-title text-capitalize">mr. d. ram mohan rao</h5>
                <p class="card-text">Associate Professor, Department of Civil Engg., MJCET</p>
                <a href="http://mjcollege.ac.in/civil/staffdetails.php?facultyID=251&FacultyDept=CED" target="_blank" class="btn btn-outline-info text-uppercase">press here</a>
             </div>
            </div>
          </div>
          <!---end team memeber-->
          <!---team memeber-->
        <div class="col-md-6 col-lg-4 my-3">
            <div class="card">
             
              <div class="card-body">
                <h5 class="card-title text-capitalize">mr. Toufeeq Anwar</h5>
                <p class="card-text">Associate Professor, Department of Civil Engg., MJCET</p>
                <a href="http://mjcollege.ac.in/civil/staffdetails.php?facultyID=154&FacultyDept=CED" target="_blank" class="btn btn-outline-info text-uppercase">press here</a>
             </div>
            </div>
          </div>
          <!---end team memeber-->
          <!---team memeber-->
        <div class="col-md-6 col-lg-4 my-3">
            <div class="card">
              
              <div class="card-body">
                <h5 class="card-title text-capitalize">dr. qamar sultana</h5>
                <p class="card-text">Associate Professor, Department of Civil Engg., MJCET</p>
                <a href="http://mjcollege.ac.in/civil/staffdetails.php?facultyID=56&FacultyDept=CED" target="_blank" class="btn btn-outline-info text-uppercase">press here</a>
             </div>
            </div>
          </div>
          <!---end team memeber-->
      </div>

</div>


<div class="container-fluid bg-info">
<div class="row">
        <div class="col text-center m-5">
          <h2 class="text-uppercase text-white mb-0">
            <strong>International Advisory Committee</strong>
          </h2>
          <div class="title-underline bg-warning"></div>
        </div>
      </div>
<div class="row">
          <!---team memeber-->
        <div class="col-md-6 col-lg-6 my-3">
<p><img src="img/Dr. Adnan Altay Altinors.jpg" alt="Dr. Adnan Altay Altinors" width="100" height="100"><b class="lead"> Dr. Adnan Altay Altinors</b>, Consul General Turkey</p>
<p><img src="img/Prof.Chongmin Song.jpg" alt="Prof. Chongmin SONG" width="100" height="100"><b class="lead"> Prof. Chongmin SONG</b>, UNSW, Australia</p>
<p><img src="img/Prof. C. W. Lim.jpg" alt="Prof. C.W.Lim" width="100" height="100"><b class="lead"> Prof. C.W.Lim</b>, University of Hong Kong</p>
<p><img src="img/Prof. Ramulu Mamidala.jpg" alt="Prof. Ramulu Mamidala" width="100" height="100"><b class="lead"> Prof. Ramulu Mamidala</b>, University of Washington, USA</p>
<p><img src="img/Prof. Nouredine Bourhala.png" alt="Prof. Nouredine Bourahla" width="100" height="100"><b class="lead"> Prof. Nouredine Bourahla</b>, University Saad Dahlab, Algeria</p>
<p><img src="img/Prof. Rafig Azzam.jpg" alt="Prof. Rafig Azzam" width="100" height="100"><b class="lead"> Prof. Rafig Azzam, RWTH</b>, Aachen University, Germany</p>
<p><img src="img/Dr. Andrey Nasedkin.jpg" alt="Dr. Andrey Nasedkin" width="100" height="100"><b class="lead"> Dr. Andrey Nasedkin</b>, Southern federal University, Russia</p>
<p><img src="img/Dr. Romesh C Batra.jpg" alt="Prof. Romesh C. Batra" width="100" height="100"><b class="lead"> Prof. Romesh C. Batra</b>, Virginia University, USA</p>
</div>


          <!---team memeber-->
        <div class="col-md-6 col-lg-6 my-3">
<p><img src="img/Dr. Heather Lukacs.png" alt="Dr. Heather Lukacs" width="100" height="100"><b class="lead"> Dr. Heather Lukacs</b>, Director of Community Solutions, USA</p>
<p><img src="img/Dr. Nemkumar Banthia.jpg" alt="Dr. Nemkumar Banthia" width="100" height="100"><b class="lead"> Dr. Nemkumar Banthia</b>, University of British Columbia, USA</p>
<p><img src="img/Dr. Indubhushan Patnaikuni.jpg" alt="Dr. Indubhushan Patnaikuni" width="100" height="100"><b class="lead"> Dr. Indubhushan Patnaikuni</b>, RMIT University, Australia</p>
<p><img src="img/Dr. Swapan Saha.jpg" alt="Dr. Swapan Saha" width="100" height="100"><b class="lead"> Dr. Swapan Saha</b>, University of Western Sydney, Australia</p>
<p><img src="img/Dr. Albert S Kim.jpg" alt="Dr. Albert S. Kim" width="100" height="100"><b class="lead"> Dr. Albert S. Kim</b>, University of Hawaii</p>
<p><img src="img/Prof. Mohammed Jameel.jpg" width="100" height="100"><b class="lead"> Prof. Mohammed Jameel</b>, King Khalid University, KSA</p>
<p><img src="img/Dr. Sajid Abbasi.jpg" alt="Dr. Sajjad Abbasi" width="100" height="100"><b class="lead"> Dr. Sajjad Abbasi</b>, Technical Manager, Prisma Metal Industry, KSA</p>
</div>
</div>
</div>


<div class="container-fluid">
<div class="row">
        <div class="col text-center m-5">
          <h2 class="text-uppercase text-dark mb-0">
            <strong>National Advisory Committee</strong>
          </h2>
          <div class="title-underline bg-warning"></div>
        </div>
      </div>
<div class="row">
          <!---team memeber-->
        <div class="col-md-6 col-lg-6 my-3">
<p><img src="img/Prof. KVL Subramaniam.jpg" alt="Prof. KVL Subramaniam" width="100" height="100"><b class="lead"> Prof. KVL Subramaniam</b>, IITH</p>
<p><img src="img/Mr. T. Nagarjuna.jpg" alt="Mr. T. Nagarjuna" width="100" height="100"><b class="lead"> Mr. T. Nagarjuna</b>, Vice President, GMR</p>
<p><img src="img/Er. Syed Basharat Ali.jpg" alt="Er. Syed Basharat Ali" width="100" height="100"><b class="lead"> Er. Syed Basharat Ali</b>, Tameer Consultants</p>
<p><img src="img/Prof. M. Kumar.jpg" alt="Prof. M. Kumar" width="100" height="100"><b class="lead"> Prof. M. Kumar</b>, Principal, UCE, OU</p>
<p><img src="img/Prof. M. Gopal Naik.png" alt="Prof. M. Gopal Naik" width="100" height="100"><b class="lead"> Prof. M. Gopal Naik</b>, HOD, UCE, OU</p>
<p><img src="img/Prof. Dr. Syed Ferhathullah Hussainy.jpg" alt="Prof. Dr. Syed Ferhathullah Hussainy" width="100" height="100"><b class="lead"> Prof. Dr. Syed Ferhathullah Hussainy</b>, Dean(Admin), MJCET</p>
<p><img src="img/Prof. P. Srinivas Rao.jpg" alt="Prof. P. Srinivas Rao" width="100" height="100"><b class="lead"> Prof. P. Srinivas Rao</b>, JNTUH</p>
<p><img src="img/Prof. Varghese George.jpg" alt="Prof. Varghese George" width="100" height="100"><b class="lead"> Prof. Varghese George</b>, NIT, Suratkal</p>
<p><img src="img/Dr. S. R. Murthy.jpg" alt="Dr. S. R. Murthy" width="100" height="100"><b class="lead"> Dr. S. R. Murthy</b>, HOD, AU</p>
<p><img src="img/Prof. Ramesh Reddy.jpg" alt="Prof. Ramesh Reddy" width="100" height="100"><b class="lead"> Prof. Ramesh Reddy</b>, Former Dean, OU</p>
<p><img src="img/Er. C. Shekhar Reddy.jpg" alt="Er. C. Shekhar Reddy" width="100" height="100"><b class="lead"> Er. C. Shekhar Reddy</b>, Chairman, IGBC, HYD</p>
<p><img src="img/Dr. M. Rajashekhar.jpg" width="100" height="100"><b class="lead"> Dr. M. Rajashekhar</b>, S.E., Dept. of Atomic Energy</p>
</div>


          <!---team memeber-->
        <div class="col-md-6 col-lg-6 my-3">
<p><img src="img/Dr. NVS Reddy.jpg" alt="Dr. NVS Reddy" width="100" height="100"><b class="lead"> Dr. NVS Reddy</b>, L&amp;T Metro, HMRL</p>
<p><img src="img/Er. D. Raju.jpg" alt="Er. D. Raju" width="100" height="100"><b class="lead"> Er. D. Raju</b>, MD &amp; CEO, Kirby Building Systems</p>
<p><img src="img/Prof. V. Bhikshma.jpg" alt="Prof. V. Bhikshma" width="100" height="100"><b class="lead"> Prof. V. Bhikshma</b>, UCE, OU</p>
<p><img src="img/Prof. E. Sai Baba Reddy.jpg" alt="Prof. E. Sai Baba Reddy" width="100" height="100"><b class="lead"> Prof. E. Sai Baba Reddy</b>, Prinicipal, JNTUH</p>
<p><img src="img/Prof. Pradeep Kumar Ramancharla.jpg" alt="Prof. Pradeep Kumar Ramancharla" width="100" height="100"><b class="lead"> Prof. Pradeep Kumar Ramancharla</b>, IIITH</p>
<p><img src="img/Prof. N.V. Ramana Rao.jpg" alt="Prof. N.V. Ramana Rao" width="100" height="100"><b class="lead"> Prof. N.V. Ramana Rao</b>, Director, NITW</p>
<p><img src="img/Prof. M Chandra Sekhar.jpg" alt="Prof. M Chandra Sekhar" width="100" height="100"><b class="lead"> Prof. M Chandra Sekhar</b>, Head, CED, NITW</p>
<p><img src="img/Prof. Ramaseshu.jpg" alt="Prof. Ramaseshu" width="100" height="100"><b class="lead"> Prof. Ramaseshu</b>, NITW</p>
<p><img src="img/Prof. Giridhar Rajesh.jpg" alt="Prof. Giridhar Rajesh" width="100" height="100"><b class="lead"> Prof. Giridhar Rajesh</b>, NIT, AP</p>
<p><img src="img/Prof. Ramana Reddy.jpg" width="100" height="100"><b class="lead"> Prof. Ramana Reddy</b>, HOD, SVU</p>
<p><img src="img/Prof. K. Ganesh Babu.jpg" alt="Prof. K. Ganesh Babu" width="100" height="100"><b class="lead"> Prof. K. Ganesh Babu</b>, Former Professor, IITM</p>
<p><img src="img/Prof. N. Murali Krishna.jpg" alt="Prof. N. Murali Krishna" width="100" height="100"><b class="lead"> Prof. N. Murali Krishna</b>, Former Professor, OU</p>

</div>
</div>
</div>



<div class="container">
<div class="row">
        <div class="col text-center m-5">
          <h2 class="text-uppercase text-dark mb-0">
            <strong>technical Committee</strong>
          </h2>
          <div class="title-underline bg-warning"></div>
        </div>
      </div>
<div class="row">
          <!---team memeber-->
        <div class="col-md-6 col-lg-6 my-3">
<p><b>Prof. P. Rajashekhar</b>, UCE, OU</p>
<p><b>Prof. D. Rupesh Kumar</b>, UCE, OU</p>
<p><b>Prof. K.M. Laxmana Rao</b>, JNTUH</p>
<p><b>Prof. P. Shravana</b>, JNTUH</p>
<p><b>Dr. M. Phani Raju</b>, MD, LASA</p>
<p><b>Prof. Mir. Iqbal Faheem</b>, HOD, DCET</p>
<p><b>Dr. Gitasri Mukherjee</b>, MJCET</p>
</div>


          <!---team memeber-->
        <div class="col-md-6 col-lg-6 my-3">
<p><b>Dr. B. Munwar Basha</b>, IITH</p>
<p><b>Dr. A. Bahurudeen</b>, BITS, HYD</p>
<p><b>Dr. V. Vinayaka Ram</b>, BITS, HYD</p>
<p><b>Prof. Mohammed Hussain</b>, GRIET</p>
<p><b>Prof. B. Sridhar</b>, HOD, VCE</p>
<p><b>Dr. Akshay Naidu</b>, HOD, MCET</p>

</div>
</div>





<div class="row">
        <div class="col text-center m-5">
          <h2 class="text-uppercase text-dark mb-0">
            <strong>Organizing Committee</strong>
          </h2>
          <div class="title-underline bg-warning"></div>
        </div>
      </div>
<div class="row">
          <!---team memeber-->
        <div class="col-md-6 col-lg-6 my-3">
<p><b>Er. Ar. S.P. Anchuri</b>, SEWC, VICE PRESIDENT</p>
<p><b>Dr. Ishrat M. Mirzana</b>, MED</p>
<p><b>Prof. Abdullah Bin Mohammed (Retd.)</b>, CED</p>
<p><b>Mr. Mrinal Gour</b>, Assistant Professor</p>
<p><b>Mr. Ghouse Pasha Khan</b>, Assistant Professor</p>
<p><b>Mr. Abubakar</b>, Assistant Professor</p>
<p><b>Mr. Mohd. Masihuddin Siddiqui</b>, Assistant Professor</p>
<p><b>Mr. Barkat Ali Khan</b>, Assistant Professor</p>
<p><b>Mrs. K. Sri Lakshmi</b>, Assistant Professor</p>
<p><b>Mrs. Asra Fatima</b>, Assistant Professor</p>
<p><b>Mr. Syed Saifuddin</b>, Assistant Professor</p>
<p><b>Mr. T. Bharath Kumar</b>, Assistant Professor</p>
<p><b>Mrs. Iffat Naseem</b>, Assistant Professor</p>
</div>


          <!---team memeber-->
        <div class="col-md-6 col-lg-6 my-3">
<p><b>Er. C. Yeduknodalu</b>, Technical Head, AP &amp; TG ACC LTD</p>
<p><b>Prof. M. A. Khalique (Retd.)</b>, CED</p>
<p><b>Dr. S. M. Farooq Basha</b>, Professor</p>
<p><b>Mrs. M. Sridevi</b>, Assistant Professor</p>
<p><b>Mrs. Asma Sultana</b>, Assistant Professor</p>
<p><b>Mr. Syed Jawwad Ahmed</b>, Assistant Professor</p>
<p><b>Mrs. Syeda Husna Nooreen</b>, Assistant Professor</p>
<p><b>Mr. Syed Yousuf Hussaini</b>, Assistant Professor</p>
<p><b>Mr. Mohd. Nazim Raza</b>, Assistant Professor</p>
<p><b>Mr. Syed Mushtaq Hashmi</b>, Assistant Professor</p>
<p><b>Mr. Asgarullah Khan</b>, Assistant Professor</p>
<p><b>Mrs. Salma Sultana</b>, Assistant Professor</p>
<p><b>Mr. Syed Muzammil Shah</b>, Assistant Professor</p>

</div>
</div>



<div class="row">
        <div class="col text-center m-5">
          <h2 class="text-uppercase text-dark mb-0">
            <strong>administrative Committee</strong>
          </h2>
          <div class="title-underline bg-warning"></div>
        </div>
      </div>
<div class="row">
          <!---team memeber-->
        <div class="col-md-6 col-lg-4 my-3 mx-auto">
<p><b>Mr. K. V. Narasimha Rao</b>, Registrar, MJCET</p>
<p><b>Mr. V. David Raju</b>, Assistant Professor, CED</p>
<p><b>Mr. Iqbal Ahmed Khan</b>, Administrative Officer</p>
<p><b>Mr. Gaziuddin Durrani</b>, Accounts Officer</p>
<p><b>Mr. Mirza Nusrathullah Baig</b>, Superintendent, CED</p>
</div>
</div>



  </div>
</section>
<!----end of team section-->
    

     
<!--main footer section-->
<section id="skills" class="py bg-info">
    <div class="container">
      <div class="row">
  <!--single col-->
  <div class="col-md-6 col-lg-4 text-center my-4">
    <!--<i class="fas fa-home fa-2x text-danger"></i>-->
    <h5 class="text-uppercase text-center my-3">RACEI-2019</h5>
    <p class="text-dark text-justify">Welcome to the official website of International Conference on Recent Advances in Civil Engineering Infrastructure (RACEI-19). It is going to be held on 16th - 18th December 2019 at MJCET, Hyderabad. RACEI-19 is being organized by Civil Engg. Dept. in MJCET</p>
    <!--<a href="#" class="btn btn-outline-danger btn-block text-uppercase">press here</a>-->
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