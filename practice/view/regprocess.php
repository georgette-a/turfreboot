<?php
//include the controller
require('../controllers/usrcontroller.php');

//check if submit button was click
if (isset($_POST['register-submit'])) {
	//grab form data and store in variable
    $ufname = $_POST['firstname'];
    $ulname = $_POST['lastname'];
	$uemail = $_POST['email'];
	$uphone = $_POST['phone'];
    $upassword = $_POST['password'];
    $ucpassword = $_POST['confirm-password'];
    $pass = password_hash($upassword, PASSWORD_DEFAULT);
    $cpass = password_hash($ucpassword, PASSWORD_DEFAULT);

    if($pass == $cpass){
     //call function to add
	$ret =  insert_user($ufname, $ulname, $pphone, $pass, $pemail );
    }
	
	//echo result
	if ($ret) {
		echo "New contact Inserted";
	}else{
		echo "Insert failed";
	}
}



?>
