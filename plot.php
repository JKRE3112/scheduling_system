<?php
// Establish database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "insertion";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

// Retrieve data from the "scheduling" table
$query = "SELECT uid, subjects, `time-in`, `time-out` FROM scheduling";
$result = $conn->query($query);

// Create an empty schedule table
$scheduleTable = [];
foreach ($timeSlots as $timeSlot) {
    foreach ($daysOfWeek as $day) {
        $scheduleTable[$timeSlot][$day] = '';
    }
}

// Process the retrieved data and populate the schedule table
while ($row = $result->fetch_assoc()) {
    $uid = $row['uid'];
    $subjects = $row['subjects'];
    $timeIn = $row['time-in'];
    $timeOut = $row['time-out'];

    $dayIndex = date('N', strtotime($timeIn)) - 1;
    $startTime = date('H:i', strtotime($timeIn));
    $endTime = date('H:i', strtotime($timeOut));

    // Calculate the number of slots needed based on subject duration and interval
    $numSlots = (strtotime($timeOut) - strtotime($timeIn)) / (3 * 60 * 60) + 1;

    // Check for conflicts before assigning the subject
    $conflict = false;
    for ($i = 0; $i < $numSlots; $i++) {
        $currentSlot = $timeSlots[array_search($startTime, $timeSlots)];
        if ($scheduleTable[$currentSlot][$daysOfWeek[$dayIndex]] !== '') {
            $conflict = true;
            break;
        }
        $startTime = date('H:i', strtotime('+3 hours 30 minutes', strtotime($startTime)));
        $dayIndex = ($dayIndex + ($startTime >= '00:00' ? 1 : 0)) % 7;
    }

    // Assign the subject to the available time slots
    if (!$conflict) {
        $startTime = date('H:i', strtotime($timeIn));
        for ($i = 0; $i < $numSlots; $i++) {
            $currentSlot = $timeSlots[array_search($startTime, $timeSlots)];
            $scheduleTable[$currentSlot][$daysOfWeek[$dayIndex]] = $subjects;
            $startTime = date('H:i', strtotime('+3 hours 30 minutes', strtotime($startTime)));
            $dayIndex = ($dayIndex + ($startTime >= '00:00' ? 1 : 0)) % 7;
        }
    }
}

// Close the database connection
$conn->close();

// Generate and display the table
echo '<table>';
echo '<tr><th>Time</th>';
foreach ($daysOfWeek as $day) {
    echo '<th>' . $day . '</th>';
}
echo '</tr>';

foreach ($timeSlots as $timeSlot) {
    echo '<tr><td>' . $timeSlot . '</td>';

    foreach ($daysOfWeek as $day) {
        $subject = $scheduleTable[$timeSlot][$day];
        $cellColor = !empty($subject) ? 'background-color: #c0c0c0;' : '';

        echo '<td style="' . $cellColor . '">' . $subject . '</td>';
    }

    echo '</tr>';
}

echo '</table>';