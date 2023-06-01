<?php
// Check if the form is submitted
if (isset($_POST['submit'])) {
    // Perform the desired process here

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $databaseName = "insertion";

    $conn = mysqli_connect($hostname, $username, $password, $databaseName);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Fetch start_time and end_time from demo table
    $get_time_query = "SELECT start_time, end_time FROM demo";
    $time_result = $conn->query($get_time_query);

    if ($time_result->num_rows > 0) {
        $time_row = $time_result->fetch_assoc();
        $start_time = $time_row['start_time'];
        $end_time = $time_row['end_time'];

        // Example data retrieved from start_time option value
        // Format date to get hours (H), minutes (i), seconds (s)
        $start_time = date("H:i:s", strtotime($start_time));
        $end_time = date("H:i:s", strtotime($end_time));
        $weekdays = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday");
        $x = 0;

        // Kunin lahat ng record sa curriculum table since need to check kung existing na ba yung duration sa subject or vacant pa
        $get_curriculum_data = "SELECT usersUid, subject_code, duration, dayOfWeek FROM curriculum";
        $curriculum_result = $conn->query($get_curriculum_data);

        // Kunin record ni logged in user or yung user na lalagyan ng input for duration and day
        $get_userId_record = "SELECT subject_code, section_name, subject_hours, usersUid FROM curriculum WHERE usersUid = '$usersUid'";
        $user_data = $conn->query($get_userId_record);

        if ($user_data && mysqli_num_rows($user_data) > 0) {
            // Check if user record is fetched from curriculum
            $user_row = mysqli_fetch_assoc($user_data);
            $subject_code = $user_row['subject_code'];
        }

        if ($curriculum_result->num_rows > 0) {
            // Check if all curriculum records are fetched
            while ($row = $curriculum_result->fetch_assoc()) {
                if ($row['usersUid'] == $user_row['usersUid']) {
                    // Find user record in curriculum
                    $hrs_place_holder = date("H:i:s", strtotime($start_time . ' + ' . $user_row["subject_hours"]));
                    // Add user subject_hours to $start_time to check each possible duration within given start and end time
                    $placeholder_duration = $start_time . "-" . $hrs_place_holder;

                    while ($hrs_place_holder != $end_time) {
                        // Loop to check if placeholder reached $end_time
                        if ($row['duration'] == $placeholder_duration) {
                            // Check if current $placeholder_duration is already existing in curriculum
                            while ($x < count($weekdays)) {
                                // Loop to check for available days
                                $dayOfWeek = $weekdays[$x]; // Get day from weekday array

                                if ($row['subject_duration'] == $user_row['subject_duration'] &&
                                    $row['duration'] == $placeholder_duration &&
                                    $dayOfWeek == $row['dayOfWeek']
                                ) {
                                    // Check if day and duration is already existing for the subject
                                    // TRUE: check next day | FALSE: insert to duration and day column
                                    $x++; // Add index to get next day of $weekday
                                } else {
                                    // Not sure kung san niyo nakukuha yung new sections haha pero kung same subject, duration, and day
                                    // Dapat maiinsert siya as new_section :)
                                    $new_section = ""; // Provide the appropriate value for $new_section
                                    $insert_record = "INSERT INTO curriculum (duration, dayOfWeek, section) VALUES ('$placeholder_duration', '$day', '$new_section')";
                                    $conn->query($insert_record);

                                    // Execute the query
			if ($mysqli->query($query) === TRUE) {
				echo '<script type="text/javascript">
				alert("Curriculum Added!");
				location="addcurriculum.php";
					</script>';
			} else {
				echo "Error updating data: " . $mysqli->error;
			}
	
			// Close the database connection
			$mysqli->close();
                                }
                            }
                        }
                    }
                }
            }
        }

       
    }
			
}


?>
