<?php
  $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "header.php";
   include_once("header.php");
   include_once("navbar.php");
?>
<html>
<head>
<style>
body {
	background-color: white;
}
</body>
</style>
</head>
<body>
 
 <br><div class="container"> 
  <div class="row">
    <div class="col-lg-6">
		<div class="jumbotron">
                Here you will able to update your faculty name and designation<br>
				<form class="form-horizontal" method= "post" action="add.fac.php">
				<fieldset>

				<!-- Form Name -->
				<legend>Update Faculty</legend>
                <p>Please provide the following:<p>
				
				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="falname">Faculty Name</label>  
				  <div class="col-md-5">
				  <input id="falname" name="falname" type="text" placeholder="" class="form-control input-md" required="">
					
				  </div>
				</div>

				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="Designation">Designation</label>  
				  <div class="col-md-5">
				  <input id="Designation" name="Designation" type="text" placeholder="" class="form-control input-md" required="">
				  <span class="help-block"></span>  
				  </div>
				</div>
				
				<!-- Button -->
				<div class="form-group"  align="right">
				  <label class="col-md-4 control-label" for="submit"></label>
				  <div class="col-md-5">
					<button id="submit" name="submit" class="btn btn-primary">Update Viewing</button>
				  </div>
				</div>

				</fieldset>
				</form>
		</div>		
    </div>




<?php
  $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "footer.php";
   include_once("footer.php");
   include_once("navbar.php");
?>