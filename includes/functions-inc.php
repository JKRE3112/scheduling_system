<?php 

function emptyInputSignup($fname, $lname, $email, $username, $pwd, $pwdRepeat) {
	$result;
	if(empty($fname) || empty($lname) || empty($email)| empty($username)|| empty($pwd)|| empty($pwdRepeat) || empty($type)){	
	$result = true;
	}
	else {
		$result = false;
	}
	return $result;
}

function invalidUid($username) {
	$result;
	if (!preg_match("/^[a-zA-z0-9]*$/", $username)){	
	$result = true;
	}
	else {
		$result = false;
	}
	return $result;
}

function invalidEmail($email) {
	$result;
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {	
	$result = true;
	}
	else {
		$result = false;
	}
	return $result;
}

function pwdMatch($pwd, $pwdRepeat) {
	$result;
	if ($pwd !== $pwdRepeat) {	
	$result = true;
	}
	else {
		$result = false;
	}
	return $result;
}

function uidExists($conn, $username, $email) {
	$sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)){
		header("location: ../superuser.php?error=stmtfailed");
		exit();
	}

	mysqli_stmt_bind_param($stmt, "ss", $username, $email);
	mysqli_stmt_execute($stmt);

	$resultData = mysqli_stmt_get_result($stmt);

	if($row = mysqli_fetch_assoc($resultData)){
		return $row;
	}
	else {
		$result = false;
		return $result;
	}

	mysqli_stmt_close($stmt);

}

function createUser($conn, $type, $fname, $lname, $email, $username, $pwd) {
	$sql = "INSERT INTO users (usersType, usersFName, usersLName, usersEmail, usersUid, usersPwd ) VALUES (?, ?, ?, ?, ?, ?);";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)){
		header("location: ../superuser.php?error=stmtfailed");
		exit();
	}

	$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

	mysqli_stmt_bind_param($stmt, "ssssss", $type, $fname, $lname, $email, $username, $hashedPwd);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
	header("location: ../superuser.php?error=none");
	exit();

}

function emptyInputLogin($username, $pwd) {
	$result;
	if(empty($username) || empty($pwd)){	
	$result = true;
	}
	else {
		$result = false;
	}
	return $result;
}





function loginUser($conn, $username, $pwd) {


	$uidExists = uidExists($conn, $username, $username);
	

	if ($uidExists === false) {
		header("location: ../login.php?error=wronglogin");
		exit();

	}
	$pwdHashed = $uidExists["usersPwd"];
	$checkPwd = password_verify($pwd, $pwdHashed);

	if ($checkPwd === false) {
		header("location: ../login.php?error=wronglogin");
		exit();
	}
	else if ($checkPwd === true) {
		session_start();
		$_SESSION["userid"] = $uidExists["usersId"];
		$_SESSION["useruid"] = $uidExists["usersUid"];
		if($_SERVER["REQUEST_METHOD"]=="POST")
			{
			   $username = $_POST["uid"];
			   $pwd = $_POST["pwd"];

			   $result = mysqli_query($conn, "SELECT * from users WHERE usersUid='$username' AND usersPwd='$pwdHashed' ");
			   $row=mysqli_fetch_array($result);

			   
			if($row["usersType"]=="Faculty"){

			      $_SESSION["usersUid"]=$username;
			   
			      header("location:../Faculty.php");
			   }

			   elseif($row["usersType"]=="Head")
			   {

			      $_SESSION["usersUid"]=$username;
			      
			      header("location:../Head.php");
			   }
			   else
			   {
			      echo "username or password incorrect";
			   }

			}	
	}
		exit();
	}

function isLoggedIn() {
	if (isset($_SESSION["useruid"])) {
		return true;
	}else{
		return false;
	}
}




