<?php

// MySQL database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "insertion";

// Create a new MySQLi object
$mysqli = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
}

// Update curriculum table with matching usersUid and schedule subjects
$query = "
    UPDATE curriculum AS c
    SET usersUid = (
        SELECT l.usersUid
        FROM logs AS l
        WHERE l.subject_description = c.subject_description
          AND c.usersUid = ''
        LIMIT 1
    ),
    dayOfWeek = 'Monday',  -- Start day as Monday

    -- Calculate start time and duration based on subject_hours and schedule constraints
    start_time = (
        SELECT IFNULL(MAX(c2.end_time), (SELECT d.start_time FROM demo AS d WHERE d.id = 1))
        FROM curriculum AS c2
        WHERE c2.dayOfWeek = 'Monday'
    ),
    end_time = (
        SELECT d.end_time
        FROM demo AS d
        WHERE d.id = 1
    ),
    duration = (
        SELECT CONCAT(
            DATE_FORMAT(
                ADDTIME(
                    (SELECT IFNULL(MAX(c2.end_time), (SELECT d.start_time FROM demo AS d WHERE d.id = 1))
                    FROM curriculum AS c2
                    WHERE c2.dayOfWeek = 'Monday'),
                    SEC_TO_TIME(
                        (
                            SELECT SUM(subject_hours) + IF((SELECT COUNT(*) FROM curriculum WHERE dayOfWeek = 'Monday') > 0, 1, 0)
                            FROM curriculum AS c3
                            WHERE c3.subject_description = c.subject_description
                              AND c3.dayOfWeek = 'Monday'
                            LIMIT 1
                        ) * 3600
                    )
                ),
                '%H:%i'
            ),
            '-',
            DATE_FORMAT(
                ADDTIME(
                    (SELECT IFNULL(MAX(c2.end_time), (SELECT d.start_time FROM demo AS d WHERE d.id = 1))
                    FROM curriculum AS c2
                    WHERE c2.dayOfWeek = 'Monday'),
                    SEC_TO_TIME(
                        (
                            SELECT SUM(subject_hours) + IF((SELECT COUNT(*) FROM curriculum WHERE dayOfWeek = 'Monday') > 0, 1, 0)
                            FROM curriculum AS c3
                            WHERE c3.subject_description = c.subject_description
                              AND c3.dayOfWeek = 'Monday'
                            LIMIT 1
                        ) * 3600
                    )
                ),
                '%H:%i'
            )
        )
        FROM curriculum AS c2
        WHERE c2.subject_description = c.subject_description
          AND c2.dayOfWeek = 'Monday'
        LIMIT 1
    );

-- Loop through the remaining days of the week
SET @currentDay = 'Monday';
SET @endTime = (SELECT d.end_time FROM demo AS d WHERE d.id = 1);

WHILE (SELECT COUNT(*) FROM curriculum WHERE usersUid = '') > 0 DO
    SET @currentDay = (
        SELECT CASE @currentDay
            WHEN 'Monday' THEN 'Tuesday'
            WHEN 'Tuesday' THEN 'Wednesday'
            WHEN 'Wednesday' THEN 'Thursday'
            WHEN 'Thursday' THEN 'Friday'
            WHEN 'Friday' THEN 'Monday'
        END
    );

    SET @startTime = (
        SELECT IFNULL(MAX(c2.end_time), (SELECT d.start_time FROM demo AS d WHERE d.id = 1))
        FROM curriculum AS c2
        WHERE c2.dayOfWeek = @currentDay
    );

    UPDATE curriculum AS c
    SET usersUid = (
        SELECT l.usersUid
        FROM logs AS l
        WHERE l.subject_description = c.subject_description
          AND c.usersUid = ''
        LIMIT 1
    ),
    dayOfWeek = @currentDay,
    start_time = @startTime,
    end_time = @endTime,
    duration = (
        SELECT CONCAT(
            DATE_FORMAT(
                ADDTIME(
                    (SELECT IFNULL(MAX(c2.end_time), (SELECT d.start_time FROM demo AS d WHERE d.id = 1))
                    FROM curriculum AS c2
                    WHERE c2.dayOfWeek = @currentDay),
                    SEC_TO_TIME(
                        (
                            SELECT SUM(subject_hours) + IF((SELECT COUNT(*) FROM curriculum WHERE dayOfWeek = @currentDay) > 0, 1, 0)
                            FROM curriculum AS c3
                            WHERE c3.subject_description = c.subject_description
                              AND c3.dayOfWeek = @currentDay
                            LIMIT 1
                        ) * 3600
                    )
                ),
                '%H:%i'
            ),
            '-',
            DATE_FORMAT(
                ADDTIME(
                    (SELECT IFNULL(MAX(c2.end_time), (SELECT d.start_time FROM demo AS d WHERE d.id = 1))
                    FROM curriculum AS c2
                    WHERE c2.dayOfWeek = @currentDay),
                    SEC_TO_TIME(
                        (
                            SELECT SUM(subject_hours) + IF((SELECT COUNT(*) FROM curriculum WHERE dayOfWeek = @currentDay) > 0, 1, 0)
                            FROM curriculum AS c3
                            WHERE c3.subject_description = c.subject_description
                              AND c3.dayOfWeek = @currentDay
                            LIMIT 1
                        ) * 3600
                    )
                ),
                '%H:%i'
            )
        )
        FROM curriculum AS c2
        WHERE c2.subject_description = c.subject_description
          AND c2.dayOfWeek = @currentDay
        LIMIT 1
    );
END WHILE;
";

if ($mysqli->multi_query($query) === TRUE) {
    echo '<script type="text/javascript">
    alert("Data Added!");
    location.href = "head_third_page.php";
    </script>';
} else {
    echo "Error updating data: " . $mysqli->error;
}

// Close the database connection
$mysqli->close();

?>
