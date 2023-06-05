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

// Truncate the "curriculum" table to remove existing data
$truncateQuery = "TRUNCATE TABLE curriculum";
$conn->query($truncateQuery);

// Check if usersUid is provided via GET request
if (isset($_GET['usersUid'])) {
    $usersUid = $_GET['usersUid'];

    // Query to retrieve the user's name, units, overload, and userType from the users and demo tables
    $dataQuery = "SELECT users.usersFName, users.usersLName, users.usersType, demo.units, demo.overload, demo.start_time, demo.end_time FROM users JOIN demo ON users.usersUid = demo.usersUid WHERE users.usersUid = '$usersUid'";
    $dataResult = $conn->query($dataQuery);

    // Check if the data exists
    if ($dataResult->num_rows > 0) {
        $dataRow = $dataResult->fetch_assoc();
        $usersFName = $dataRow['usersFName'];
        $usersLName = $dataRow['usersLName'];
        $usersType = $dataRow['usersType'];
        $units = $dataRow['units'];
        $overload = $dataRow['overload'];

        // Display the faculty name, units, overload, and userType with underline
        echo "<div class='container mt-3'>";
        echo "<h1 class='faculty-name'>Faculty: <u>" . htmlspecialchars($usersFName) . " " . htmlspecialchars($usersLName) . "</u></h1>";
        echo "<p class='faculty-info'>Units: <u>" . htmlspecialchars($units) . "</u></p>";
        echo "<p class='faculty-info'>Overload: <u>" . htmlspecialchars($overload) . "</u></p>";
        echo "<p class='faculty-info'>Designation: <u>" . htmlspecialchars($usersType) . "</u></p>";
        echo "</div>";
    }

    // Free the data result set
    $dataResult->close();

    // Get the selected usersUid from the query string or form submission
    $selectedUsersUid = $_GET['usersUid']; // Replace 'usersUid' with the name of the input field

    // Query to retrieve data from demo table for the selected user
    $demoQuery = "SELECT * FROM demo WHERE usersUid = '$selectedUsersUid'";
    $demoResult = $conn->query($demoQuery);

    // Check if there are demo rows for the selected usersUid
    if ($demoResult->num_rows > 0) {
        // Create an HTML table to display the data
        echo "<table class='table table-striped'>";
        echo "<thead class='thead-dark'>";
        echo "<tr>";
        echo "<th>Subject Units</th>";
        echo "<th>Subject Description</th>";
        echo "<th>Day of Week</th>";
        echo "<th>Time Slot</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";

        // Iterate through the demo table rows for the selected user
        $daysOfWeek = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'];
        $dayIndex = 0; // Start from Monday

        while ($demoRow = $demoResult->fetch_assoc()) {
            $subjectUnits = $demoRow['units'];
            $subjectDescription = $demoRow['subject_description'];
            $startTime = strtotime($demoRow['start_time']);
            $endTime = strtotime($demoRow['end_time']);

            // Calculate the end time of the subject
            $totalSeconds = $endTime - $startTime;
            $hours = floor($totalSeconds / 3600);
            $minutes = floor(($totalSeconds % 3600) / 60);
            $currentEndTime = strtotime("+$hours hours $minutes minutes", $startTime);

            // Get the day of the week based on the current index
            $dayOfWeek = $daysOfWeek[$dayIndex];

            // Insert subject details into the "curriculum" table
            $insertQuery = "INSERT INTO curriculum (usersUid, subject_description, day_of_week, time_slot) VALUES ('$selectedUsersUid', '$subjectDescription', '$dayOfWeek', '" . date("h:i A", $startTime) . " - " . date("h:i A", $currentEndTime) . "')";
            $conn->query($insertQuery);

            // Update the start time for the next subject
            $startTime = $currentEndTime;

            // Display the data row in the HTML table
            echo "<tr>";
            echo "<td>" . htmlspecialchars($subjectUnits) . "</td>";
            echo "<td>" . htmlspecialchars($subjectDescription) . "</td>";
            echo "<td>" . htmlspecialchars($dayOfWeek) . "</td>";
            echo "<td>" . date("h:i A", $startTime) . " - " . date("h:i A", $currentEndTime) . "</td>";
            echo "</tr>";

            // Move to the next day for the next demo row
            $dayIndex = ($dayIndex + 1) % count($daysOfWeek);
        }

        echo "</tbody>";
        echo "</table>";
    }

    // Free the demo result set
    $demoResult->close();
}

// Close the database connection
$conn->close();
?>
