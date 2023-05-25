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
  
</head>
<body>
    <div class="container">
    <?php
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
if (isset($_GET['section_name'])) {
    $section_name = $_GET['section_name'];

    $sql = "SELECT subject_code, subject_description, subject_units, subject_hours, usersUid, duration, day FROM curriculum WHERE section_name = '$section_name'";
    echo "SQL Query: $sql";
$result = $conn->query($sql);


// Check if there are any results
if ($result->num_rows > 0) {
    // Create a table to display the results
    echo "<table>";
    echo "<tr>";
    echo "<th>Subject Code</th>";
    echo "<th>Subject Description</th>";
    echo "<th>Subject Units</th>";
    echo "<th>Subject Hours</th>";
    echo "<th>UsersUid</th>";
    echo "<th>Duration</th>";
    echo "<th>Day</th>";
    echo "</tr>";

    // Loop through the results and display each row in a table row
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['subject_code'] . "</td>";
        echo "<td>" . $row['subject_description'] . "</td>";
        echo "<td>" . $row['subject_units'] . "</td>";
        echo "<td>" . $row['subject_hours'] . "</td>";
        echo "<td>" . $row['usersUid'] . "</td>";
        echo "<td>" . $row['duration'] . "</td>";
        echo "<td>" . $row['day'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No results found.";
}
}

// Close the connection
$conn->close();
?>


<footer id="footer" class="py-2 my-2 container-fluid text-center">
        <hr>
          <small>Copyright &copy; TECHNOLOGICAL UNIVERSITY OF THE PHILIPPINES MANILA<br></small>
          <small>ALL RIGHTS RESERVED 2023</small>
      </footer>
    </div>
