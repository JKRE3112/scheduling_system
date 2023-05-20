<?php
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

// Retrieve the selected year level and course from the AJAX request
$yearLevel = $_POST['yearLevel'];
$course = $_POST['course'];

// Prepare the query to fetch the subjects based on the year level and course
$query = "SELECT * FROM subject WHERE year_level = '$yearLevel' AND course = '$course'";
$result = mysqli_query($connection, $query);

// Check if the query was successful and fetch the subjects
if ($result && mysqli_num_rows($result) > 0) {
    $options = "";

    while ($row = mysqli_fetch_assoc($result)) {
        $subjectDescription = $row['subject_description'];
        $options .= "<option value='$subjectDescription'>$subjectDescription</option>";
    }

    // Return the HTML options as the response
    echo $options;
} else {
    // No subjects found for the selected year level and course
    echo "<option>No subjects found</option>";
}

// Close the database connection
mysqli_close($connection);

