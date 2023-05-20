<?php
// Retrieve the selected year level and course from the AJAX request
$yearLevel = $_POST['yearLevel'];
$course = $_POST['course'];

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

// Prepare the query to retrieve the subjects based on the selected year level and course
$query = "SELECT * FROM `subject` WHERE year_level = '$yearLevel' AND course = '$course'";
$result = mysqli_query($connection, $query);

// Check if any subjects were found
if (mysqli_num_rows($result) > 0) {
    // Generate the HTML options for the select field
    $options = "";
    while ($row = mysqli_fetch_array($result)) {
        $options .= "<option value='" . $row['subject_description'] . "'>" . $row['subject_description'] . "</option>";
    }

    // Return the HTML options as the response
    echo $options;
} else {
    // No subjects found for the selected year level and course
    echo "<option>No subjects available</option>";
}

// Close the database connection
mysqli_close($connection);
?>
