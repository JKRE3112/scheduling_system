<?php
	include_once 'main-header.php'
?>
		<section class="signup-form">
			<div class="signup-form-form text-center">
			<h2> You must log in first! </h2>
			<form action="includes/login-inc.php" method="post">
				<input type="text" name="uid" placeholder="Username/Email...">
				<input type="password" name="pwd" placeholder="Enter your password...">
				
				<button type="submit" name="submit">Log In</button>
			</form>
		
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
		</body>
	