<?php
include('includes/functions-inc.php');
session_start();
if (!isLoggedIn()) {
	header('location: login-first.php');
}
?>
<html>
<head>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    
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
        <a class="navbar-brand" href="main.php"><h2>CS Scheduling</h2></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent" style="Font-Family: 'Arvo', Serif;">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0 fw-bolder">
          <li class="nav-item">
              <a class="nav-link" href="head.php">HOME</a>  
            </li>
            <li class="nav-item">
              <a class="nav-link" href="head_second_page.php">SCHEDULE</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="headlog.php">SUBJECT LOGS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="view.php">VIEWING</a>
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
          			<a class="dropdown-item" href="addcourse.php"> Add Course</a>
                <a class="dropdown-item" href="addsection.php">Add Section</a>
          			<a class="dropdown-item" href="addtime.php">Add Time</a>
          </ul>
        </div>
                
      </li>
    </ul>
  </div>
          
        </div>
      </div>
    </nav>
	<div class="container mb-1 mt-3">
        <div class="row row justify-content-center">
          <div class="col-12">
            <h1 class="fw-bold mt-2" style="color:#18211D; font-size:48px; Font-Family: 'Arvo', Serif;">VIEWING</h1>
            <hr>
            <h2 class="mb-4" style="color:#AE0F36; Font-Family: 'Outfit', sans-Serif; font-size: 30px;">VIEW EVERY FACULTY, ROOM AND SECTIONS HERE:</h2>
          </div>

          
		  <div class="col-lg-6 mb-4"> 
            <div class="card" id="scard" style="width: auto; background-color: #FFFFFF;">
			
              <div class="card-body">
                <h5 class="card-title" style="color:#C08F57 ;
                font-family: 'Arvo', Serif;">FACULTY</h5>
                <p class="card-text"  style="color: #736E76;font-family:'Outfit', sans-serif;">List of the Faculty and Head Schedules.</p>
                <a href="viewfac.php" class="btn btn-primary" style="background-color: #AE0F36; border: none; font-family: 'Outfit', sans-serif;">View Faculty</a>
              </div>
            </div>
          </div>
      
       

          <div class="col-lg-6 mb-4"> 
            <div class="card" id="scard" style="width: auto; background-color: #FFFFFF;">
          
              <div class="card-body">
                <h5 class="card-title" style="color:#C08F57 ;
                font-family: 'Arvo', Serif;">SECTIONS</h5>
                <p class="card-text"  style="color: #736E76;font-family:'Outfit', sans-serif;">List of Sections and its respective schedules.</p>
                <a href="viewsec.php" class="btn btn-primary" style="background-color: #AE0F36; border: none; font-family: 'Outfit', sans-serif;">View Sections</a>
              </div>
            </div>
          </div>
		  <footer id="footer" class="py-3 container-fluid text-center">
        <div class="row" style="color:aliceblue;">
          <hr>
          <small>Copyright &copy; John Arthur R. Carandang<br></small>
          <small>ALL RIGHTS RESERVED</small>
        </div>
        </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
   
</body>
</html>
