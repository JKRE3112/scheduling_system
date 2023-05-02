<?php
	include_once 'main-header.php'
?>

		<section class="signup-form">
			<div class="signup-form-form text-center">
			<h2> Welcome Faculty, Log In to Proceed </h2>
			<form action="includes/login-inc.php" method="post">
				<input type="text" name="uid" id="uid" placeholder="Username/Email...">
				<input type="password" name="pwd" id="pwd" placeholder="Enter your password...">
				<select name="type">
				<option value="" disabled selected>Select Account Type</option>
				  <option value="Faculty">Faculty</option>
				  <option value="Head">Head</option>
				</select>
				<button type="submit" name="submit">Log In</button>
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
		</body>
	
