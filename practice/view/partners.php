<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Turf - Partners</title>
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
                    <img src="../images/TURFlogo.png" width="120" height="30" alt=""></a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="../index.php">Home</a></li>
                    <li class="active"><a href="partners.php">Partners</a></li>
                    <li><a href="bookings.php">Bookings</a></li>
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
        </nav>
        
        <div class="container-fluid text-center">
            <div class="container-fluid"> 
                <h1>Partners</h1>
                <p>These Partners host the following facilities on Turf</p>
                <hr>
                <h2>Ashesi University</h3>
                <p>Location: Berekusu, E/R, Ghana.</p>
            </div>
            <div class="container-fluid text-center">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="card d-flex flex-row" style="width:400px">
                            <img src="../images/abc1.jpg" class="card-img-top" width="400px" alt="Ashesi Basketball Court 1">
                            <div class="card-body">
                                <h5 class="card-title">Ashesi Basketball Court</h5>
                                <p class="card-text">Open from 10am - 8pm<br> GHS 20 per hour</p><br>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card d-flex flex-row" style="width:400px">
                            <img src="../images/field_2.jpg" class="card-img-top" width="400px" alt="Ashesi Basketball Court 12">
                            <div class="card-body">
                                <h5 class="card-title">Ash Pitch</h5>
                                <p class="card-text">Open everyday from 10am - 8pm<br> GHS 40 per hour</p><br>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card d-flex flex-row" style="width:400px">
                            <img src="../images/abc2.jpeg" class="card-img-top" width="400px" alt="Ashesi Basketball Court 12">
                            <div class="card-body">
                                <h5 class="card-title">Ashesi Gym</h5>
                                <p class="card-text">Open from 10am - 8pm<br> GHS 20 per hour</p><br>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid"> 
                <br>
                <hr>
                <h2>University of Ghana, Legon</h3>
                <p>Location: Legon, G/R, Ghana.</p>
            </div>
            <div class="container-fluid text-center">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="card d-flex flex-row" style="width:400px">
                            <img src="../images/abc1.jpg" class="card-img-top" width="400px" alt="Ashesi Basketball Court 1">
                            <div class="card-body">
                                <h5 class="card-title">Ashesi Basketball Court 1</h5>
                                <p class="card-text">Open from 10am - 8pm<br> GHS 20 per hour</p><br>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card d-flex flex-row" style="width:400px">
                            <img src="../images/abc2.jpeg" class="card-img-top" width="400px" alt="Ashesi Basketball Court 12">
                            <div class="card-body">
                                <h5 class="card-title">Ashesi Basketball Court 2</h5>
                                <p class="card-text">Open from 10am - 8pm<br> GHS 20 per hour</p><br>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card d-flex flex-row" style="width:400px">
                            <img src="../images/abc2.jpeg" class="card-img-top" width="400px" alt="Ashesi Basketball Court 12">
                            <div class="card-body">
                                <h5 class="card-title">Ashesi Basketball Court 2</h5>
                                <p class="card-text">Open from 10am - 8pm<br> GHS 20 per hour</p><br>
                                
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <br><br>
        </div>

       <footer class="container-fluid">
           <div class="collapse navbar-collapse" id="#myNavbar">
               <ul class="nav navbar-nav navbar-left">
                   <li ><a >Contact Us</a></li>
                   <li><a>+233 03 0000 000</a></li>
                   <li><a>georgette@practice.com</a></li>
                </ul>
            </div>
        </footer>

    </body>
</html>

