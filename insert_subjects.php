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

// Handle the form submission
if (isset($_POST['logBtn'])) {
    // Retrieve the selected subjects
    $subjects = $_POST['subjects'];

    // Prepare the query to insert the logged subjects into the "logs" table
    $query = "INSERT INTO logs (usersUid, subject_description, subject_units) VALUES ";

    foreach ($subjects as $subject_description) {
        $subject_description = mysqli_real_escape_string($connection, $subject_description);
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
        echo "Error logging subjects: " . mysqli_error($connection);
    }
}
?>
