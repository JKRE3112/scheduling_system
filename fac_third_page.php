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
        <a class="navbar-brand" href="faculty.php"><img src="images/brand2.png" width="200" height="50"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent" style="Font-Family: 'Arvo', Serif;">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0 fw-bolder">
            <li class="nav-item">
              <a class="nav-link" href="faculty.php">HOME</a>  
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="fac_second_page.php">SCHEDULE</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="faclog.php">SCHEDULE LOGS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="includes/logout.php">LOGOUT</a>
            </li>
                
      </li>
    </ul>
  </div>
          
        </div>
      </div>
    </nav>

    <?php
session_start();
include('includes/functions-inc.php');
if (!isLoggedIn()) {
	header('location: login-first.php');}

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

// Query the database to retrieve the first name and last name
$query = "SELECT usersFName, usersLName FROM users WHERE usersUid = '$usersUid'";
$result = mysqli_query($connection, $query);

// Check if the query was successful and fetch the data
if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $firstName = $row['usersFName'];
    $lastName = $row['usersLName'];

    // Print the first name and last name
    echo '<div class="container mt-3">';
    echo '<div class="row">';
    echo '<div class="col-lg-11">';
    echo '<h4>Welcome! ' . $firstName . ' ' . $lastName . '</h4>';

    echo '</div>';
    echo '</div>';
    echo '</div>';

} else {
    // Handle the case when the user is not found or an error occurred
    echo "Unable to retrieve user information.";
}

$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "insertion";

$connect = mysqli_connect($hostname, $username, $password, $databaseName);

$query = "SELECT * FROM year_level";
$result2 = mysqli_query($connect, $query);

$options = "";

while ($row2 = mysqli_fetch_array($result2)) {
    $options .= "<option>" . $row2[1] . "</option>";
}

// Retrieve the useruid from the session
$usersUid = $_SESSION['usersUid'];


// Handle the form submission
if (isset($_POST['logBtn'])) {
  // Retrieve the selected subjects
  $subjects = $_POST['subjects'];

  // Prepare the query to insert the logged subjects into the "logs" table
  $query = "INSERT INTO logs (usersUid, subject_description, subject_units) VALUES ";

  foreach ($subjects as $subject_description) {
      $subject_description = mysqli_real_escape_string($connection, $subject_description);

      // Retrieve the subject_units for the current subject_description
      $unitsQuery = "SELECT subject_units FROM subject WHERE subject_description = '$subject_description'";
      $unitsResult = mysqli_query($connection, $unitsQuery);

      if ($unitsResult && mysqli_num_rows($unitsResult) > 0) {
          $row = mysqli_fetch_assoc($unitsResult);
          $subject_units = $row['subject_units'];

          // Include subject_units in the query
          $query .= "('$usersUid', '$subject_description', '$subject_units'),";
      } else {
          // Error occurred while retrieving subject_units
          // Handle the error or perform any error handling actions
      }
  }

  $query = rtrim($query, ','); // Remove the trailing comma

  // Execute the query
  if (mysqli_query($connection, $query)) {
      // Query executed successfully, subjects logged
      // You can perform any additional actions or redirect to another page if needed
  } else {
      // Error occurred while logging subjects
      // You can log the error or perform any error handling actions
  }
}


?>


<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div class="container mt-3">
    <div class="row">
    <div class="col-lg-11">
        
    <!-- Method One -->
    <div class="form-group">
        <label class="col-md-4 control-label" for="year_level">Year Level</label>
        <div class="col-md-12">
            <select id="year_level" name="year_level" class="form-control">
                <?php echo $options; ?>
            </select>
        </div>
    </div>

    <?php
    $query = "SELECT * FROM `course`";
    $result2 = mysqli_query($connect, $query);

    $options = "";

    while ($row2 = mysqli_fetch_array($result2)) {
        $options .= "<option>" . $row2[2] . "</option>";
    }
    ?>

    <!-- Method Two -->
<div class="form-group">
    <label class="col-md-6 control-label" for="course_name">Course</label>
    <div class="col-md-12">
        <select id="course_name" name="course_name" class="form-control">
            <?php echo $options; ?>
        </select>
    </div>
</div>

<?php
$query = "SELECT * FROM `subject`";
$result1 = mysqli_query($connect, $query);

$suboptions = "";

while ($row = mysqli_fetch_array($result1)) {
    $suboptions .= "<option value='" . $row['subject_description'] . "'>" . $row['subject_description'] . "</option>";
}
?>

<form method="POST">
    <!-- Existing code for year level, course, and subject fields -->

    <div class="form-group">
    <label class="col-md-4 control-label" for="subject"><h3>Preferred Subjects</h3></label>
    <div class="col-md-12" id="subjectFieldsContainer">
        <!-- Existing subject field -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="subject1">Subject 1</label>
            <div class="col-md-12">
                <select id="subject1" name="subjects[]" class="form-control">
                    <?php echo $suboptions; ?>
                </select>
            </div>
        </div>
    </div>
</div>
    <div class="form-group align-right">
    <label class="col-md-4 control-label" for="submit"></label>
    <div class="col-md-12">
      <button id="addSubjectBtn" class="btn btn-secondary">Add Subject</button>
      <button id="logBtn" class="btn btn-outline-secondary" type="submit">Confirm Subjects</button>
    </div>
  </div>
</form>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>
 $(document).ready(function() {
  var counter = 2; // Start from 2 to account for the existing subject field

  $("#addSubjectBtn").click(function(event) {
    event.preventDefault();
    var newSubjectField =
      '<div class="form-group">' +
      '<label class="col-md-4 control-label" for="subject' +
      counter +
      '">Subject ' +
      counter +
      '</label>' +
      '<div class="col-md-12">' +
      '<select id="subject' +
      counter +
      '" name="subjects[]" class="form-control">' +
      $("#subject1").html() +
      "</select>" +
      "</div>" +
      "</div>";
    $("#subjectFieldsContainer").append(newSubjectField);
    counter++;
  });

  $("#logBtn").click(function(event) {
    event.preventDefault();

    // Retrieve the selected subjects
    var subjects = $("select[name='subjects[]']").map(function() {
      return $(this).val();
    }).get();

    if (subjects.length === 0) {
      alert("Please select at least one subject.");
      return;
    }

    // Use AJAX to send the form data to the server without reloading the page
    $.ajax({
      url: "", // Use the current URL or specify the server-side script URL
      type: "POST",
      data: { subjects: subjects, logBtn: 1 },
      success: function(response) {
        console.log(response); // Handle the response from the server
        alert("Subjects confirmed.");
      },
      error: function(xhr, status, error) {
        console.log(error); // Handle errors
      }
    });

    $(this).prop("disabled", true); // Disable the button after clicking
  });
});


</script>
<footer id="footer" class="py-2 my-2 container-fluid text-center">
        <hr>
          <small>Copyright &copy; TECHNOLOGICAL UNIVERSITY OF THE PHILIPPINES MANILA<br></small>
          <small>ALL RIGHTS RESERVED 2023</small>
      </footer>
    </div>
</body>
</html>
