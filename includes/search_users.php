<?php
// Check if the search parameter is provided
if (isset($_POST['search'])) {
  $search = $_POST['search'];

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "insertion";

  // Connect to the database
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // Prepare the SQL query with a search condition
  $sql = "SELECT usersId, usersType, usersFName, usersLName FROM users WHERE usersFName LIKE '%$search%' OR usersLName LIKE '%$search%'";
  $result = $conn->query($sql);

  // Display data in table rows
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      echo "<tr>";
      echo "<td>" . $row["usersType"] . "</td>";
      echo "<td>" . $row["usersFName"] . "</td>";
      echo "<td>" . $row["usersLName"] . "</td>";
      echo "<td>";
      echo '<button class="btn btn-secondary me-2">Schedule</button>';
      echo '<button class="btn btn-dark" onclick="deleteUser(' . $row["usersId"] . ')">Delete</button>';
      echo "</td>";
      echo "</tr>";
    }
  } else {
    echo "<tr><td colspan='4'>No users found</td></tr>";
  }

  // Close the database connection
  $conn->close();
}
?>
