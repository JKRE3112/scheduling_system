<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Fetch schedule data from the demo table for the selected user
if (isset($_POST['id'])) {
    $userId = $_POST['id'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "insertion";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and execute the query to fetch the schedule for the selected user
    $stmt = $conn->prepare("SELECT start_time, end_time FROM demo WHERE usersId = ?");
    $stmt->bind_param("s", $userId);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if the query returned any rows
    if ($result->num_rows > 0) {
        $schedule = array();
        // Fetch the data and store it in an array
        while ($row = $result->fetch_assoc()) {
            $schedule[] = $row;
        }
        // Convert the array to JSON and echo it
        echo json_encode($schedule);
    } else {
        echo "No schedule found for the selected user";
    }

    // Close the statement
    $stmt->close();
} else {
    echo "User ID not provided";
}

// Close the database connection
$conn->close();
?>
