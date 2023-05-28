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

// MySQL query to update curriculum table with matching usersUid
$query = "
    UPDATE curriculum AS c
    SET usersUid = (
        SELECT MIN(l.usersUid)
        FROM logs AS l
        WHERE l.subject_description = c.subject_description
          AND c.section_name = (
              SELECT MIN(section_name)
              FROM curriculum
              WHERE (subject_description = c.subject_description OR c.subject_description IS NULL)
                AND usersUid = ''
          )
          AND l.usersUid NOT IN (
              SELECT usersUid
              FROM curriculum
          )
    )
    WHERE c.usersUid = '' AND c.usersUid NOT IN (
        SELECT usersUid
        FROM curriculum
        WHERE usersUid != ''
    )
";



// Execute the query
if ($mysqli->query($query) === TRUE) {
    echo '<script type="text/javascript">
    alert("Data Added!");
       location="addcurriculum.php";
         </script>';
} else {
    echo "Error updating data: " . $mysqli->error;
}

// Close the database connection
$mysqli->close();

?>