<?php
session_start();

$user=$_POST["user"];
$pass=$_POST["pass"];


switch ($_GET["op"]){
	case 'login':
		if($user == 'jlopezab'){
			$_SESSION["user_profile"] = 'A';
		}else{
			$_SESSION["user_profile"] = 'U';
		} 
		$_SESSION["user_auth"] = $user;

		echo 'Hola bienvenido :'.$user;
	break;

	case 'logout':
		session_unset();
		session_destroy();

		echo 'Adios, Feliz dia !!!';
	break;

}

?>