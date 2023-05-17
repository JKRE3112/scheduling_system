<?php
// Check if the user ID parameter is provided
if (isset($_POST['id'])) {
    // Get the user ID from the request
    $id = $_POST['id'];

    // Database connection details
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "insertion";

    // Create a new connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare the delete query
    $sql = "DELETE FROM section WHERE id = $id";

    // Execute the delete query
    if ($conn->query($sql) === TRUE) {
        // User deleted successfully
        echo "User deleted successfully";
    } else {
        // Error deleting user
        echo "Error deleting user: " . $conn->error;
    }

    // Close the connection
    $conn->close();
} else {
    // User ID parameter is missing
    echo "Invalid request";
}
