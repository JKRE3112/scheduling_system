<?php
include('includes/functions-inc.php');
session_start();
if (!isLoggedIn()) {
    header('location: login-first.php');
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "insertion";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') { // check if the form has been submitted
    $year_level = $_POST['yearlevel']; // get the year level from the form data
    $course_code = $_POST['coursecode']; // get the course code from the form data
    $course_type = $_POST['sectype']; // get the course type from the form data

    // Convert course code to abbreviation
    $course_abbreviation = '';
    switch ($course_code) {
        case 'Information Technology':
            $course_abbreviation = 'IT';
            break;
        case 'Information System':
            $course_abbreviation = 'IS';
            break;
        case 'Computer Science':
            $course_abbreviation = 'CS';
            break;
    }

    // Convert year level to number
    $year_number = '';
    switch ($year_level) {
        case 'First Year':
            $year_number = '1';
            break;
        case 'Second Year':
            $year_number = '2';
            break;
        case 'Third Year':
            $year_number = '3';
            break;
        case 'Fourth Year':
            $year_number = '4';
            break;
    }

    // Get the count of existing sections for the same course, year, and type
    $section_count_sql = "SELECT COUNT(*) AS section_count FROM section WHERE year_level = '$year_level' AND course_code = '$course_code' AND course_type = '$course_type'";
    $section_count_result = $conn->query($section_count_sql);
    $section_count = 0;
    if ($section_count_result->num_rows > 0) {
        $section_count_row = $section_count_result->fetch_assoc();
        $section_count = $section_count_row['section_count'];
    }

    // Calculate the section suffix based on the section count
    $section_suffix = chr(ord('A') + $section_count);

    // Generate the section name
    $section_name = 'BS' . $course_abbreviation . $year_number . $section_suffix;
    if ($course_type == 'STEM') {
        $section_name .= '-STEM';
    } else {
        $section_name .= '-NON STEM';
    }

    // SQL INSERT statement to insert data into the section table
    $sql = "INSERT INTO section (year_level, course_code, course_type, section_name) VALUES ('$year_level', '$course_code', '$course_type', '$section_name')";

    if ($conn->query($sql) === TRUE) {
        $message = "Section inserted successfully";
    } else {
        $message = "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close(); // close the database connection
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
              <a class="nav-link" href="headlog.php">SUBJECT LOGS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="view.php">VIEWING</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="list.php">LIST</a>
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

</head>
<body>
 
 <br><div class="container"> 
  <div class="row">
    <div class="col-lg-6">
		<div class="jumbotron">
                Add your preferred sections here:
				<form class="form-horizontal" method= "POST">
				<fieldset>

				<!-- Form Name -->
				<legend>Add Sections</legend>


<!-- Year Level -->
<div class="form-group">
    <label class="col-md-4 control-label" for="subdescription">Year Level</label>
    <div class="col-md-5">
        <select id="yearlevel" name="yearlevel" class="form-control input-md" required="">
            <option value="First Year">First Year</option>
            <option value="Second Year">Second Year</option>
            <option value="Third Year">Third Year</option>
            <option value="Fourth Year">Fourth Year</option>
        </select>
    </div>
</div>

<!-- Course -->
<div class="form-group">
    <label class="col-md-4 control-label" for="subdescription">Course</label>
    <div class="col-md-5">
        <select id="coursecode" name="coursecode" class="form-control input-md" required="">
            <option value="Information Technology">Information Technology</option>
            <option value="Information System">Information System</option>
            <option value="Computer Science">Computer Science</option>
        </select>
    </div>
</div>

<!-- Classification -->
<div class="form-group">
    <label class="col-md-4 control-label" for="subdescription">Classification</label>
    <div class="col-md-5">
        <select id="sectype" name="sectype" class="form-control input-md" required="">
            <option value="STEM">STEM</option>
            <option value="NON-STEM">NON-STEM</option>
        </select>
    </div>
</div>

				<!-- Button -->
				<div class="form-group" align="left">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-5">
    <input type="submit" id="submit" name="submit" class="btn btn-warning" value="Add Section"></input>
  </div>
</div>
<!-- Display the message -->
<p><?php echo isset($message) ? $message : ''; ?></p>

				</fieldset>
				</form>
		</div>		
    </div>

    <footer id="footer" class="py-2 my-2 container-fluid text-center">
        <hr>
          <small>Copyright &copy; TECHNOLOGICAL UNIVERSITY OF THE PHILIPPINES MANILA<br></small>
          <small>ALL RIGHTS RESERVED 2023</small>
      </footer>
    </div>

