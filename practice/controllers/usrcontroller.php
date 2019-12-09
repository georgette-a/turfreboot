<?php
//connect to the user class
require("../classes/userclass.php");

//control centre of functions
function insert_user($a, $b, $c, $d, $e){
	//create an instance of user class
	$insertnewusr = new userClass;
	//run query
	$checkinsert = $insertnewusr->regUsr($a, $b, $c, $d, $e);
	if ($checkinsert) {
		return $checkinsert;
	}else{
		return false;
	}
	//give feedback
}


?>
