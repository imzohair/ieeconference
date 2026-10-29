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



    <?php
$servername = "localhost";
$username = "kareemwebadmin";
$password = "kareem_123!@#";
$dbname = "mjcollege2013";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 




if(isset($_POST['submit']) && (isset($_FILES['cfile'])) && (isset($_FILES['pfile']))) 
{ 



$author = $_POST['author'];
$author = trim($_POST['author']);

$designation = $_POST['designation'];
$designation = trim($_POST['designation']);

$title = $_POST['title'];
$title = trim($_POST['title']);

$emailid = $_POST['emailid'];
$emailid = trim($_POST['emailid']);

$phone = $_POST['phone'];
$phone = trim($_POST['phone']);

$college = $_POST['college'];
$college = trim($_POST['college']);

$address = $_POST['address'];
$address = trim($_POST['address']);



$transaction = $_POST['transaction'];
$transaction = trim($_POST['transaction']);

$bank = $_POST['bank'];
$bank = trim($_POST['bank']);

$branch = $_POST['branch'];
$branch = trim($_POST['branch']);

$dot = $_POST['dot'];
$dot = trim($_POST['dot']);

$amount = $_POST['amount'];
$amount = trim($_POST['amount']);

$pfile = $_POST['pfile'];
$pfile = trim($_POST['pfile']);

$cfile = $_POST['cfile'];
$cfile = trim($_POST['cfile']);

$size= $_FILES['cfile']['size'];







 

if(empty($author)){
$error = "Please enter Author Name";
$code = "1";
}

else if(empty($designation)){
$error = "Please enter Designation";
$code = "2";
}

else if(empty($title)){
$error = "Please enter Title of the Paper";
$code = "3";
}

else if(empty($emailid)){
$error = "Please enter Email ID";
$code = "4";
}

else if(empty($phone)){
$error = "Please enter Contact Number";
$code = "5";
}

else if(empty($college)){
$error = "Please enter College/University/Institution/Industry/Company Name";
$code = "6";
}

else if(empty($address)){
$error = "Please enter Address for Correspondence";
$code = "7";
}

else if(empty($transaction)){
$error = "Please enter UTR/Transaction No./Acknowledgment No.";
$code = "8";
}

else if(empty($bank)){
$error = "Please enter Bank Name";
$code = "9";
}

else if(empty($branch)){
$error = "Please enter Branch Name";
$code = "10";
}

else if(empty($dot)){
$error = "Please enter Date of Transaction";
$code = "11";
}

else if(empty($amount)){
$error = "Please enter Amount Paid";
$code = "12";
}

else if( $size > 2097152){
$error= "Payment/NEFT Receipt file size should be less than 2MB";
}






else

{ 
  $fileName=$_FILES["cfile"]["name"];
  
  $fileTmpName=$_FILES["cfile"]["tmp_name"]; 



  
$pfileName=$_FILES["pfile"]["name"];
  
  $pfileTmpName=$_FILES["pfile"]["tmp_name"];

      

      //File upload path
      $uploadPath="ugcpayment/".$fileName;

      //function for upload file
      move_uploaded_file($fileTmpName,$uploadPath);
      
                
       
  //File upload path
       $puploadPath="ugcpaper/".$pfileName;

       //function for upload file
       move_uploaded_file($pfileTmpName,$puploadPath);
  
  

$stmt = $conn->prepare( "INSERT INTO `ugc`( `author`, `designation`, `title`, `emailid`, `phone`, `college`, `address`, `transaction`, `bank`, `branch`, `dot`, `amount`, `cfile`, `pfile`) VALUES  (?,?,?,?,?,?,?,?,?,?,?,?,?,?)");

$stmt->bind_param("sssssssssssiss", $author,$designation,$title,$emailid,$phone,$college,$address,$transaction,$bank,$branch,$dot,$amount,$fileName,$pfileName);







$stmt->execute();



$dbResult = mysqli_query($conn,"SELECT regsno FROM ugc WHERE author = '$_POST[author]' ") or die(mysql_error());

$newlyRegisteredId = "";
if (mysqli_num_rows($dbResult) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($dbResult)) {
        $newlyRegisteredId = $row["regsno"];
	}
echo "<script type='text/javascript'>alert('Dear $author ...Your Registration is successfully completed...Your Registration ID is RACEI-UGC-0$newlyRegisteredId ... ')</script>";
} 
$stmt->close();
}

} 

$conn->close();
 

 

?>







</head>

<body onload="pageLoad()">
<?php if (isset($error)) { echo "<script type='text/javascript'>alert('$error')</script>" ;} ?>
  <!--main contact section-->
<section id="contact1" class="py bg-white">
    <div class="container">
      <div class="row">
  <!--single col-->
  <div class="col-md-6 col-lg-3 text-center my-4">
    <!--<i class="fas fa-home fa-2x text-info"></i>-->
    <a href="http://mjcollege.ac.in/" target="_blank"><img align="right" height="80" src="img/mjlogo.png" alt="sues"></a>
    
  </div>
  <!--end of single column-->
  <!--single col-->
  <div class="col-md-6 col-lg-3 text-center my-4">
      <i class="fas fa-envelope-square fa-2x text-info"></i>
      <!--<h3 class="text-uppercase my-3">html5</h3>-->
      <a href="mailto:racei19.ced@mjcollege.ac.in"><p class="text-muted">racei19.ced@mjcollege.ac.in</p></a>
      <!--<a href="#" class="btn btn-outline-danger w-75 text-uppercase">press here</a>-->
    </div>
    <!--end of single column-->
    <!--single col-->
  <div class="col-md-6 col-lg-3 text-center my-4">
      <i class="fas fa-map-marker-alt fa-2x text-info"></i>
      <!--<h3 class="text-uppercase my-3">css3</h3>-->
      <a href="http://mjcollege.ac.in/civil/racei/venue.php" target="_blank"><p class="text-muted">Hyderabad, Telangana</p></a>
      <!--<a href="#" class="btn btn-outline-danger w-50 text-uppercase">press here</a>-->
    </div>
    <!--end of single column-->
    <!--single col-->
  <div class="col-md-6 col-lg-3 text-center my-4">
      <i class="fas fa-phone-alt fa-2x text-info"></i>
      <!--<h3 class="text-uppercase my-3">js</h3>-->
      <p class="text-muted">+91-40 23280321<br>Timings: 9:00 AM to 4:00 PM</p>
      <!--<a href="#" class="btn btn-outline-danger w-25 text-uppercase">press here</a>-->
    </div>
    <!--end of single column-->
      </div>
    </div>
  </section>
  <!--end of main contact section-->


  
    <!--<section style="background: #34495e; color: rgba(255, 255, 255, 0.5);">-->
     <nav class="navbar shift bg-info navbar-expand-sm sticky-top">
          <button class="navbar-toggler navbar-light" type="button" data-toggle="collapse" data-target="#navbarLinks">
              <span class="navbar-toggler-icon"></span>
            </button>
      <div class="collapse navbar-collapse" id="navbarLinks">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item active"><a href="http://mjcollege.ac.in/civil/racei/racei.php" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="about.php" target="_blank" class="nav-link">About</a></li>
          <li class="nav-item"><a href="call.php" target="_blank" class="nav-link">Call for Paper</a></li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button">Registration/Paper Submission</a>
            <div class="dropdown-menu bg-info">
              <a class="nav-link dropdown-toggle dropdown-item" data-toggle="dropdown" href="">Author</a>
              <div class="dropdown-menu bg-info">
                <a href="scopus.php" target="_blank" class="dropdown-item">Scopus</a>
                <a href="ugc.php" target="_blank" class="dropdown-item">UGC</a>
              </div>
              <a href="participant.php" target="_blank" class="dropdown-item">Delegate</a>
            </div>
          </li>
          <li class="nav-item"><a href="committee.php" target="_blank" class="nav-link">Committee</a></li>
          <li class="nav-item"><a href="https://www.google.co.in/maps/search/Hotels/@17.4282953,78.4340932,15z/data=!3m1!4b1!4m8!2m7!3m6!1sHotels!2sMuffakham+Jah+College+Of+Engineering+And+Technology,+Rd+Number+3,+Venkateshwara+Hills,+Banjara+Hills,+Hyderabad,+Telangana+500034!3s0x3bcb90d333154ddb:0xfcf718680e41f674!4m2!1d78.442848!2d17.4282648" target="_blank" class="nav-link">Hotels Nearby</a></li>
          <li class="nav-item"><a href="faq.php" target="_blank" class="nav-link">FAQ</a></li>
          <li class="nav-item"><a href="venue.php" target="_blank" class="nav-link">Venue</a></li>
          <li class="nav-item"><a href="contactus.php" target="_blank" class="nav-link">Contact Us</a></li>
        </ul>
      </div>
      </nav>

    
      
<!--header-->
<header id="header1" class="p-5">
  <div class="container">
    <div class="row">
      <div class="col-md-6 mx-auto text-center">
        <h1 class="text-light text-uppercase font-weight-bold">
          <p class="text-light">Registration - UGC Based Journal</p>
          
      </div>
    </div>
  </div>
</header>
<!--end of header-->



        
<!--contact-->
<section id="contact" class="py-5 bg-white">
  <div class="container">
   
    <div class="row">
      <div class="col-md-8 my-3">
        <div class="card card-body bg-white">
          <!--title-->
          <div class="card-title text-center text-dark">
            <h2 class="text-capitalize">Register Now</h2>
          

<p class="text-danger">Note: All the fields are mandatory.</p>
<p class="text-danger">Please note down Registration ID for future reference.</p>
          </div>
          <!--end of title-->
          <form name="register" method="post" id="form" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <!--simple form-->
            <div class="form-group mt-3">
              <input type="text" class="form-control" placeholder="Author Name" name="author" required value="<?php if(isset($author)){echo $author;} ?>" <?php if(isset($code) && $code == 1){echo "class=error" ;} ?> >
            </div>
            <!--Designation-->
            <div class="form-group mt-3">
              <input type="text" class="form-control" placeholder="Designation" name="designation" required value="<?php if(isset($designation)){echo $designation;} ?>" <?php if(isset($code) && $code == 2){echo "class=error" ;} ?> >
            </div>
            <!--Paper Title-->
            <div class="form-group mt-3">
              <input type="text" class="form-control" placeholder="Title of the Paper" name="title" required value="<?php if(isset($title)){echo $title;} ?>" <?php if(isset($code) && $code == 3){echo "class=error" ;} ?> >
            </div>
            <!--email-->
            <div class="form-group mt-3">
                <input type="email" class="form-control" name="emailid" placeholder="Email ID" required value="<?php if(isset($emailid)){echo $emailid;} ?>" <?php if(isset($code) && $code == 4){echo "class=error" ;} ?> >
              </div>
              <!--phone-->
              <div class="form-group mt-3">
                  <input type="text" class="form-control" name="phone" placeholder="Contact No" required value="<?php if(isset($phone)){echo $phone;} ?>" <?php if(isset($code) && $code == 5){echo "class=error" ;} ?> >
                </div>
                <!--Company name-->
            <div class="form-group mt-3">
              <input type="text" class="form-control" placeholder="College/University/Institution/Industry/Company Name" name="college" required value="<?php if(isset($college)){echo $college;} ?>" <?php if(isset($code) && $code == 6){echo "class=error" ;} ?> >
            </div>
                <!--Address-->
            <div class="form-group mt-3">
              <textarea cols="40" rows="5" class="form-control" placeholder="Mailing Address for Correspondence" required name="address" <?php if(isset($code) && $code == 7){echo "class=error" ;} ?>><?php if(isset($address)){echo $address;} ?></textarea>
            </div>
            <!--payment details-->
            <h5>Payment Details</h5>
            <div class="form-group mt-3">
              <table cellpadding="10" cellspacing="10" border="1">
              <th>Category</th>
              <th>Indian (INR)</th>
              <th>USD (Equivalent to INR)</th>
              <tr>
              <td>Academia and R&D centers</td>
              <td>4500</td>
              <td>250</td>
              </tr>
              <tr>
              <td>Industry Delegates</td>
              <td>5000</td>
              <td>300</td>
              </tr>
              <tr>
              <td>PG students and Research Scholars</td>
              <td>3000</td>
              <td>200</td>
              </tr>
              <tr>
              <td>Accompanying / Non-Presenting person</td>
              <td>2500</td>
              <td>200</td>
              </tr>
              </table>
            </div>
            <p>Registration fee may be sent in the form of DD in favour of <b>Principal, Muffakham Jah College of Engineering and Technology</b> payable at Hyderabad or remitted through on-line/NEFT to the below mentioned bank account.</p>
            <table cellpadding="10" cellspacing="10" border="1">
              
              <tr>
              <td>Account Name</td>
              <td>Principal, Muffakham Jah College of Engineering and Technology</td>
              </tr>
              <tr>
              <td>Account No.</td>
              <td>52086275130</td>
              
              </tr>
              <tr>
              <td>Bank</td>
              <td>SBI</td>
              
              </tr>
              <tr>
              <td>Branch</td>
              <td>P &amp; SB BANJARA HILLS</td>
             
              </tr>
              <tr>
                <td>IFSC</td>
                <td>SBIN0020940</td>
              </tr>
              <tr>
                <td>MICR Code</td>
                <td>500002394</td>
              </tr>
              <tr>
                <td>SWIFT Code</td>
                <td>SBININBBH04</td>
              </tr>
              </table>
             <!--Transaction ID-->
             <div class="form-group mt-3">
<h5>Details of Payment</h5>
              <input type="text" class="form-control" placeholder="UTR/Transaction No./Acknowledgment No." name="transaction" required value="<?php if(isset($transaction)){echo $transaction;} ?>" <?php if(isset($code) && $code == 8){echo "class=error" ;} ?> >
 <input type="text" class="form-control" placeholder="Bank Name" name="bank" required value="<?php if(isset($bank)){echo $bank;} ?>" <?php if(isset($code) && $code == 9){echo "class=error" ;} ?> >
 <input type="text" class="form-control" placeholder="Branch Name" name="branch" required value="<?php if(isset($branch)){echo $branch;} ?>" <?php if(isset($code) && $code == 10){echo "class=error" ;} ?> >
 <input type="date" class="form-control" placeholder="Date of Transaction" name="dot" required value="<?php if(isset($dot)){echo $dot;} ?>" <?php if(isset($code) && $code == 11){echo "class=error" ;} ?> >
 <input type="text" class="form-control" placeholder="Amount Paid" name="amount" required value="<?php if(isset($amount)){echo $amount;} ?>" <?php if(isset($code) && $code == 12){echo "class=error" ;} ?> >
            </div>
            <div class="form-group mt-3">
              <h5>Upload Payment/NEFT Receipt</h5><p class="text-danger">File size must be less than 2MB</p>
            <input type="file" class="form-control" name="cfile" accept=".doc, .docx, .pdf, .jpg, .jpeg" required>
            </div>
               <div class="form-group mt-3">
              <h5>Upload Abstract/Full paper</h5><p class="text-danger">File size must be less than 5MB</p>
            <input type="file" class="form-control" name="pfile" accept=".doc, .docx, .pdf, .jpg, .jpeg" required>
            </div>
                
                  <button type="submit" name="submit" class="btn btn-outline-dark btn-block text-uppercase">Register</button>
          </form>
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
  <div class="col-md-6 col-lg-4 text-center my-4">
    <!--<i class="fas fa-home fa-2x text-danger"></i>-->
    <h5 class="text-uppercase text-center my-3">RACEI-2019</h5>
    <p class="text-dark text-left">Welcome to the official website of International Conference on Recent Advances in Civil Engineering Infrastructure (RACEI-19). It is going to be held on 16th - 18th December 2019 at MJCET, Hyderabad. RACEI-19 is being organized by Civil Engg. Dept. in MJCET</p>
    <!--<a href="#" class="btn btn-outline-danger btn-block text-uppercase">press here</a>-->
  </div>
  <!--end of single column-->
  <!--single col-->
  <div class="col-md-6 col-lg-4 text-center my-4">
      
      <h5 class="text-uppercase my-3">useful links</h5>
      
         <p class="text-left m-4 p-2"><a class="text-dark" href="http://mjcollege.ac.in/civil/racei/racei.php">Home</a><br>
        <a class="text-dark" href="call.php" target="_blank">Call for Paper</a><br>
        <a class="text-dark" href="#navbarLinks">Registration</a><br>
        <a class="text-dark" href="committee.php" target="_blank">Committee</a><br>
        <a class="text-dark" href="faq.php" target="_blank">FAQ</a><br>
        <a class="text-dark" href="contactus.php" target="_blank">Contact Us</a></p>
      
      <!--<a href="#" class="btn btn-outline-danger w-75 text-uppercase">press here</a>-->
    </div>
    <!--end of single column-->
    <!--single col-->
  <div class="col-md-6 col-lg-4 text-left my-4 text-dark">
      <h5 class="text-uppercase text-center my-3 text-dark">contact info</h5>
      <i class="fas fa-map-marker-alt fa-2x text-light"></i>
      <a class="text-dark" href="http://mjcollege.ac.in/civil/racei/venue.php" target="_blank">Mount Pleasant, 8-2-249 to 267, 
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