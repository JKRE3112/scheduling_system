<?php
include('includes/functions-inc.php');
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
          		
          </ul>
        </div>
                
      </li>
    </ul>
  </div>
          
        </div>
      </div>
    </nav>


<?php

// Add this code at the beginning of your PHP script
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
ini_set('display_errors', 0);

// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "insertion";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if usersUid is provided via GET request
if (isset($_GET['usersUid'])) {
    $usersUid = $_GET['usersUid'];

// Query to retrieve the user's name, units, overload, and userType from the users and demo tables
$dataQuery = "SELECT users.usersFName, users.usersLName, users.usersType, demo.units, demo.overload FROM users JOIN demo ON users.usersUid = demo.usersUid WHERE users.usersUid = '$usersUid'";
$dataResult = $conn->query($dataQuery);

// Check if the data exists
if ($dataResult->num_rows > 0) {
    $dataRow = $dataResult->fetch_assoc();
    $usersFName = $dataRow['usersFName'];
    $usersLName = $dataRow['usersLName'];
    $usersType = $dataRow['usersType'];
    $units = $dataRow['units'];
    $overload = $dataRow['overload'];

    // Display the faculty name, units, overload, and userType with underline
    echo "Faculty: <u>" . htmlspecialchars($usersFName) . " " . htmlspecialchars($usersLName) . "</u><br>";
    echo "Units: <u>" . htmlspecialchars($units) . "</u><br>";
    echo "Overload: <u>" . htmlspecialchars($overload) . "</u><br>";
    echo "Designation: <u>" . htmlspecialchars($usersType) . "</u><br>";
}




// Free the data result set
$dataResult->close();
    // Query to retrieve data from demo table for the selected usersUid
    $demoQuery = "SELECT * FROM demo WHERE usersUid = '$usersUid'";
    $demoResult = $conn->query($demoQuery);

    // Create an HTML table to display the data
    echo "<table>";
    echo "<tr>";
    echo "<th>Subject Name</th>";
    echo "<th>Units</th>";
    echo "<th>Time Slot</th>";
    echo "</tr>";

    // Iterate through the demo table rows for the selected usersUid
    while ($demoRow = $demoResult->fetch_assoc()) {
        $startTime = strtotime($demoRow['start_time']);
        $endTime = strtotime($demoRow['end_time']);

        // Check if start_time and end_time are valid
        if ($startTime === false || $endTime === false) {
            echo "Invalid time format";
            continue;
        }

        $interval = ($endTime - $startTime) / $demoRow['units'];

        // Retrieve the subjects for the current usersUid from the logs table
        $subjectsQuery = "SELECT subject_description, subject_units FROM logs WHERE usersUid = '$usersUid'";
        $subjectsResult = $conn->query($subjectsQuery);

        // Check if there are subjects for the current usersUid
        if ($subjectsResult->num_rows > 0) {
            $currentStartTime = $startTime;

            // Iterate through the subjects and display them in separate rows
            while ($subjectsRow = $subjectsResult->fetch_assoc()) {
                $subjectDescription = $subjectsRow['subject_description'];
                $subjectUnits = $subjectsRow['subject_units'];

                // Skip the lunchtime (12 PM - 1 PM)
                $lunchStartTime = strtotime("12:00 PM");
                $lunchEndTime = strtotime("01:00 PM");

                // Adjust the start time if it falls within the lunchtime
                if ($currentStartTime >= $lunchStartTime && $currentStartTime < $lunchEndTime) {
                    $currentStartTime = $lunchEndTime;
                }

                $currentEndTime = $currentStartTime + ($subjectUnits * $interval);

                echo "<tr>";
                echo "<td>" . htmlspecialchars($subjectDescription) . "</td>";
                echo "<td>" . htmlspecialchars($subjectUnits) . "</td>";
                echo "<td>" . date("h:i A", $currentStartTime) . " - " . date("h:i A", $currentEndTime) . "</td>";
                echo "</tr>";

                $currentStartTime = $currentEndTime;
            }
        } else {
            // Display an empty row if no subjects found for the usersUid
            echo "<tr>";
            echo "<td>" . htmlspecialchars($demoRow['id']) . "</td>";
            echo "<td>" . htmlspecialchars($usersUid) . "</td>";
            echo "<td>No subjects found</td>";
            echo "</tr>";
        }
    }

    // Close the table
    echo "</table>";

    // Close the subjects result set
    $subjectsResult->close();
} else {
    // Display a message if usersUid is not provided
    echo "No usersUid provided";
}

// Close the demo result set
$demoResult->close();

// Close the database connection
$conn->close();
?>
