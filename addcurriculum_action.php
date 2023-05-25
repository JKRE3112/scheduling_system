<?php


// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Retrieve the selected value from the dropdown menu
  $sectype = $_POST['sectype'];

  // Database connection details
  $servername = 'localhost';
  $username = 'root';
  $password = '';
  $database = 'insertion';

  // Create a new MySQLi connection
  $conn = new mysqli($servername, $username, $password, $database);

  // Check if the connection was successful
  if ($conn->connect_error) {
      die('Connection failed: ' . $conn->connect_error);
  }

  // Write the MySQL query to copy the columns of data
  $query = "INSERT INTO curriculum (subject_code, subject_description, subject_units)
            SELECT subject_code, subject_description, subject_units
            FROM subjects
            WHERE sectype = '$sectype'";

 
  // Close the database connection
  $conn->close();
}
?>