<?php
// Connect to the database
$host = "localhost";
$user = "username";
$password = "password";
$dbname = "database_name";

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Query the database for start times
$query = "SELECT start_time FROM timer ORDER BY start_time";
$result = $conn->query($query);

// Send the start times back to the client
$start_times = array();
if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    array_push($start_times, $row["start_time"]);
  }
}

echo json_encode($start_times);

// Close the database connection
$conn->close();
?>
