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

// Iterate through the demo table rows
echo "<table>";
echo "<tr>";
echo "<th>Id</th>";
echo "<th>UsersUid</th>";
echo "<th>Units</th>";
echo "<th>Subject Description</th>";
echo "<th>Time Slot</th>";
echo "</tr>";

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
    $subjectsQuery = "SELECT subject_description, subject_units FROM logs WHERE usersUid = ?";
    $subjectsStatement = $conn->prepare($subjectsQuery);
    $subjectsStatement->bind_param("s", $usersUid);
    $subjectsStatement->execute();
    $subjectsResult = $subjectsStatement->get_result();

    // Check if there are subjects for the current usersUid
    if ($subjectsResult->num_rows > 0) {
        $currentStartTime = $startTime;
        $currentDay = 1; // Start from Monday

        // Iterate through the subjects and print them in table rows
        while ($subjectsRow = $subjectsResult->fetch_assoc()) {
            $subjectDescription = $subjectsRow['subject_description'];
            $subjectUnits = $subjectsRow['subject_units'];

            // Skip the lunchtime (12 PM - 1 PM) and add days if necessary
            while (($currentStartTime >= strtotime("12:00 PM") && $currentStartTime < strtotime("01:00 PM")) || $currentStartTime >= strtotime("02:00 PM")) {
                $currentDay++;
                $currentStartTime = strtotime("07:00 AM"); // Reset the start time to 7 AM for the new day
            }

            $currentEndTime = $currentStartTime + ($subjectUnits * 3600);

            // Print the data in table rows
            echo "<tr>";
            echo "<td>" . $demoRow['id'] . "</td>";
            echo "<td>" . $usersUid . "</td>";
            echo "<td>" . $subjectUnits . "</td>";
            echo "<td>" . $subjectDescription . "</td>";
            echo "<td>" . date("h:i A", $currentStartTime) . " - " . date("h:i A", $currentEndTime) . "</td>";
            echo "</tr>";

            $currentStartTime = $currentEndTime;
            $currentDay++; // Move to the next day

            // Reset the day if it exceeds 6 (Saturday) since professors can teach 6 times a week
            if ($currentDay > 6) {
                $currentDay = 1; // Start from Monday
            }
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

echo "</table>";

// Close the prepared statements
$subjectsStatement->close();

// Close the result sets
$demoResult->close();
$subjectsResult->close();

// Close the database connection
$conn->close();
?>
