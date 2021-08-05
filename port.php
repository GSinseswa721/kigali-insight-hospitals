<!DOCTYPE html>
<html lang="en">

<head>
<style>

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}
row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 40%; /* IE10 */
  flex: 10%;
}
container {
  background-color: #f2f2f2;
  padding: 5px 5px 15px 10px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 50%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 10px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 4px 0;
  font-size: 24px;
}

.btn {
  background-color: #04AA6D;
  color: white;
  padding: 22px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

 .jumbotron {
    background-color: #green;
    color: #fff;
    padding-left: 650px ;
word-spacing: 30px;
   
  }
 
 
  .button text-center{
    background-color: #green;
    color: #fff;
    padding-left: 700px ;
   
  }

span.price {
  float: right;
  color: grey;
}
</style>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> Appointment</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Muli:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Flattern - v2.1.0
  * Template URL: https://bootstrapmade.com/flattern-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-none d-lg-block">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <i class="icofont-envelope"></i><a href="mailto:contact@example.com">contact@kigalihospitals.com</a>
        <i class="icofont-phone"></i> 0788 537 071
      </div>
      <div class="social-links">
        <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="#" class="skype"><i class="icofont-skype"></i></a>
        <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container d-flex">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="index.html">Kigali Insight Hospitals</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="services.php">Services</a></li>
          <li><a href="port.php">Appointment</a></li>
          <li><a href="doctors.php">Doctors</a></li>
          <li><a href="hospitals.php">HOSPITALS</a></li>
          <li><a href="contacta.php">Contact</a></li>

        </ul>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Make an appointment</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Appointment</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

   
<h2><center>Fill this Form</h2>

<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="connect.php" method="post">
     
        <div class="row">
          <div class="col-50">
           <label for="fname"><i class="fa fa-user"></i> Full Name</label><br>
            <input type="text" id="names" name="names" placeholder="Enter your names"><br>
            <label for="email"><i class="fa fa-envelope"></i> Email</label><br>
            <input type="text" id="email" name="email" placeholder="Enter your Email"><br>
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label><br>
            <input type="text" id="adress" name="address" placeholder="Enter your location"><br>
			<label for="ccnum">Phone number</label><br>
            <input type="text" id="number" name="number" placeholder="+250-7590-3333"><br>
            <label for="email"><i class="fa fa-envelope"></i> Date</label><br>
            <input type="date" id="date" name="date"><br><br>
		<label for="fname"><i class="fa fa-user"></i>Gender</label><br>
		<input type="radio" id="gender" name="gender" value="f">
		<label for="css">Female</label><br>
		<input type="radio" id="javascript" name="gender" value="m">
		<label for="javascript">Male</label><br><br>
		
  <p><label for="country">Select your preference hospital</label><br>
        <select id="country" name="country">
          <option value="australia">King Faisal Hospital</option>
          <option value="canada">Kanombe Military Hospital</option>
          <option value="usa">BAHO International Hospital</option>
		  <option value="usa">CHUK</option>
 
        </select> 
<div class="jumbotron text-center">
<input type="submit" class="btn btn-primary">

    </script>
 </div>
      </form>
       
       

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>KIGALI INSIGHT HOSPITALS</h3>
            <p>
              
              KIGALI city, KK 5022<br>
              RWANDA <br><br>
              <strong>Phone:</strong> +250 7840 75517<br>
              <strong>Email:</strong>contact@kigalihospitals.com<br>
            </p>
          </div>

        

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="services.php">Making appointments</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="services.php">Information about Doctors</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="services.php">Hospitals available</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>It is a pleasure to link with you with your preference hospital</h4>
            <p>Warm welcome to this website we are willing to help you to find your nearest and best hospital for you and hope that you gonna be treated soon and extremly good.</p>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>Gloria</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flattern-multipurpose-bootstrap-template/ -->
          Designed by Gloria Niyonkuru Sinseswa
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/jquery-sticky/jquery.sticky.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>