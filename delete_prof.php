<?php
// Establish a database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "insertion";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve the ID value from the form
$id = $_POST['id'];

if (isset($_POST['delete'])) {
    $query = "DELETE FROM demo WHERE id = (SELECT MAX(id) FROM demo)";
    
    // Execute the query
    if (mysqli_query($connection, $query)) {
        echo "Record deleted successfully.";
    } else {
        echo "Error deleting record: " . mysqli_error($connection);
    }
}
// Close the database connection
$conn->close();
?>