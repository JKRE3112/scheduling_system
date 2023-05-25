<?php
// curriculum.php

include('includes/functions-inc.php');
session_start();
if (!isLoggedIn()) {
    header('location: login-first.php');
}

// Check if the form is submitted
if (isset($_POST['submit'])) {
    // Perform the desired process here

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $databaseName = "insertion";

    $conn = mysqli_connect($hostname, $username, $password, $databaseName);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Get the selected options from the form
    $yearLevel = $_POST['yearlevel'];
    $course = $_POST['course'];
    $term = $_POST['sectype'];
    $course_type = $_POST['course_type'];
    $numSections = $_POST['numsections'];

    // Generate the section name
    $sectionName = 'BS';
    if ($course == 'Computer Science') {
        $sectionName .= 'CS';
    } elseif ($course == 'Information Technology') {
        $sectionName .= 'IT';
    } elseif ($course == 'Information System') {
        $sectionName .= 'IS';
    }

    if ($yearLevel == 'First year') {
        $sectionName .= '1';
    } elseif ($yearLevel == 'Second year') {
        $sectionName .= '2';
    } elseif ($yearLevel == 'Third year') {
        $sectionName .= '3';
    } elseif ($yearLevel == 'Fourth year') {
        $sectionName .= '4';
    }

    // Insert curriculum data into the database
    for ($i = 1; $i <= $numSections; $i++) {
        $section = $sectionName . chr(64 + $i);
        $query = "INSERT INTO curriculum (section_name, subject_code, subject_description, subject_units, subject_hours, course_type)
                  SELECT '$section', subject_code, subject_description, subject_units, subject_hours, course_type
                  FROM subject
                  WHERE year_level = '$yearLevel' AND course = '$course' AND subject_term = '$term' AND course_type = '$course_type'";
        mysqli_query($conn, $query);
    }

    // Close the database connection
    mysqli_close($conn);

    // Display a success message
   echo '<script type="text/javascript">
    alert("New Subject Added!");
       location="addcurriculum.php";
         </script>';
}
?>
