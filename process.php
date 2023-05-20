<?php
// Handle the form submission
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["subjects"])) {
    // Retrieve the selected subjects
    $subjects = $_POST["subjects"];

    // Perform any necessary processing with the selected subjects
    // For example, you can insert them into the database or perform any other operations

    // Assuming you have a database connection established, you can insert the subjects into a table
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "insertion";

    // Create a new database connection
    $connection = mysqli_connect($servername, $username, $password, $dbname);

    // Check the connection
    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Prepare the SQL statement
    $sql = "INSERT INTO your_table_name (subject_name) VALUES (?)";

    // Prepare the statement
    $stmt = mysqli_prepare($connection, $sql);

    if ($stmt) {
        // Bind parameters and execute the statement for each subject
        foreach ($subjects as $subject) {
            mysqli_stmt_bind_param($stmt, "s", $subject);
            mysqli_stmt_execute($stmt);
        }

        // Close the statement
        mysqli_stmt_close($stmt);

        // Close the database connection
        mysqli_close($connection);

        // Redirect or display a success message
        echo "Subjects inserted successfully.";
    } else {
        // Handle the error case
        echo "Error: " . mysqli_error($connection);
    }
}
?>
