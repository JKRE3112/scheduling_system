<!DOCTYPE html>
<html>
     <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arvo&family=Lato&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/528fcd2c3c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">   
    <title> Head is now scheduling</title>
  </head>
<body>
 <!-- Navigation Bar-->
    <nav class="navbar navbar-expand-lg navbar-light sticky-top" id="navbar">
      <div class="container">
        <a class="navbar-brand" href="main.php"><h2>CS Scheduling</h2></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent" style="Font-Family: 'Arvo', Serif;">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0 fw-bolder">
            <li class="nav-item">
              <a class="nav-link" href="main.php" style="color:#18211D">HOME</a>  
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">ABOUT</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="superuser-login.php">SUPERUSER</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="head-login.php">LOGIN</a>
            </li>
        </div>
      </div>
    </nav>
   

    <?php

$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "insertion";

$connect = mysqli_connect($hostname, $username, $password, $databaseName);

$query = "SELECT * FROM `year_level`";
$result2 = mysqli_query($connect, $query);

$options = "";

while ($row2 = mysqli_fetch_array($result2)) {
    $options .= "<option>" . $row2[1] . "</option>";
}
?>


<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <!-- Method One -->
    <div class="form-group">
        <label class="col-md-4 control-label" for="year_level">Year Level</label>
        <div class="col-md-12">
            <select id="year_level" name="year_level" class="form-control">
                <?php echo $options; ?>
            </select>
        </div>
    </div>

    <?php
    $query = "SELECT * FROM `course`";
    $result2 = mysqli_query($connect, $query);

    $options = "";

    while ($row2 = mysqli_fetch_array($result2)) {
        $options .= "<option>" . $row2[2] . "</option>";
    }
    ?>

    <!-- Method Two -->
    <div class="form-group">
        <label class="col-md-6 control-label" for="course_name">Course</label>
        <div class="col-md-12">
            <select id="course_name" name="course_name" class="form-control">
                <?php echo $options; ?>
            </select>
        </div>
    </div>

    <?php
    $query = "SELECT * FROM `subject`";
    $result1 = mysqli_query($connect, $query);

    $suboptions = "";

    while ($row = mysqli_fetch_array($result1)) {
        $suboptions .= "<option value='" . $row['subject_description'] . "'>" . $row['subject_description'] . "</option>";
    }
    ?>

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