<?php
include('includes/functions-inc.php');
session_start();
if (!isLoggedIn()) {
	header('location: login-first.php');
}
?>

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
              <a class="nav-link" href="first_page.php">SCHEDULE</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="headlog.php">SCHEDULE LOGS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Testview.php">VIEWING</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="list.php">LIST</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="includes/logout.php">LOGOUT</a>
            </li>

            <div class="dropdown">
	          <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style="Font-Family: 'Arvo', Serif;">
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

    <!--Home-->
    <div class="container my-3 py-1" style="display: flex; justify-content: center; align-items: center;">
        <div class="row">
            <div class="col-lg-12 d-flex flex-column justify-content-center">
                <div class="greet mt-3">
                    <h3 class="display-6 fw-bold text-center" style="color:#18211D;">HEAD LOGS</h3>
                    <div class="desc fw-bolder" style="color:#5b202a;"> <br>
                        <h5 class="text-center">History of your recent added subjects </h5>
                    </div>
                </div>
            </div>
  <?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "insertion";

// Create a new database connection
$connection = mysqli_connect($servername, $username, $password, $dbname);

// Check if the connection was successful
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve the useruid from the session
$usersUid = $_SESSION['usersUid'];

// Query the database to retrieve the subject descriptions
$query = "SELECT subject_description FROM logs WHERE usersUid = '$usersUid'";
$result = mysqli_query($connection, $query);

// Check if the query was successful and fetch the data
if ($result && mysqli_num_rows($result) > 0) {
    echo '<div class="container mt-3">';
    echo '<div class="row">';
    echo '<div class="col-lg-12">';
    
    while ($row = mysqli_fetch_assoc($result)) {
        $subjectDescription = $row['subject_description'];
        echo '<h4 class="text-center">' . $subjectDescription . '</h4>';
    }
    
    echo '</div>';
    echo '</div>';
    echo '</div>';
} else {
    // Handle the case when the user is not found or an error occurred
    echo "Unable to retrieve user information.";
}
?>


     
   
      
      <footer id="footer" class="py-2 my-2 container-fluid text-center">
        <hr>
          <small>Copyright &copy; TECHNOLOGICAL UNIVERSITY OF THE PHILIPPINES MANILA<br></small>
          <small>ALL RIGHTS RESERVED 2023</small>
      </footer>
    </div>
    
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
   
  </body>
</html>