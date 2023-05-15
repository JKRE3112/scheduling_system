<?php

// php select option value from database

$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "insertion";

// connect to mysqli database

$connect = mysqli_connect($hostname, $username, $password, $databaseName);

// mysqli select query
$query = "SELECT * FROM `course`";


// for method 1

$result1 = mysqli_query($connect, $query);


/*while($row2 = mysqli_fetch_array($result2))
{
    $options = $options."<option>$row2[1]</option>";
}*/

?>
<?php
  $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "header.php";
?>
<html>
<head>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arvo&family=Lato&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/528fcd2c3c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">   
    <title>Main</title>
  </head>
  <body style="background-image: url(images/head2.svg);">
    <!-- Navigation Bar-->
    <nav class="navbar navbar-expand-lg navbar-light sticky-top" id="navbar">
      <div class="container">
        <a class="navbar-brand" href="faculty.php"><h2>CS Scheduling</h2></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent" style="Font-Family: 'Arvo', Serif;">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0 fw-bolder">
            <li class="nav-item">
              <a class="nav-link active" href="faculty.php" style="color:#18211D">HOME</a>  
            </li>
            <li class="nav-item">
              <a class="nav-link" href="fachome.php">SCHEDULE</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="includes/Faculty.display.php">SCHEDULE LOGS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="includes/logout.php">LOGOUT</a>
            </li>
                
      </li>
    </ul>
  </div>
          
        </div>
      </div>
    </nav>

<style>
body {
	background-color: whitesmoke;
}
</style>
</head>
<body>
<br><div class="container">
	
  <div class="row">
    <div class="col-lg-11">
		<div class="jumbotron ">
		
		<form class="form-horizontal" method= "post" action = "add.fachome.php">
			<fieldset>

			<!-- Form Name -->
            
			<legend>Set Schedule</legend>


        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>

    <body>
		
        <!--Method One-->
        <div class="form-group">
			<label class="col-md-4 control-label" for="Course">Course</label> 
			<div class="col-md-12">
		<select  id="course" name="course"  class="form-control">

            <?php while($row1 = mysqli_fetch_array($result1)):;?>

            <option  value="<?php echo $row1[2];?>"><?php echo $row1[2];?></option>

            <?php endwhile;?>

        </select>
        

		</div>		
    </div>
    </body>
</head>
</html>

<?php

// php select option value from database

$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "insertion";

// connect to mysqli database

$connect = mysqli_connect($hostname, $username, $password, $databaseName);

// mysqli select query
$query = "SELECT * FROM `rooms`";

// for method 1

$result1 = mysqli_query($connect, $query);

// for method 2
$query = "SELECT * FROM `subject`";
$result2 = mysqli_query($connect, $query);


$options = "";

while($row2 = mysqli_fetch_array($result2))
{
    $options = $options."<option>$row2[2]</option>";
}

?>


<html>
<head>
</head>
<body>


        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>

    <body>
        
		<!-- Method Two -->
        <div class="form-group">
			<label class="col-md-4 control-label" for="subject">Subjects</label> 
			<div class="col-md-12">
		<select  id="subject" name="subject"  class="form-control">
            <?php echo $options;?>
        </select>
		</div>
		</div>
		
        

            <?php while($row2 = mysqli_fetch_array($result2)):;?>

            <option value="<?php echo $row2[0];?>"><?php echo $row2[2];?></option>

            <?php endwhile;?>

        </select> 
		<?php

// php select option value from database

$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "insertion";

// connect to mysqli database

$connect = mysqli_connect($hostname, $username, $password, $databaseName);

// mysqli select query
$query = "SELECT * FROM `rooms`";

// for method 1

$result1 = mysqli_query($connect, $query);

// for method 2
$query = "SELECT * FROM `rooms`";
$result2 = mysqli_query($connect, $query);


$options = "";

while($row2 = mysqli_fetch_array($result2))
{
    $options = $options."<option>$row2[1]</option>";
}

 
?>



<html>
<head>
</head>
<body>
<meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>

    <body>
        
		<!-- Method Two -->
        <div class="form-group">
			<label class="col-md-4 control-label" for="room">Room</label> 
			<div class="col-md-12">
		<select  id="room" name="room"  class="form-control">
            <?php echo $options;?>
        </select>
		</div>
		</div>
		
        <!--Method One-->
        
       

            <?php while($row2 = mysqli_fetch_array($result2)):;?>

            <option value="<?php echo $row2[0];?>"><?php echo $row2[1];?></option>
			

            <?php endwhile;?>

        </select>
        
	
        



<?php


// php select option value from database

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


while($row2 = mysqli_fetch_array($result2))
{
    $options = $options."<option>$row2[1]</option>";
}

 
?>



<html>
<head>
</head>
<body>
<meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>

    <body>
        
			
        <!--Method One-->
        
       

            <?php while($row2 = mysqli_fetch_array($result2)):;?>

            <option value="<?php echo $row2[0];?>"><?php echo $row2[1];?></option>
			

            <?php endwhile;?>

        </select>
        
	
        



<?php




// php select option value from database

$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "insertion";

// connect to mysqli database

$connect = mysqli_connect($hostname, $username, $password, $databaseName);

// mysqli select query
$query = "SELECT * FROM `overload`";

// for method 1

$result1 = mysqli_query($connect, $query);

// for method 2
$query = "SELECT * FROM `overload`";
$result2 = mysqli_query($connect, $query);


$options = "";

while($row2 = mysqli_fetch_array($result2))
{
    $options = $options."<option>$row2[1]</option>";
}

 
?>



<html>
<head>
</head>
<body>
<meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>

    <body>
        
		<!-- Method Two -->
        <div class="form-group">
			<label class="col-md-4 control-label" for="overload">Overload</label> 
			<div class="col-md-12">
		<select  id="overload" name="overload"  class="form-control">
            <?php echo $options;?>
        </select>
		</div>
		</div>
		
        <!--Method One-->
        
       

            <?php while($row2 = mysqli_fetch_array($result2)):;?>

            <option value="<?php echo $row2[0];?>"><?php echo $row2[1];?></option>
			

            <?php endwhile;?>

        </select>
        
	
        



<?php

// php select option value from database

$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "insertion";

// connect to mysqli database

$connect = mysqli_connect($hostname, $username, $password, $databaseName);

// mysqli select query
$query = "SELECT * FROM `timer`";

// for method 1

$result1 = mysqli_query($connect, $query);

// for method 2
$query = "SELECT * FROM `timer`";
$result2 = mysqli_query($connect, $query);


$options = "";

while($row2 = mysqli_fetch_array($result2))
{
    $options = $options."<option>$row2[1]</option>";
}

 
?>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dropdown Example</title>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <script>
    $(document).ready(function() {
      // Populating start time dropdown
      var startTimeSelect = $('#start_time');
      var options = '';

      // Replace the following block of code with your own SQL query to fetch start times
      for (var i = 7; i <= 20; i++) {
        var time = i < 10 ? '0' + i + ':00' : i + ':00';
        options += '<option value="' + time + '">' + formatTime(time) + '</option>';
      }
      startTimeSelect.append(options);

      // Populating end time dropdown based on selected start time
      var endTimeSelect = $('#end_time');
      endTimeSelect.prop('disabled', true);

      startTimeSelect.change(function() {
        var startTimeValue = startTimeSelect.val();
        var startTimeHour = parseInt(startTimeValue.split(':')[0]);

        if (startTimeHour >= 7 && startTimeHour < 20) {
          endTimeSelect.find('option').remove();

          for (var i = startTimeHour + 1; i <= 20; i++) {
            var hour = i < 10 ? '0' + i : i;
            var option = $('<option>', {
              value: hour + ':00',
              text: formatTime(hour + ':00')
            });

            endTimeSelect.append(option);
          }

          endTimeSelect.prop('disabled', false);
        } else {
          endTimeSelect.find('option').remove();
          endTimeSelect.append($('<option>', {
            value: '',
            text: 'Select End Time'
          }));
          endTimeSelect.prop('disabled', true);
        }
      });
    });

    // Function to format time in 12-hour clock system
    function formatTime(time) {
      var hour = parseInt(time.split(':')[0]);
      var minute = time.split(':')[1];
      var period = hour >= 12 ? 'PM' : 'AM';

      if (hour > 12) {
        hour = hour - 12;
      } else if (hour === 0) {
        hour = 12;
      }

      return hour + ':' + minute + ' ' + period;
    }
  </script>

</head>
<body>

  <div class="form-group">
    <label class="col-md-4 control-label" for="start_time">Start time</label> 
    <div class="col-md-12">
      <select id="start_time" name="start_time" class="form-control">
        <option value="">Select Start Time</option>
      </select>
    </div>
  </div>

  <div class="form-group">
    <label class="col-md-4 control-label" for="end_time">End time</label> 
    <div class="col-md-12">
      <select id="end_time" name="end_time" class="form-control" disabled>
        <option value="">Select End Time</option>
      </select>
    </div>
  </div>

</body>
</html>
        
        

<?php

// php select option value from database

$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "insertion";

// connect to mysqli database

$connect = mysqli_connect($hostname, $username, $password, $databaseName);

// mysqli select query
$query = "SELECT * FROM `timer`";

// for method 1

$result1 = mysqli_query($connect, $query);

// for method 2
$query = "SELECT * FROM `timer`";
$result2 = mysqli_query($connect, $query);


$options = "";

while($row2 = mysqli_fetch_array($result2))
{
    $options = $options."<option>$row2[2]</option>";
}

?>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dropdown Example</title>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <script>
    $(document).ready(function() {
  // Populating start time dropdown
  var startTimeSelect = $('#start_time');
  var options = '';

  // Send an AJAX request to retrieve the start times from the database
  $.ajax({
    url: 'get_times.php',
    type: 'GET',
    dataType: 'json',
    success: function(data) {
      // Populate the dropdown with the retrieved start times
      $.each(data, function(index, value) {
        options += '<option value="' + value + '">' + formatTime(value) + '</option>';
      });
      startTimeSelect.append(options);
    },
    error: function(jqXHR, textStatus, errorThrown) {
      console.log('Error retrieving start times: ' + textStatus + ', ' + errorThrown);
    }
  });

  // Populating end time dropdown based on selected start time
  var endTimeSelect = $('#end_time');
  endTimeSelect.prop('disabled', true);

  startTimeSelect.change(function() {
    var startTimeValue = startTimeSelect.val();
    var startTimeHour = parseInt(startTimeValue.split(':')[0]);

    if (startTimeHour >= 7 && startTimeHour < 20) {
      endTimeSelect.find('option').remove();

      for (var i = startTimeHour + 1; i <= 20; i++) {
        var hour = i < 10 ? '0' + i : i;
        var option = $('<option>', {
          value: hour + ':00',
          text: formatTime(hour + ':00')
        });

        endTimeSelect.append(option);
      }

      endTimeSelect.prop('disabled', false);
    } else {
      endTimeSelect.find('option').remove();
      endTimeSelect.append($('<option>', {
        value: '',
        text: 'Select End Time'
      }));
      endTimeSelect.prop('disabled', true);
    }
  });
});


    // Function to format time in 12-hour clock system
    function formatTime(time) {
      var hour = parseInt(time.split(':')[0]);
      var minute = time.split(':')[1];
      var period = hour >= 12 ? 'PM' : 'AM';

      if (hour > 12) {
        hour = hour - 12;
      } else if (hour === 0) {
        hour = 12;
      }

      return hour + ':' + minute + ' ' + period;
    }
  </script>

</head>
<body>

  <div class="form-group">
    <label class="col-md-4 control-label" for="start_time">Start time</label> 
    <div class="col-md-12">
      <select id="start_time" name="start_time" class="form-control">
      </select>
    </div>
  </div>

  <div class="form-group">
    <label class="col-md-4 control-label" for="end_time">End time</label> 
    <div class="col-md-12">
      <select id="end_time" name="end_time" class="form-control" disabled>
        <option value="">Select End Time</option>
      </select>
    </div>
  </div>

</body>
</html>


		<!-- Button -->
				<div class="form-group align-right" >
				  <label class="col-md-4 control-label" for="submit"></label>
				  <div class="col-md-12">
					<button id="submit" name="insert" class="btn btn-secondary"> Set </button>
				  </div>
				</div>
        
        
</fieldset>
			</form>
		</div>		
    </div>
    </body>
</head>
</html>
