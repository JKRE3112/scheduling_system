<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "insertion");

if (isset($_POST['save_select'])) {
    $usersUid = $_SESSION['usersUid'];
    $units = $_POST['units'];
    $start_time = $_POST['start_time'];
    $end_time = $_POST['end_time'];
    $overload = $_POST['overload'];

    $query = "INSERT INTO demo (UsersUid, units, start_time, end_time, overload) VALUES ('$usersUid', '$units', '$start_time', '$end_time', '$overload')";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $_SESSION['status'] = "Inserted Successfully";
        header("Location: sample_head.php");
    } else {
        $_SESSION['status'] = "Not Inserted";
        header("Location: sample_head.php");
    }
}

if(isset($_POST['delete_last']))
{
    $deleteQuery = "DELETE FROM demo ORDER BY id DESC LIMIT 1";
    $deleteResult = mysqli_query($con, $deleteQuery);

    if($deleteResult)
    {
        $_SESSION['status'] = "Last record deleted successfully";
        header("Location: sample_head.php");
    }
    else
    {
        $_SESSION['status'] = "Failed to delete last record";
        header("Location: sample_head.php");
    }
}
?>