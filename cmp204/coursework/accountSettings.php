<!doctype html>
<html lang="en">

<?php include "includes/error.php" ?>

<head>
	<title>passwordChangeForm</title>
	<?php include "includes/head.php" ?>
</head>


<body>
	<div id=flip>
		<p id=navtext>Navagation</p>
		<nav>
				<?php
					if(isset($_COOKIE["PHPSESSID"])) {
						session_start();
					}
					if(isset($_SESSION["username"])){
						include "includes/linksIn.php";
					}else{
						include "includes/linksOut.php";
					}
				?>
		</nav>
	</div>
	<div class="container">


		<div class="row" id="colTwo">
			<div class="col-6 col-md-4">

			<h2>Change password</h2>
					<form action="changePassword.php" method="post">

						<input type="password" placeholder="Enter old password" name="password" required><br />
						<input type="password" placeholder="Enter new password" name="newpassword"  required><br />

						<input type="submit" value="change password">

					</form>
			</div>
			<div class="col-6 col-md-4">
			</div>
			<div class="col-6 col-md-4">

			<h2>Delete account</h2>	
					<form action="deleteAccount.php" method="post">

						<input type="text" placeholder="Enter Username" name="username" id="username" required><br />
						<input type="password" placeholder="Enter Password" name="password" id ="password" required><br />

						<input type="submit" value="Delete Account" onclick="return confirm('Are you sure you want to delete your account?');" name="confirm" id="confirm">

					</form>
			</div>
		</div>

		<div class="row">
			<div class="col-12">
				<?php include "includes/footer.php" ?>
			</div>
		</div>
	</div>
</body>

<footer>
<P>This website uses cookies for registered users. Click <a href="TandC.php">HERE</a> to see our term and conditions</P>
</footer>

</html>