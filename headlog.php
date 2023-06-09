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
        <a class="navbar-brand" href="main.php"><img src="images/brand2.png" width="200" height="50"></a>
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
              <a class="nav-link active" href="headlog.php">SUBJECT LOGS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="view.php">VIEWING</a>
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
                <a class="dropdown-item" href="addcurriculum.php">Add Section</a>
       
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

// Query the database to retrieve the units, overload, start_time, and end_time from the "demo" table
$demoQuery = "SELECT units, overload, start_time, end_time FROM demo WHERE usersUid = '$usersUid'";
$demoResult = mysqli_query($connection, $demoQuery);

// Check if the query was successful and fetch the data
if ($demoResult && mysqli_num_rows($demoResult) > 0) {
    $demoRow = mysqli_fetch_assoc($demoResult);
    $units = $demoRow['units'];
    $overload = $demoRow['overload'];
    $startTime = $demoRow['start_time'];
    $endTime = $demoRow['end_time'];

    echo '<div class="container mt-3">';
    echo '<div class="row">';
    echo '<div class="col-lg-12">';
    echo '<h4 class="text-center">Units: ' . $units . ' | Overload: ' . $overload . ' | Start Time: ' . $startTime . ' | End Time: ' . $endTime . '</h4>';
    echo '</div>';
    echo '</div>';
    echo '</div>';

    // Query the database to retrieve the subject descriptions and subject code from the "logs" and "subject" tables
    $query = "SELECT logs.subject_description, logs.subject_units
              FROM logs
              WHERE logs.usersUid = '$usersUid'";

    $result = mysqli_query($connection, $query);

    // Check if the query was successful and fetch the data
    if ($result && mysqli_num_rows($result) > 0) {
        $subjectDescriptions = array(); // Array to store unique subject descriptions

        echo '<div class="container mt-3">';
        echo '<div class="row">';
        echo '<div class="col-lg-12">';
        echo '<table class="table table-striped">';
        echo '<thead class="thead-active">';
        echo '<tr>';
        echo '<th scope="col">Subject Head</th>';
        echo '<th scope="col">Subject Units</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';

        while ($row = mysqli_fetch_assoc($result)) {
            $subjectDescription = $row['subject_description'];
            $subjectUnits = $row['subject_units'];

            // Skip duplicate subject descriptions
            if (in_array($subjectDescription, $subjectDescriptions)) {
                continue;
            }

            // Add subject description to the array
            $subjectDescriptions[] = $subjectDescription;

            echo '<tr>';
            echo '<td>' . $subjectDescription . '</td>';
            echo '<td>' . $subjectUnits . '</td>';
            echo '</tr>';
        }

        echo '</tbody>';
        echo '</table>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    } else {
        echo '<p class="text-center">No subjects found.</p>';
    }
}
?>


</div>
  </div>

     
   
      
      <footer id="footer" class="py-2 my-2 container-fluid text-center">
        <hr>
          <small>Copyright &copy; TECHNOLOGICAL UNIVERSITY OF THE PHILIPPINES MANILA<br></small>
          <small>ALL RIGHTS RESERVED 2023</small>
      </footer>
    </div>
    
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
   
  </body>
</html>