<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
		.footer1 {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: red;
   color: white;
		text-align: center;}
    </style>
	
	<link href="/assets/img/7.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>
<body>
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="../index.php">Invest-tech </a></h1>
     

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="../index.php">Home</a></li>
          <li><a href="logout.php">Logout</a></li>
          
        </ul>
      </nav><!-- .nav-menu -->


    </div>
  </header>
<div align="center">
<br><br><br><br><br><br>
    <div  align="center" >
    <div class="container">
	
	
	
	    <h2>Welcome <?php echo htmlspecialchars($_SESSION["username"]); ?></h2>
		 <p>
        <a href="file-upload-form.php" class="btn btn-success">Upload proof of payment</a>
        <a href="mysql-select-query.php" class="btn btn-primary">View trasection history</a>
    </p	>
	</div>
		
	</div>
	 <div class="footer1">
	   <footer id="footer">

    

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>Invest-tech</span></strong>. All Rights Reserved
      </div>
	 
      <div class="credits">
        
        Designed by theGreat
      </div>
    </div>
  </footer>	
  </div>
</body>
</html>