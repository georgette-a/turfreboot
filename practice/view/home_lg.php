<?php 
  session_start(); 

  if (!isset($_SESSION['email'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: ../index.php');
  }
  if (isset($_GET['log-out'])) {
  	session_destroy();
  	unset($_SESSION['email']);
  	header("location: index.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Turf Booking</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  
  <link rel="stylesheet" href="../css/style1.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar" style="background-color: white;">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">
    <img src="../images/TURFlogogreen.png" width="120" height="30" alt="">
  </a>
	</div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
		<li class="active"><a href="home_lg.php">Home</a></li>
        <li><a href="part_lg.php">Partners</a></li>
        <li><a href="book_lg">Bookings</a></li>
       <li><button class="btn" name="log-out"> <span class="glyphicon glyphicon-log-out"></span> Sign Out</button></li>
      </ul>         
              
    </div>
  </div>


<div class="container text-center center">
    <div class="d-flex justify-content-center">
        <img class=""src="../images/TURFlogogreen.png" width="50%" height="25%" alt="">
    </div> 
</div>

<div class="container-fluid text-center">
    <div class="container-fluid"> 
      <h1>Welcome to Turf</h1>
      <p>Turf is a sports facility booking site. Several facilities are hosted on turf.</p>
      
      <button class="button" style="vertical-align:middle"><a href="view/bookings.php"><span>Book Now</span></a></button>
    </div>
</div>
<footer class="container-fluid">
    <div class="collapse navbar-collapse" id="#myNavbar">
        <ul class="nav navbar-nav navbar-left">
             <li ><a >Contact Us</a></li>
             <li><a>+233 03 0000 000</a></li>
             <li><a>magicians@magic.com</a></li>
        </ul>
    <div>
</footer>
</body>
</html>

