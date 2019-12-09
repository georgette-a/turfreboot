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
		<li ><a href="../index.php">Home</a></li>
        <li><a href="partners.php">Partners</a></li>
        <li class="active"><a href="bookings.php">Bookings</a></li>
        <li class="dropdown">
                        <a href="http://phpoll.com/register" class="dropdown-toggle" data-toggle="dropdown">Register <span class="caret"></span></a>
                        <ul class="dropdown-menu dropdown-lr animated flipInX" role="menu">
                            <div class="col-lg-12">
                                <div class="text-center"><h3><b>Register</b></h3></div>
								<form id="ajax-register-form" action="http://phpoll.com/register/process" method="post" role="form" autocomplete="off">
									<div class="form-group">
										<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
									</div>
									<div class="form-group">
										<input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="">
									</div>
									<div class="form-group">
										<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
									</div>
									<div class="form-group">
										<input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password">
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-xs-6 col-xs-offset-3">
												<input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-info" value="Register Now">
											</div>
										</div>
									</div>
                                    <input type="hidden" class="hide" name="token" id="token" value="7c6f19960d63f53fcd05c3e0cbc434c0">
								</form>
                            </div>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="http://phpoll.com/login" class="dropdown-toggle" data-toggle="dropdown">Log In <span class="caret"></span></a>
                        <ul class="dropdown-menu dropdown-lr animated slideInRight" role="menu">
                            <div class="col-lg-12">
                                <div class="text-center"><h3><b>Log In</b></h3></div>
                                <form id="ajax-login-form" action="http://phpoll.com/login/process" method="post" role="form" autocomplete="off">
                                    <div class="form-group">
                                        <label for="username">Username</label>
                                        <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="" autocomplete="off">
                                    </div>

                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password" autocomplete="off">
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-xs-7">
                                                <input type="checkbox" tabindex="3" name="remember" id="remember">
                                                <label for="remember"> Remember Me</label>
                                            </div>
                                            <div class="col-xs-5 pull-right">
                                                <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-success" value="Log In">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="text-center">
                                                    <a href="http://phpoll.com/recover" tabindex="5" class="forgot-password">Forgot Password?</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" class="hide" name="token" id="token" value="a465a2791ae0bae853cf4bf485dbe1b6">
                                </form>
                            </div>
                        </ul>
                    </li>
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
