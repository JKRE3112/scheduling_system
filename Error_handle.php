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
    <title>Main</title>
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
    <!--Projects-->
    
      <div class="container mb-1 mt-3">
        <div class="row row justify-content-center">
          <div class="col-12">
          <?php
    if(file_exists("mytestfile.txt")) {
  $file = fopen("mytestfile.txt", "r");
    } else {
    die("Error: The file does not exist.");
    }
        ?> 
</body>
</html>

