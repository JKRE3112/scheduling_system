<?php
include('includes/functions-inc.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arvo&family=Lato&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/528fcd2c3c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <title>Main</title>

    <style>
    body {
        font-family: Arial, sans-serif;
    }
    .faculty-name {
        font-size: 24px;
        margin-bottom: 10px;
    }

    .faculty-info {
        font-size: 18px;
        margin: 5px 0;
    }

    .schedule-table {
        border-collapse: collapse;
        width: 100%;
        margin-top: 10px; /* Reduce the spacing between the table and data result */
    }

    .schedule-table th,
    .schedule-table td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }

    .schedule-table th {
        background-color: #f2f2f2;
    }

    .error-message {
        color: red;
        font-weight: bold;
        margin-top: 20px;
    }
</style>
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
    </nav>
    <style>
        .faculty-name {
            text-decoration: underline;
        }

        .faculty-info {
            margin-bottom: 5px;
        }

        table {
            margin-top: 20px;
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <div class="container">
    <?php
// Connect to the database
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
    $dataQuery = "SELECT users.usersFName, users.usersLName, users.usersType, demo.units, demo.overload, demo.start_time, demo.end_time FROM users JOIN demo ON users.usersUid = demo.usersUid WHERE users.usersUid = '$usersUid'";
    $dataResult = $conn->query($dataQuery);

    // Check if the data exists
    if ($dataResult->num_rows > 0) {
        $dataRow = $dataResult->fetch_assoc();
        $usersFName = $dataRow['usersFName'];
        $usersLName = $dataRow['usersLName'];
        $usersType = $dataRow['usersType'];
        $units = $dataRow['units'];
        $overload = $dataRow['overload'];
        $subjectUnits = $subjectsRow['subject_units'];
        $currentEndTime = $startTime + ($subjectUnits * 3600);


        // Display the faculty name, units, overload, and userType with underline
        echo "<div class='container mt-3'>";
        echo "<h1 class='faculty-name'>Faculty: <u>" . htmlspecialchars($usersFName) . " " . htmlspecialchars($usersLName) . "</u></h1>";
        echo "<p class='faculty-info'>Units: <u>" . htmlspecialchars($units) . "</u></p>";
        echo "<p class='faculty-info'>Overload: <u>" . htmlspecialchars($overload) . "</u></p>";
        echo "<p class='faculty-info'>Designation: <u>" . htmlspecialchars($usersType) . "</u></p>";
        echo "</div>";
    }
}

// Free the data result set
$dataResult->close();

// Check if the start time and end time are valid
if ($startTime === false || $endTime === false) {
    echo "Invalid time format";
    exit;
}

// Get the selected usersUid from the query string or form submission
$selectedUsersUid = $_GET['usersUid']; // Replace 'usersUid' with the name of the input field

// Query to retrieve data from demo table for the selected user
$demoQuery = "SELECT * FROM demo WHERE usersUid = '$selectedUsersUid'";
$demoResult = $conn->query($demoQuery);

// Create an HTML table to display the data
echo "<table class='table table-striped'>";
echo "<thead class='thead-dark'>";
echo "<tr style='background-color: #441116; color: white;'>";
echo "<th>Subject Units</th>";
echo "<th>Subject Description</th>";
echo "<th>Day of Week</th>";
echo "<th>Time Slot</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";


// ...

// Iterate through the demo table rows for the selected user
$daysOfWeek = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'];
$dayIndex = 0; // Start from Monday

while ($demoRow = $demoResult->fetch_assoc()) {
    $usersUid = $demoRow['usersUid'];

    // Retrieve the subjects for the selected usersUid from the logs table
    $subjectsQuery = "SELECT subject_description, subject_units FROM logs WHERE usersUid = '$usersUid'";
    $subjectsResult = $conn->query($subjectsQuery);

    // Check if there are subjects for the selected usersUid
    if ($subjectsResult->num_rows > 0) {
        // Get the start time and end time for Monday
        $startTime = strtotime($demoRow['start_time']);
        $endTime = strtotime($demoRow['end_time']);

// Iterate through the subjects and assign a day of the week starting from Monday
while ($subjectsRow = $subjectsResult->fetch_assoc()) {
    $subjectDescription = $subjectsRow['subject_description'];
    $subjectUnits = $subjectsRow['subject_units'];

    // Calculate the end time of the current subject
    $currentEndTime = $startTime + ($subjectUnits * 3600);

    // Check if the subject falls within the lunch break
    while ($startTime <= strtotime('12:00 PM') && $currentEndTime >= strtotime('1:00 PM')) {
        // Move the start time to the end of the lunch break (1:00 PM)
        $startTime = strtotime('1:00 PM');
        $currentEndTime = $startTime + ($subjectUnits * 3600);
    }

    // Check if the subject exceeds the end time of the day
    if ($currentEndTime > $endTime) {
        // Move to the next day and update the start time and end time
        $dayIndex = ($dayIndex + 1) % count($daysOfWeek);
        $startTime = strtotime($demoRow['start_time']);
        $endTime = strtotime($demoRow['end_time']);

        // Adjust the end time of the subject to fit within the remaining time of the day
        $currentEndTime = $startTime + ($subjectUnits * 3600);
    }

    // Get the day of the week based on the current index
    $dayOfWeek = $daysOfWeek[$dayIndex];

    echo "<tr>";
    echo "<td>" . $subjectUnits . "</td>";
    echo "<td>" . $subjectDescription . "</td>";
    echo "<td>" . $dayOfWeek . "</td>";
    echo "<td>" . date("h:i A", $startTime) . " - " . date("h:i A", $currentEndTime);

    // Add lunch break text for the specific time slot
    if ($startTime <= strtotime('12:00 PM') && $currentEndTime >= strtotime('1:00 PM')) {
        echo "<br>Lunch Break";
    }

    echo "</td>";
    echo "</tr>";

    // Update the start time for the next subject
    $startTime = $currentEndTime;
}


    } else {
        // Display an empty row if no subjects found for the selected usersUid
        echo "<tr>";
        echo "<td>No subjects found</td>";
        echo "<td></td>";
        echo "<td></td>";
        echo "<td></td>";
        echo "</tr>";
    }
}
// ...




echo "</tbody>";
// Close the table
echo "</table>";

// Close the database connection
$conn->close();
?>

<footer id="footer" class="py-2 my-2 container-fluid text-center">
        <hr>
          <small>Copyright &copy; TECHNOLOGICAL UNIVERSITY OF THE PHILIPPINES MANILA<br></small>
          <small>ALL RIGHTS RESERVED 2023</small>
      </footer>
    </div>


