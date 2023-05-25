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

  <body style="background-image: url(images/head2.svg); background-repeat: repeat;">

    <!-- Navigation Bar-->
    <nav class="navbar navbar-expand-lg navbar-light sticky-top" id="navbar">
      <div class="container">
        <a class="navbar-brand" href="faculty.php"><h2>CS Scheduling</h2></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent" style="Font-Family: 'Arvo', Serif;">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0 fw-bolder">
            <li class="nav-item">
              <a class="nav-link" href="faculty.php">HOME</a>  
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="first_page.php">SCHEDULE</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="faclog.php">SUBJECT LOGS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="facview.php">VIEW</a>
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
    header('location: login-first.php');
    exit; // Add exit to stop further execution
}

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

$query = "SELECT * FROM `year_level`";
$result2 = mysqli_query($connect, $query);

$options = "<option value=''>Please Select A Year Level</option>";

while ($row2 = mysqli_fetch_array($result2)) {
    $options .= "<option>" . $row2[1] . "</option>";
}

// Retrieve the useruid from the session
$usersUid = $_SESSION['usersUid'];


// Handle the form submission
if (isset($_POST['submitBtn'])) {
    // Retrieve the selected subjects
    $subjects = $_POST['subjects'];

    // Prepare the query to insert the logged subjects into the "logs" table
    $query = "INSERT INTO logs (usersUid, subject_description, subject_units) VALUES ";

    foreach ($subjects as $subject_description) {
        $subject_description = mysqli_real_escape_string($connection, $subject_description);
        $subject_units = mysqli_real_escape_string($connection, $subject_units);
        $query .= "('$usersUid', '$subject_description'),";
    }

    $query = rtrim($query, ','); // Remove the trailing comma

    // Execute the query
    if (mysqli_query($connection, $query)) {
        // Query executed successfully, subjects logged
        // You can perform any additional actions or redirect to another page if needed
        echo "Subjects logged successfully.";
    } else {
        // Error occurred while logging subjects
        // You can log the error or perform any error handling actions
        echo "Error logging subjects.";
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

    $options = "<option value=''>Please Select A Course</option>";

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

<!-- Add the new filter "Course Type" -->
<div class="form-group">
    <label class="col-md-6 control-label" for="course_type">Course Type</label>
    <div class="col-md-12">
        <select id="course_type" name="course_type" class="form-control">
            <option value="STEM">STEM</option>
            <option value="NON-STEM">NON-STEM</option>
        </select>
    </div>
</div>
<input type="hidden" id="selected_course_type" name="selected_course_type">


<div class="form-group">
    <label class="col-md-4 control-label" for="subject"><h3>Preferred Subjects</h3></label>
    <div class="col-md-8" id="subjectFieldsContainer">
        <!-- Existing subject field -->
        <div class="form-group row">
            <label class="col-md-8 control-label" for="subject1">Select Your Subject:</label> 
            <div class="col-md-8">
                <select id="subject1" class="form-control">
                    <?php echo $suboptions; ?>
                </select>
            </div>
            <div class="col-md-4">
                <button class="btn btn-dark" id="addSubjectBtn">
                    <i class="fas fa-plus"></i>
                </button>
                <button class="btn btn-dark" id="undoBtn">
                    <i class="fas fa-undo"></i>
                </button>
            </div>
        </div>
    </div>
</div>





        <!-- Add the table element here -->
<div class="container mt-3">
    
    <table class="table table-bordered" id="selectedSubjectsTable">
        <thead>
            <tr>
                <th>Selected Subject/s:</th>
            </tr>
        </thead>
        <tbody></tbody>
    </table>
</div>

<form method="post" action="">
    <div class="form-group align-right">
        <label class="col-md-4 control-label" for="submit"></label>
        <div class="col-md-12">
            <button id="submitBtn" class="btn btn-outline-secondary" type="submit" name="submitBtn">Confirm Subjects</button>
            <button id="undoBtn" class="btn btn-dark">Finish Schedule</button>
        </div>
    </div>
</form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>
$(document).ready(function() {
    // Event listener for year level change
$("#year_level").change(function() {
    var selectedYearLevel = $(this).val();
    var selectedCourse = $("#course_name").val();
    var selectedCourseType = $("#course_type").val(); // Get the selected course type
    fetchSubjects(1, selectedYearLevel, selectedCourse, selectedCourseType);
});

    // Event listener for form submission
    $("form").submit(function(e) {
        e.preventDefault(); // Prevent the default form submission
        logSubjects();
    });

    // Event listener for course change
    $("#course_name").change(function() {
        var selectedYearLevel = $("#year_level").val();
        var selectedCourse = $(this).val();
        var selectedCourseType = $("#course_type").val(); // Get the selected course type
        fetchSubjects(1, selectedYearLevel, selectedCourse, selectedCourseType);
    });

    // Event listener for "Add Subject" button click
    $("#addSubjectBtn").click(function() {
    var selectedSubject = $("#subject1").val();
    var selectedCourseType = $("#course_type").val(); // Get the selected course type
    if (selectedSubject) {
        addSelectedSubject(selectedSubject, selectedCourseType); // Pass the selected course type as an argument
    }
    return false; // Prevent the default form submission
});

    // Event listener for "Undo" button click
    $("#undoBtn").click(function(e) {
        e.preventDefault();
        undoLastSubject();
    });


    // Event listener for "Confirm Subjects" button click
    $("#submitBtn").click(function(e) {
        e.preventDefault();
        logSubjects();
    });


    function addSelectedSubject(selectedSubject, selectedCourseType) {
    // Append the selected subject to the table
    $("#selectedSubjectsTable tbody").append("<tr><td>" + selectedSubject + "</td></tr>");

    // Remove the selected subject from the selection options
    $("#subject1 option[value='" + selectedSubject + "']").remove();

    // Set the value of the hidden input field to the selected course type
    $("#selected_course_type").val(selectedCourseType);
}
    // Function to fetch subjects based on year level, course, and course type
    function fetchSubjects(counter, yearLevel, course, courseType) {
    $.ajax({
        url: "fetch_subjects.php",
        type: "POST",
        data: { yearLevel: yearLevel, course: course, courseType: courseType },
        success: function(response) {
            $("#subject" + counter).html(response);
        },
        error: function(xhr, status, error) {
            console.log(error);
        }
    });
}

    function undoLastSubject() {
    var lastRow = $("#selectedSubjectsTable tbody tr:last-child");
    if (lastRow.length > 0) {
        // Remove the last row
        lastRow.remove();

        // Get the subject description from the removed row
        var removedSubject = lastRow.find("td:first-child").text();

        // Add the removed subject back to the selection options
        $("#subject1").append("<option value='" + removedSubject + "'>" + removedSubject + "</option>");
    }
}



    function logSubjects() {
        var subjects = [];
        $("#selectedSubjectsTable tbody tr").each(function() {
            var subject = $(this).find("td:first-child").text();
            subjects.push(subject);
        });

        if (subjects.length > 0) {
            $.ajax({
                url: "log_subjects.php", // Replace with the path to your server-side script for logging subjects
                type: "POST",
                data: { subjects: subjects },
                success: function(response) {
                    console.log(response); // Handle the response from the server
                    alert("Subjects confirmed.");
                },
                error: function(xhr, status, error) {
                    console.log(error); // Handle errors
                }
            });
        } else {
            console.log("No subjects selected.");
        }
    }
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