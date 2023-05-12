<?php 
	session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
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
              <a class="nav-link active" href="main.php" style="color:#18211D" >HOME</a>  
            </li>
            <li class="nav-item">
              <a class="nav-link" href="superuser-login.php" >SUPERUSER</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="head-login.php">LOGIN</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">ABOUT</a>
            </li>
        </div>
      </div>
    </nav>

    <!--Home-->
      <div class="container my-3 py-1 ">
        <div class="row">
          <div class="col-lg-6 md-6 sm-6 d-flex flex-column justify-content-center">
                  <div class="greet mt-3">
                    <h3 class="display-6 fw-bold" style="color:#AE0F36;">WELCOME</h3><br>
					<h2 class="display-4 fw-bold" style="color:#18211D">CS</h2>
                    <h1 class="display-4 fw-bold" style="color:#18211D">AUTOMATED SCHEDULING</h1>
                  </div>
                    <div class="desc fw-bolder" style="color:#AE0F36;"> <br>
                      <h5>A scheduling system</h5>
                      <h5>That utilizes beehive algorithm.</h5>
                    </div>&nbsp;

                     
                   
 
                    <a href="login.php" class="btn btn-outline-danger btn-custom">Get Started<span class="bi bi-arrow-right"></span></a>


                    </div>

                    
                    <div class="col-lg-6 md-6 sm-6 d-flex flex-column justify-content-center">
            &nbsp;
          <div class="tup">
                  <img src="images/logo2.png" class="float-right mx-auto d-block w-75 h-100"   alt="..." >
                  </div>
        </div>
      </div>
    

     
   
      
      <footer id="footer" class="py-2 my-2 container-fluid text-center">
        <hr>
          <small>Copyright &copy; TECHNOLOGICAL UNIVERSITY OF THE PHILIPPINES MANILA<br></small>
          <small>ALL RIGHTS RESERVED 2023</small>
      </footer>
    </div>
    
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
   
  </body>
</html>
                    
   
