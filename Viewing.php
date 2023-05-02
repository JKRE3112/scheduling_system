<?php
  $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "header.php";
   include_once("header.php");
?>
<html>
<style>
body {
	background-color: white;
}



</body>
</style>
<body>
<div align="center">
			<fieldset>
            <legend>Viewing</legend>
<br><div class="container">
	
  <div align="center" class="row">
    <div align="center" class="col-lg-6">
		<div class="jumbotron" align="center">
		Please select a button for your purpose of visit.<br>
								Thank you!
		<form class="form-horizontal" method= "post" action = "View.table.php">
			<fieldset>
			<div class="form-group"  align="center" >
			  <label class="col-md-4 control-label" for="submit"></label>
			  <div class="col-md-5">
				<button id="submit" name="submit" class="btn btn-success">View</button>
			  </div>
			</div>
			</fieldset>
			</form>
			<form class="form-horizontal" method= "post" action = "edit.php">
			<fieldset>
			<div class="form-group"  align="center" >
			  <label class="col-md-4 control-label" for="submit"></label>
			  <div class="col-md-5">
				<button id="submit" name="submit" class="btn btn-info">Edit</button>
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