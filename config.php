<?php
session_start();
$con = mysqli_connect("localhost","root","","insertion");

if(isset($_POST['save_select']))
{
    $id = $_POST['id'];
    $units = $_POST['units'];
    $start_time = $_POST['start_time'];
    $end_time = $_POST['end_time'];
    $overload = $_POST['overload'];
 

    $query = "INSERT INTO demo (id, units, year_level, start_time, end_time, overload) VALUES ('$id','$units', '$start_time', '$end_time', '$overload')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Inserted Succesfully";
        header("Location: sample.php");
    }
    else
    {
        $_SESSION['status'] = "Not Inserted";
        header("Location: sample.php");
    }
}
?>