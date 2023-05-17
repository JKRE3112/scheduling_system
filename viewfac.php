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
        <a class="navbar-brand" href="main.php"><h2>CS Scheduling</h2></a>
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
          			<a class="dropdown-item" href="addtime.php">Add Time</a>
          </ul>
        </div>
                
      </li>
    </ul>
  </div>
          
        </div>
      </div>
    </nav>

    <div class="container mt-3">
  <div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Faculty and Head Table</h2>
    <div class="input-group" style="width: 300px;">
      <input type="text" id="searchInput" class="form-control" placeholder="Search Name">
      <span class="input-group-text"><i class="bi bi-search"></i></span>
    </div>
  </div>
  </h2>
  <div class="mb-3">
  </div>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Account Type</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Task</th>
      </tr>
    </thead>
    <tbody>
      <?php

      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "insertion";
      // Connect to the database
      $conn = mysqli_connect("localhost", "root", "", "insertion");
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

      // Fetch data from the users table
            $sql = "SELECT usersId, usersType, usersFName, usersLName FROM users";
            $result = $conn->query($sql);

            // Display data in table rows
            if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["usersType"] . "</td>";
                echo "<td>" . $row["usersFName"] . "</td>";
                echo "<td>" . $row["usersLName"] . "</td>";
                echo "<td>";
                echo '<button class="btn btn-secondary me-2">Schedule</button>';
                echo '<button class="btn btn-dark" onclick="deleteUser(' . $row["usersId"] . ')">Delete</button>';
                echo "</td>";
                echo "</tr>";
            }
            } else {
            echo "<tr><td colspan='4'>No users found</td></tr>";
            }


      // Close the database connection
      $conn->close();
      ?>
    </tbody>
  </table>
</div>

<!-- Include Bootstrap JS and jQuery -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<!-- Include Bootstrap JS and jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<!-- JavaScript function to handle user deletion -->
<script>
  function deleteUser(userId) {
    if (confirm("Are you sure you want to delete this user?")) {
      // Send an AJAX request to delete the user from the database
      $.ajax({
        url: "includes/delete_user.php",
        method: "POST",
        data: { id: userId },
        success: function (response) {
          alert("User deleted successfully");
          location.reload(); // Reload the page after successful deletion
        },
        error: function () {
          alert("Error deleting user");
        }
      });
    }
  }
</script>

<script>
  $(document).ready(function() {
    // Handle search input changes
    $('#searchInput').on('input', function() {
      var searchValue = $(this).val().toLowerCase();
      
      // Send an AJAX request to fetch filtered data from the database
      $.ajax({
        url: "includes/search_users.php",
        method: "POST",
        data: { search: searchValue },
        success: function(response) {
          // Update the table with the filtered data
          $('tbody').html(response);
        },
        error: function() {
          alert("Error fetching data");
        }
      });
    });
  });
</script>



</body>
</html>
