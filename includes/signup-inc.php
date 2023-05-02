<?php 

if (isset($_POST["submit"])) {


	$type = $_POST["type"];
	$fname = $_POST["fname"];
	$lname = $_POST["lname"];
	$email = $_POST["email"];
	$username = $_POST["uid"];
	$pwd = $_POST["pwd"];
	$pwdRepeat = $_POST["pwdrepeat"];

	require_once 'dbh-inc.php';
	require_once 'functions-inc.php';

	if (emptyInputSignup($type, $fname, $lname, $email, $username, $pwd, $pwdRepeat) == false) {
		header("location: ../superuser.php?error=emptyinput");
		exit();
	}

	if (invalidUid($username) !== false) {
		header("location: ../superuser.php?error=invaliduid");
		exit();
	}
	if (invalidEmail($email) !== false) {
		header("location: ../superuser.php?error=invalidemail");
		exit();
	}

	if (pwdMatch($pwd, $pwdRepeat) !== false) {
		header("location: ../superuser.php?error=passwordsdontmatch");
		exit();
	}
	if (uidExists($conn, $username, $email) !== false) {
		header("location: ../superuser.php?error=usernametaken");
		exit();
	}	

	createUser($conn, $type, $fname, $lname, $email, $username, $pwd);
	}
	else {
	header("location: ../superuser.php");
	exit();
}
