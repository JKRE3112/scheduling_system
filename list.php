<?php
  $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "header.php";
?>
<html>
<head>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <script type="text/javascript" src="Scripts/bootstrap.min.js"></script>
  <script type="text/javascript" src="Scripts/jquery-2.1.1.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arvo&family=Lato&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/528fcd2c3c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">   
    <title>Main</title>
  </head>
  <body style="background-image: url(images/head2.svg);">
    <!-- Navigation Bar-->
    <nav class="navbar navbar-expand-lg navbar-light sticky-top" id="navbar">
      <div class="container">
        <a class="navbar-brand" href="head.php"><h2>CS Scheduling</h2></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent" style="Font-Family: 'Arvo', Serif;">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0 fw-bolder">
            <li class="nav-item">
              <a class="nav-link" href="head.php">HOME</a>  
            </li>
            <li class="nav-item">
              <a class="nav-link" href="home.php">SCHEDULE</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Testview.php" >VIEWING</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="list.php" style="color:#18211D">LIST</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="includes/logout.php">LOGOUT</a>
            </li>

            <div class="dropdown">
	          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
		            Other Options
	          </button>
	          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
         			 <a class="dropdown-item" href="addsubject.php">Add Subjects</a>
          			<a class="dropdown-item" href="addfaculty.php">Add Faculty</a>
          			<a class="dropdown-item" href="addcourse.php"> Add Course</a>
         		 	<a class="dropdown-item" href="addroom.php">Add Room</a>
          			<a class="dropdown-item" href="addtime.php">Add Time</a>
          </ul>
        </div>
                
      </li>
    </ul>
  </div>
          
        </div>
      </div>
    </nav>

<style>
body {
	background-color: white;
}
</style>
</head>
<body>
            <div align="center" class="mt-5">
            <legend>List of Faculties</legend></fieldset>
			<?php
				include_once("faclist.php");
			?>
			<br>
			<br>
			<br>
			<br>
			<div align="center">
			<legend>List of Courses</legend></fieldset>
			<?php 
              include_once("corlist.php");
			?>
			<br>
			<br>
			<br>
			<br>
			<div align="center">
			<legend>List of Subjects</legend></fieldset>
			<?php 
			  include_once("sublist.php");
			?>
			<br>
			<br>
			<br>
			<br>
			<div align="center">
			<legend>List of rooms</legend></fieldset>
			<?php
				 include_once("roomlist.php");
			?>
			<br>
			<br>
			<br>
			<br>
			<div align="center">
			<legend>List of class time</legend></fieldset>
			<?php
				 include_once("timelist.php");
			?>
			

<?php
   include_once("footer.php");
?>