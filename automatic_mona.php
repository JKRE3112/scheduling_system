<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "insertion";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to retrieve data from demo table
$demoQuery = "SELECT * FROM demo";
$demoResult = $conn->query($demoQuery);

// Create an HTML table to display the data
echo "<table>";
echo "<tr>";
echo "<th>Id</th>";
echo "<th>UsersUid</th>";
echo "<th>Units</th>";
echo "<th>Subject Description</th>";
echo "<th>Time Slot</th>";
echo "</tr>";

// Iterate through the demo table rows
while ($demoRow = $demoResult->fetch_assoc()) {
    $usersUid = $demoRow['usersUid'];
    $startTime = strtotime($demoRow['start_time']);
    $endTime = strtotime($demoRow['end_time']);

    // Check if start_time and end_time are valid
    if ($startTime === false || $endTime === false) {
        echo "Invalid time format";
        continue;
    }

    $interval = ($endTime - $startTime) / $demoRow['units'];

    // Retrieve the subjects for the current usersUid from the logs table
    $subjectsQuery = "SELECT subject_description, subject_units FROM logs WHERE usersUid = '$usersUid'";
    $subjectsResult = $conn->query($subjectsQuery);

    // Check if there are subjects for the current usersUid
    if ($subjectsResult->num_rows > 0) {
        $currentStartTime = $startTime;

        // Iterate through the subjects and display them in separate rows
        while ($subjectsRow = $subjectsResult->fetch_assoc()) {
            $subjectDescription = $subjectsRow['subject_description'];
            $subjectUnits = $subjectsRow['subject_units'];

            // Skip the lunchtime (12 PM - 1 PM)
            $lunchStartTime = strtotime("12:00 PM");
            $lunchEndTime = strtotime("01:00 PM");

            // Adjust the start time if it falls within the lunchtime
            if ($currentStartTime >= $lunchStartTime && $currentStartTime < $lunchEndTime) {
                $currentStartTime = $lunchEndTime;
            }

            $currentEndTime = $currentStartTime + ($subjectUnits * 3600);

            echo "<tr>";
            echo "<td>" . $demoRow['id'] . "</td>";
            echo "<td>" . $usersUid . "</td>";
            echo "<td>" . $demoRow['units'] . "</td>";
            echo "<td>" . $subjectDescription . "</td>";
            echo "<td>" . date("h:i A", $currentStartTime) . " - " . date("h:i A", $currentEndTime) . "</td>";
            echo "</tr>";

            $currentStartTime = $currentEndTime;
        }
    } else {
        // Display an empty row if no subjects found for the usersUid
        echo "<tr>";
        echo "<td>" . $demoRow['id'] . "</td>";
        echo "<td>" . $usersUid . "</td>";
        echo "<td>" . $demoRow['units'] . "</td>";
        echo "<td>No subjects found</td>";
        echo "<td></td>";
        echo "</tr>";
    }
}

// Close the table
echo "</table>";

// Close the database connection
$conn->close();
?>