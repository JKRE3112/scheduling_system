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
if (isset($_POST['subjects'])) {
    // Retrieve the selected subjects
    $subjects = $_POST['subjects'];

    // Prepare the query to insert the logged subjects into the "logs" table
    $query = "INSERT INTO logs (usersUid, subject_description, subject_units) VALUES ";

    foreach ($subjects as $subject_description) {
        $subject_description = mysqli_real_escape_string($connection, $subject_description);
        
        // Fetch the subject_units from the subject db table based on the subject_description
        $subject_units_query = "SELECT subject_units FROM subject WHERE subject_description = '$subject_description'";
        $subject_units_result = mysqli_query($connection, $subject_units_query);
        
        if ($subject_units_result && mysqli_num_rows($subject_units_result) > 0) {
            $row = mysqli_fetch_assoc($subject_units_result);
            $subject_units = $row['subject_units'];
        } else {
            // If subject_units not found, you can set a default value or handle the error
            $subject_units = "Unknown";
        }
        
        $query .= "('$usersUid', '$subject_description', '$subject_units'),";
    }

    $query = rtrim($query, ','); // Remove the trailing comma

    // Execute the query
    if (mysqli_query($connection, $query)) {
        // Query executed successfully, subjects logged
        echo "Subjects confirmed.";
    } else {
        // Error occurred while logging subjects
        echo "Error logging subjects: " . mysqli_error($connection);
    }
}

mysqli_close($connection);
?>
