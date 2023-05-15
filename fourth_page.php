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
              <a class="nav-link" href="first_page.php">SCHEDULE</a>
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
    <?php
$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "insertion";

$connect = mysqli_connect($hostname, $username, $password, $databaseName);

$query = "SELECT * FROM `timer`";
$result2 = mysqli_query($connect, $query);

$startOptions = "";
$endOptions = "";

while ($row2 = mysqli_fetch_array($result2)) {
    $startOptions .= "<option value='" . $row2[0] . "'>" . $row2[1] . "</option>";
    $endOptions .= "<option value='" . $row2[0] . "'>" . $row2[2] . "</option>";
}

$query = "SELECT * FROM `overload`";
$result2 = mysqli_query($connect, $query);

$overloadOptions = "";

while ($row2 = mysqli_fetch_array($result2)) {
    $overloadOptions .= "<option value='" . $row2[0] . "'>" . $row2[1] . "</option>";
}

$query = "SELECT * FROM `subject`";
$result1 = mysqli_query($connect, $query);

$suboptions = "";

while ($row = mysqli_fetch_array($result1)) {
    $suboptions .= "<option value='" . $row['subject_description'] . "'>" . $row['subject_description'] . "</option>";
}
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="form-group"><h3>Schedule</h3>
        <label class="col-md-4 control-label" for="start_time">Start time</label>
        <div class="col-md-12">
            <select id="start_time" name="start_time" class="form-control">
                <?php echo $startOptions; ?>
            </select>
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-6 control-label" for="end_time">End time</label>
        <div class="col-md-12">
            <select id="end_time" name="end_time" class="form-control">
                <?php echo $endOptions; ?>
            </select>
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-4 control-label" for="overload">Overload</label>
        <div class="col-md-12">
            <select id="overload" name="overload" class="form-control">
                <?php echo $overloadOptions; ?>
            </select>
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-4 control-label" for="subject"><h3>Preferred Subjects</h3></label>
        <div class="col-md-12" id="subjectFieldsContainer">
            <!-- Existing subject field -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="subject1">Subject 1</label>
                <div class="col-md-12">
                    <select id="subject1" name="subject1" class="form-control">
                        <?php echo $suboptions; ?>
                    </select>
                </div>
            </div>
        </div>
    </div>

    <div class="form-group align-right">
        <label class="col-md-4 control-label" for="submit"></label>
        <div class="col-md-12">
            <button id="addSubjectBtn" class="btn btn-secondary">Add Subject</button>
            <button id="submit" name="insert" class="btn btn-secondary">ibato sa head</button>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            var counter = 2; // Start from 2 to account for the existing subject field

            $("#addSubjectBtn").click(function() {
                var newSubjectField = '<div class="form-group">' +
                    '<label class="col-md-4 control-label" for="subject' + counter + '">Subject ' + counter + '</label>' +
                    '<div class="col-md-12">' +
                    '<select id="subject' + counter + '" name="subject' + counter + '" class="form-control">' +
                    $("#subject1").html() + // Use the HTML content of the first subject field
                    '</select>' +
                    '</div>' +
                    '</div>';

                $("#subjectFieldsContainer").append(newSubjectField);
                counter++;
            });
        });
    </script>
</body>
</html>


