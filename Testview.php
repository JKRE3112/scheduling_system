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
</body>
</style>
</head>
<body>
            <div align="center">
			<?php
				include_once("viewlist.php");
			?>
			
			

<?php
   include_once("footer.php");
?>