<?php
//connect to database class
require("../settings/db_class.php");
require("../index.php");
/*Handling all User related issues 
* ie registration, login, booking
*/
class userClass extends db_connection{
    //properties
    public $usr_name = null;
    public $usr_phone = null;
    public $usr_mail = null;
  

    public function regUsr($a, $b, $c, $d, $e){

		//Write the sql
		$sql = "INSERT INTO User (`FirstName`,`LastName`,`Phone`, `Password`,`Email`,) VALUES('$a', '$b', '$c', '$d', '$e')";
		//execute the sql
		return $this->db_query($sql);
    }

    
    public function login(){
        $username = $_POST['regmail'];
        $password = $_POST['password'];

    }

  }

?>
