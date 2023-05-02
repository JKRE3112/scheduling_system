<?php

if (isset($_POST["submit"])) {

	$pwd = $_POST["pwd"];

	require_once 'dbh-inc.php';
	require_once 'functions-inc.php';

	if ($pwd == '123456') {
		header("location: ../superuser.php");
		exit();
	}
	else {
		header("location: ../superuser-login.php?error=wrongpass");
		
    	exit();
    	
} 	

}
	