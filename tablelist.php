<?php
   include_once("header.php");
 
?>
<html>
<head>

</head>
<body><br>
<div align ="center">
			<fieldset>
            <legend>Schedules</legend>
<body>
    <?php
     echo "<tr>
            <td>";
               // your database connection
			   $host       = "localhost"; 
               $username   = "root"; 
               $password   = "";
               $database   = "insertion"; 
			   
               // select database
			   $conn = mysqli_connect($host,$username,$password,$database) or die(mysqli_error()); 

                    $query = ("SELECT * FROM addtable");
                    $result = mysqli_query($conn,$query) or die(mysqli_error());
                    echo "<div class='container'><table width='' class='table table-bordered' border='1' >
                            <tr>
                                <th>Faculty</th>
								<th>Course</th>
                                <th>Subject</th>
								<th>Room</th>
								<th>Start time</th>
								<th>End time</th>
                                <th>Action</th>
                            </tr>";
                        while($row = mysqli_fetch_array($result))
                        {
                        echo "<tr>";
                        echo "<td>" . $row['faculty'] . "</td>";
						echo "<td>" . $row['course'] . "</td>";
                        echo "<td>" . $row['subject'] . "</td>";
						echo "<td>" . $row['room'] . "</td>";
						echo "<td>" . $row['start_time'] . "</td>";
						echo "<td>" . $row['end_time'] . "</td>";
                        echo "<td><form class='form-horizontal' method='post' action='tablelist.php'>
                        <input name='id' type='hidden' value='".$row['id']."';>
                        <input type='submit' class='btn btn-danger' name='delete' value='Delete'>
                        </form></td>";
                        echo "</tr>";
                        }
                    echo "</table>";

            echo "</td>           
        </tr>";

       // delete record
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
		
    if(isset($_POST['id']))
    {
    $id = mysqli_real_escape_string($conn,$_POST['id']);
    $sql = mysqli_query($conn,"DELETE FROM addtable WHERE id='$id'");
    if(!$sql)
    {
        echo ("Could not delete rows" .mysqli_error());
    }else{
      echo '<script type="text/javascript">
                      alert("Schedule Successfully Deleted");
                         location="tablelist.php";
                           </script>';
    }
	
    }
    }

    ?>
</fieldset>
</form>
</div>
</div>
</div>

<div align ="center">
<br>
<a href="faculty_index.php"><input type='submit' class='btn btn-success' name='delete' value='New'></a>
<a href="Index.php"><input type='submit' class='btn btn-primary' name='delete' value='Logout'></a>
</div>
</div>
	</body>
	</html>
	
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "footer.php";
   include_once("footer.php");

?>
