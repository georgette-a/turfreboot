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
		<li ><a href="home_lg.php">Home</a></li>
        <li><a href="part_lg.php">Partners</a></li>
        <li class="active"><a href="bookings.php">Bookings</a></li>
        <li><a href="../index.php"><span class="glyphicon glyphicon-log-out"></span> Sign Out</a></li>
</ul>         
              
    </div>
  </div>


<div class="container text-center">
   <h1>Book a Facility</h1><br><br>
                                </div>
   <div class="container justify-content-center">
  <form class="form-horizontal" action="/action_page.php">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-6">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
      </div>
    </div><br>
    <div class="form-group">
      <label class="control-label col-sm-2" for="ptnr">Partner:</label>
      <div class="col-sm-6">          
        <select class="form-control" id="ptnr">
        	<option>-- Select Partner --</option>
    		<option>Ashesi University</option>
    		<option>University of Ghana, Legon</option>
        </select>
      </div>
    </div><br>
    <div class="form-group">
      <label class="control-label col-sm-2" for="ptnr">Facility:</label>
      <div class="col-sm-6">          
        <select class="form-control" id="ptnr">
        	<option>-- Select Facility --</option>
    		<option>Basketball Court</option>
    		<option>Football Field</option>
            <option>Gym</option>
        </select>
      </div>
    </div><br>
    <div class="form-group">
      <label class="control-label col-sm-2" for="d8">Date:</label>
      <div class="col-sm-6">          
        <input type="date" class="form-control" id="d8" placeholder="Enter date" name="d8">
      </div>
    </div><br>
    <div class="form-group">
      <label class="control-label col-sm-2" for="uTime">Time:</label>
      <div class="col-sm-6">          
        <input type="time" class="form-control" id="uTime" placeholder="Enter Time" name="uTime">
      </div>
    </div><br>

    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-1">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
</div>
<footer class="container-fluid">
    <div class="collapse navbar-collapse" id="#myNavbar">
        <ul class="nav navbar-nav navbar-left">
             <li ><a >Contact Us</a></li>
             <li><a>+233 03 0000 000</a></li>
             <li><a>georgette@practice.com</a></li>
        </ul>
    <div>
</footer>
</body>
</html>
