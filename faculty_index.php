<?php

// php select option value from database for faculty

$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "insertion";

// connect to mysqli database

$connect = mysqli_connect($hostname, $username, $password, $databaseName);


// for method 2
$query = "SELECT * FROM `faculty`";
$result2 = mysqli_query($connect, $query);

$options = "";

while($row2 = mysqli_fetch_array($result2))
{
    $options = $options."<option>$row2[1]</option>";
}

?>
<?php
  $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "header.php";
   include_once("header.php");
?>
<html>
<head>
<style>
body {
	background-color: white;
}
</style>
</head>
<body>
<br><div class="container">
	
  <div class="row">
    <div class="col-lg-11">
		<div class="jumbotron ">
		
		<form class="form-horizontal" method= "post" action = "add.home.php">
			<fieldset>

			<!-- Form Name -->
            
			<legend>Set Schedule</legend>


        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>

    <body>
        
		<!-- HTML code for faculty type -->
        <div class="form-group">
            <p class = "fs-1 col-md-4 control-label"> Faculty type </p>
			<div class="col-md-12">
		<select id="faculty" name="faculty" class="form-control">
            <?php echo $options;?>
        </select>
		</div>
		</div>
        <?php


// php select option value from database for units

$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "insertion";

// connect to mysqli database

$connect = mysqli_connect($hostname, $username, $password, $databaseName);

// mysqli select query
$query = "SELECT * FROM `units`";

// for method 1

$result1 = mysqli_query($connect, $query);

// for method 2
$query = "SELECT * FROM `units`";
$result2 = mysqli_query($connect, $query);


$options = "";

while($row2 = mysqli_fetch_array($result2))
{
    $options = $options."<option>$row2[1]</option>";
}

?>

        <!--HTML code with bootstrap for units/ Method 2 -->
        <div class="form-group">
            <p class = "fs-1 col-md-4 control-label"> Units </p>
			<div class="col-md-12">
		<select id="units" name="units" class="form-control">
            <?php echo $options;?>
        </select>
		</div>
		</div>
	       <!-- Button -->
				<div class="form-group align-right" >
				  <label class="col-md-4 control-label" for="submit"></label>
				  <div class="col-md-12">
					<button id="submit" name="insert" href = "home.php" class="btn btn-primary"> Next </button>
				  </div>
				</div>
    </body>
</head>
</html> 

		</div>		
    </div>
   

<?php

