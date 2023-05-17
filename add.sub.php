<?php 
 
 $con = mysqli_connect ("localhost", "root", "","insertion");
 
 if (!$con)
 {
	 echo 'not connected to server';
 }
 if (!mysqli_select_db($con, 'insertion'))
 {
	 echo 'database not selected';
 }

 $Subject_Code = $_POST['subcode'];
 $Subject_Description = $_POST['subdescription'];
 $Subject_Units = $_POST['subunit'];
 $Subject_Type = $_POST['subtype'];
 
 $sql = "INSERT INTO subject (Subject_Code, Subject_Description, Subject_Units, Subject_Type ) VALUES ('$Subject_Code', '$Subject_Description', '$Subject_Units', '$Subject_Type')";

 if (!mysqli_query ($con, $sql))
 {
	 echo 'not inserted';
 }
 else
 {
	 echo '<script type="text/javascript">
                      alert("New Subject Added!");
                         location="addsub.php";
                           </script>';
 }
 

?>
