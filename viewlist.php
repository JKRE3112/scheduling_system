<?php
   include_once("header.php");
?>
<html>
<head>

</head>
<body><br>
<div align="center">
			<fieldset>
            <legend>Viewing Facilities</legend>
<body>
    <?php
     echo "<tr>
            <td>";
               // your database connection
			         $host  = "localhost"; 
               $username   = "root"; 
               $password   = "";
               $database   = "insertion"; 
			   
               // select database
			   $conn = mysqli_connect($host,$username,$password,$database) or die(mysqli_error()); 

                    $query = ("SELECT * FROM faculty");
                    $result = mysqli_query($conn,$query) or die(mysqli_error());
                    echo "<div class='container'><table width='' class='table table-bordered' border='1' >
                            <tr>
                                <th>Faculty</th>
                                <th>Designation</th>
                                <th>Action</th>
                                <th>Plot</th>
                            </tr>";
                        while($row = mysqli_fetch_array($result))
                        {
                        echo "<tr>";
                        echo "<td>" . $row['faculty_name'] . "</td>";
                        echo "<td>" . $row['designation'] . "</td>";
                        echo "<td><form class='form-horizontal' method='post' action='viewlist.php'>
                        <input name='id' type='hidden' value='".$row['faculty_id']."';>
                        <input type='submit' class='btn btn-danger' name='delete' value='Delete'>
                        </form></td>";
                        echo "<td><form class='form-horizontal' method='plot' action='Viewing.php'>
                        <input name='id' type='hidden' value='".$row['faculty_id']."';>
                        <input type='submit' class='btn btn-success' name='plot' value='Plot'>
                        </form></td>";
                        echo "</tr>";
                        }
                        
                    echo "</table>";

            echo "</td>           
        </tr>";

       // delete record
       if($_SERVER['REQUEST_METHOD'] == "POST")
       {
       
       if(isset($_POST['faculty_id']))
       {
       $faculty_id = mysqli_real_escape_string($conn,$_POST['faculty_id']);
       $sql = mysqli_query($conn,"DELETE FROM faculty WHERE faculty_id='$faculty_id'");
       if(!$sql)
       {
           echo ("Could not delete rows" .mysqli_error());
       }else{
         echo '<script type="text/javascript">
                         alert("Faculty Successfully Deleted");
                            location="viewlist.php";
                              </script>';
       }
       }
       }
// plot Transfer
if($_SERVER['REQUEST_METHOD'] == "PLOT")
{

if(isset($_POST['id']))
{
    echo ("Could not delete rows" .mysqli_error());
}else{
  echo '<script type="text/javascript">
                     location="Viewing.php";
                       </script>';
}


}
    ?>
</fieldset>
</form>
</div>
</div>
</div>

<div align="center">
<br>
<a href="addfaculty.php"><input type='submit' class='btn btn-success' name='delete' value='New'></a>
<a href="Index.php"><input type='submit' class='btn btn-primary' name='delete' value='Log-out'></a>
</div>
</div>
	</body>
	</html>
	
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "footer.php";
   include_once("footer.php");

?>
