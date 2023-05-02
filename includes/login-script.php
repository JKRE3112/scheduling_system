<?php

$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "records";

session_start();


$data=mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);



if($_SERVER["REQUEST_METHOD"]=="POST")
{
   $username = $_POST["uid"];
   $pwd = $_POST["pwd"];

  
   $result = mysqli_query($data, "SELECT * from users WHERE usersUid='$username' AND usersPwd='$pwd' ");
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




?>

