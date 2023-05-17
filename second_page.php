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
	header('location: login-first.php');
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

 
?>



<html>
<head>
</head>
<body>
<meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>

    <body>
        
		
		
        <!--Method One-->
        <div class="form-group">
			<label class="col-md-4 control-label" for="start_time">Start time</label> 
			<div class="col-md-12">
		<select  id="start_time" name="start_time" class="form-control">
		  <?php echo $options;?>
       

            <?php while($row2 = mysqli_fetch_array($result2)):;?>

            <option value="<?php echo $row2[0];?>"><?php echo $row2[1];?></option>
			

            <?php endwhile;?>

        </select>
        
		</div>		
    </div>
    </body>
</head>
</html>

<?php

// php select option value from database

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

?>





        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>

    <body>
        
		<!-- Method Two -->
        <div class="form-group">
			<label class="col-md-6 control-label" for="end_time">End time</label> 
			<div class="col-md-12">
		<select  id="end_time" name="end_time" class="form-control">
            <?php echo $options;?>
        </select>
		</div>
		</div>
		
       

            <?php while($row2 = mysqli_fetch_array($result2)):;?>

            <option value="<?php echo $row2[0];?>"><?php echo $row2[1];?></option>

            <?php endwhile;?>

        </select>

        <?php

        // php select option value from database

$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "insertion";

// connect to mysqli database

$connect = mysqli_connect($hostname, $username, $password, $databaseName);

// mysqli select query
$query = "SELECT * FROM `overload`";

// for method 1

$result1 = mysqli_query($connect, $query);

// for method 2
$query = "SELECT * FROM `overload`";
$result2 = mysqli_query($connect, $query);

$overloadOptions = "";

while ($row2 = mysqli_fetch_array($result2)) {
    $overloadOptions .= "<option value='" . $row2[0] . "'>" . $row2[1] . "</option>";
}
?>



<html>
<head>
</head>
<body>
<meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>

    <body>
        
		<!-- Method Two -->
        <div class="form-group">
			<label class="col-md-4 control-label" for="overload">Overload</label> 
			<div class="col-md-12">
		<select  id="overload" name="overload"  class="form-control">
            <?php echo $options;?>
        </select>
		</div>
		</div>
		
        <!--Method One-->
        
       

            <?php while($row2 = mysqli_fetch_array($result2)):;?>

            <option value="<?php echo $row2[0];?>"><?php echo $row2[1];?></option>
			

            <?php endwhile;?>

        </select>

        <?php

// php select option value from database

$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "insertion";

$connect = mysqli_connect($hostname, $username, $password, $databaseName);

$query = "SELECT * FROM `units`";
$result2 = mysqli_query($connect, $query);

$unitsOptions = "";

while ($row2 = mysqli_fetch_array($result2)) {
    $unitsOptions .= "<option value='" . $row2[0] . "'>" . $row2[1] . "</option>";
}

$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "insertion";

$connect = mysqli_connect($hostname, $username, $password);

// Check connection
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create the "insertion" database if it doesn't exist
$createDbQuery = "CREATE DATABASE IF NOT EXISTS $databaseName";
mysqli_query($connect, $createDbQuery);

// Switch to the "insertion" database
mysqli_select_db($connect, $databaseName);

// Create the "data" table if it doesn't exist
$createTableQuery = "CREATE TABLE IF NOT EXISTS data (
    id INT(11) NOT NULL AUTO_INCREMENT,
    units VARCHAR(255) NOT NULL,
    start_time VARCHAR(255) NOT NULL,
    end_time VARCHAR(255) NOT NULL,
    overload VARCHAR(255) NOT NULL,
    PRIMARY KEY (id)
)";
mysqli_query($connect, $createTableQuery);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $units = $_POST["units"];
    $start_time = $_POST["start_time"];
    $end_time = $_POST["end_time"];
    $overload = $_POST["overload"];

    // Perform the necessary database operations here, such as inserting the values into the data table
    $insertQuery = "INSERT INTO data (units, start_time, end_time, overload) VALUES ('$units', '$start_time', '$end_time', '$overload')";
    $result = mysqli_query($connect, $insertQuery);

    if ($result) {
        // Success message
        echo "Data saved successfully!";
    } else {
        // Error message
        echo "Error: " . mysqli_error($connect);
    }
}
?>


<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<!-- Units -->
<div class="container mt-3">
    <div class="row">
<div class="form-group">
        <label class="col-md-4 control-label" for="end_time">Units</label>
        <div class="col-md-12">
            <select id="units" name="units" class="form-control">
                <?php echo $unitsOptions; ?>
            </select>
        </div>
    </div>

    <!-- Method One -->

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
        <button id="submit" name="insert" class="btn btn-secondary" onclick="window.location.href = 'third_page.php';">Next</button>
        </div>
    </div>
    </div>
    </body>
</head>
</html>
