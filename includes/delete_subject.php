<?php
// includes/delete_subject.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $subjectCode = $_POST["code"];

  // Perform the database deletion operation using the provided subject code
  // ...

  // Example code to delete the subject from the database
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "insertion";

  $conn = mysqli_connect($servername, $username, $password, $dbname);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "DELETE FROM subject WHERE subject_code = '$subjectCode'";

  if ($conn->query($sql) === TRUE) {
    echo "Subject deleted successfully";
  } else {
    echo "Error deleting subject: " . $conn->error;
  }

  $conn->close();
}
?>
