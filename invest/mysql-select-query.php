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
    <title>File Upload Form</title>
	
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
		table, th, td {
  border: 3.5px solid black; align:center;       padding-left: 20px;
    align-self: center;
    padding-bottom: 2%;
}
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
    <div class="container d-flex align-items-center" >

      <h1 class="logo mr-auto"><a href="../index.php">Invest-tech </a></h1>
     

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="../index.php">Home</a></li>
          <li><a href="logout.php">Logout</a></li>
          
        </ul>
      </nav><!-- .nav-menu -->


    </div>
  </header>
<br><br><br><br><br><br>
<div align="center" >

<p><b>Table below for user details <?php echo htmlspecialchars($_SESSION["username"]); ?></p>
<p align="right"><b>
<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "moremoney");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$sql = "SELECT * FROM moneypaid";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>user id</th>";
                echo "<th>Reff ID</th>";
                echo "<th>Paid amount</th>";
                echo "<th>Pay date</th>";
            echo "</tr>";
		
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['userId'] . "</td>";
                echo "<td>" . $row['amount'] . "</td>";
                echo "<td>" . $row['datepay'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
</b></p>
<a href="welcome.php" class="btn btn-warning">Back</a>
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