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
              <a class="nav-link active" href="head_second_page.php">SCHEDULE</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="headlog.php">SUBJECT LOGS</a>
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
    <?php
session_start();

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

$query = "SELECT * FROM `timer`";
$result2 = mysqli_query($connect, $query);

$startOptions = "";
$endOptions = "";

while ($row2 = mysqli_fetch_array($result2)) {
    $startOptions .= "<option value='" . $row2[0] . "'>" . $row2[1] . "</option>";
    $endOptions .= "<option value='" . $row2[0] . "'>" . $row2[2] . "</option>";
}

$query = "SELECT * FROM `overload`";
$result2 = mysqli_query($connect, $query);

$overloadOptions = "";

while ($row2 = mysqli_fetch_array($result2)) {
    $overloadOptions .= "<option value='" . $row2[0] . "'>" . $row2[1] . "</option>";
}
?>


<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <!-- Method One -->
    <div class="container mt-3">
    <div class="row">
    <div class="col-lg-11">
    <div class="form-group">
        <label class="col-md-4 control-label" for="start_time">Start time</label>
        <div class="col-md-12">
            <select id="start_time" name="start_time" class="form-control">
                <?php echo $startOptions; ?>
            </select>
        </div>
    </div>

    <!-- Method Two -->
    <div class="form-group">
        <label class="col-md-6 control-label" for="end_time">End time</label>
        <div class="col-md-12">
            <select id="end_time" name="end_time" class="form-control">
                <?php echo $endOptions; ?>
            </select>
        </div>
    </div>

    <!-- Method Three -->
    <div class="form-group">
        <label class="col-md-4 control-label" for="overload">Overload</label>
        <div class="col-md-12">
            <select id="overload" name="overload" class="form-control">
                <?php echo $overloadOptions; ?>
            </select>
        </div>
    </div>

    <!-- Button -->
    <div class="form-group align-right">
        <label class="col-md-4 control-label" for="submit"></label>
        <div class="col-md-6">
        <button id="submit" name="insert" class="btn btn-secondary" onclick="window.location.href = 'head_third_page.php';">Next</button>
        </div>
    </div>
    </div>
  </div>
</div>
</body>
</html>
