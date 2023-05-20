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
    <link rel="stylesheet" href="style.css"></link>
    
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
              <a class="nav-link active" href="head_second_page.php">SCHEDULE</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="headlog.php">SUBJECT LOGS</a>
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
?>



<!DOCTYPE html>
<html lang="en">
<head>
<script>
        // Function to check if all fields are filled/selected
        function checkFields() {
            var units = document.getElementById("units").value;
            var startTime = document.getElementById("start_time").value;
            var endTime = document.getElementById("end_time").value;
            var overload = document.getElementById("overload").value;

            // Enable/disable buttons based on field values
            var saveButton = document.getElementById("save_schedule_button");
            var nextButton = document.getElementById("next_button");
            
            if (units && startTime && endTime && overload) {
                saveButton.disabled = false;
                nextButton.disabled = false;
            } else {
                saveButton.disabled = true;
                nextButton.disabled = true;
            }
        }
    </script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty</title>
    </head>
<body>
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">

                <?php 
                    if(isset($_SESSION['status']))
                    {
                        ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Hey!</strong> <?php echo $_SESSION['status']; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                             <?php 
                         unset($_SESSION['status']);
                    }
                ?>

                <div class="card mt-6">
                                     <div class="card-body" id="headcard">

                        <form action="config_head.php" method="POST">
                        <div class="form-group mb-3">
                               
                            <div class="form-group mb-3">
                                <label for="">Units</label>
                                <select id="units" name="units" class="form-control" onchange="checkFields()">
                                <!-- Options -->
                                    <option value="">--Select Units--</option>
                                    <option value="3 units">3 units(Head/Admin only)</option>
                                    <option value="6 units">6 units(Head/Admin only)</option>
                                    <option value="9 units">9 units(Head/Admin only)</option>
                                     </select>
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Start time</label>
                                <select id="start_time" name="start_time" class="form-control" onchange="checkFields()">
                                    <option value="">--Select Start time--</option>
                                    <option value="6 AM">6 AM</option>
                                    <option value="7 AM">7 AM</option>
                                    <option value="8 AM">8 AM</option>
                                    <option value="9 AM">9 AM</option>
                                    <option value="10 AM">10 AM</option>
                                    
                                </select>
                            </div>

                            <div class="form-group mb-3">
                                <label for="">End time</label>
                                <select id="end_time" name="end_time" class="form-control" onchange="checkFields()">
                                    <option value="">--Select End time--</option>
                                    <option value="12 PM">12 PM</option>
                                    <option value="2 PM">2 PM</option>
                                    <option value="3 PM">3 PM</option>
                                    <option value="4 PM">4 PM</option>
                                    <option value="5 PM">5 PM</option>
                                    <option value="6 PM">6 PM</option>
                                    <option value="6 PM">7 PM</option>
                                    
                                </select>
                            </div>

                            <div class="form-group mb-3">
                                <label for="">Overload</label>
                                <select id="overload" name="overload" class="form-control" onchange="checkFields()">
                                    <option value="">--Select Overload--</option>
                                    <option value="0">0 units</option>
                                    <option value="3">3 units</option>
                                    <option value="6">6 units</option>
                                    <option value="9">9 units</option>
                                    <option value="12">12 units</option>
                                    <option value="18">18 units</option>
                                    <option value="30">30 units</option>
                                    
                                </select>
                            </div>
                                
                                <div class="form-group mb-4">
                              
                                <button id="save_schedule_button" type="submit" name="save_select" class="btn btn-outline-secondary" disabled>Save Schedule</button>
                                <a id="next_button" href="head_third_page.php" class="btn btn-secondary" button type="submit" disabled>Next</a>
                                <button type="submit" name="delete_last" class="btn btn-dark">Delete</button>
                                
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer id="footer" class="py-2 my-2 container-fluid text-center">
        <hr>
          <small>Copyright &copy; TECHNOLOGICAL UNIVERSITY OF THE PHILIPPINES MANILA<br></small>
          <small>ALL RIGHTS RESERVED 2023</small>
      </footer>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  </body>
</html>