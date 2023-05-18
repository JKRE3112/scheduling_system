<?php 
	session_start();
?>
<!doctype html>
<html lang="en">
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
        <a class="navbar-brand" href="main.php"><img src="images/brand2.png" width="200" height="50"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent" style="Font-Family: 'Arvo', Serif;">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0 fw-bolder">
            <li class="nav-item">
              <a class="nav-link" href="main.php" >HOME</a>  
            </li>
            <li class="nav-item">
              <a class="nav-link" href="superuser-login.php">SUPERUSER</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="head-login.php" style="color:#18211D">LOGIN</a>
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
			<section class="login-form">
			<div class="signup-form-form text-left">
			<h2> Welcome! Please Log In to Proceed </h2>
			<form action="includes/login-inc.php" method="post">
    <div class="mb-3">
        <label class="form-label" for="inputEmail">Username</label>
        <input type="text" name="uid" class="form-control" placeholder="Username" required>
    </div>
    <div class="mb-3">
        <label class="form-label" for="inputPassword">Password</label>
        <input type="password"  class="form-control" name="pwd" placeholder="Password" required>
    </div>
    <div class="mb-3">
    </div>
    <button type="submit" class="btn btn-outline-danger" name="submit">Log In</button>
</form>
		</div>
		<?php 
			if (isset($_GET["error"])) {
				if($_GET["error"] == "emptyInput"){
					echo "<p> You forgot to fill in all fields! </p>";
				}
				else if ($_GET["error"] == "wronglogin") {
					echo "<p> Incorrect Information! </p>";
				}
			}

		?>
		</section>
        </div>
     

	  <div class="col-lg-6 md-6 sm-6 d-flex flex-column justify-content-center">
                  <div class="greet mt-3">
                    <h3 class="display-6 fw-bold" style="color:#AE0F36;">WELCOME</h3><br>
					<h2 class="display-4 fw-bold" style="color:#18211D">CS</h2>
                    <h1 class="display-4 fw-bold" style="color:#18211D">AUTOMATED SCHEDULING</h1>
                  </div>
                    <div class="desc fw-bolder" style="color:#AE0F36;"> <br>
                      <h5>Login your registered account.</h5>
                      <h5>To proceed in scheduling.</h5>
                    </div>&nbsp;

                      <a href="main.php" class="btn btn-outline-danger btn-custom">Go Back <span class="bi bi-arrow-left"></span></a>

  
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