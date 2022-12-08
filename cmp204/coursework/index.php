<!doctype html>
<html lang="en">

<?php include "includes/error.php" ?>

<head>
	<title>Index</title>
	<?php include "includes/head.php" ?>
</head>


<body>

	<div id=flip>
		<p id=navtext>Navagation</p>
		<nav>
				<?php
					session_start();
					if(isset($_SESSION["username"])){
						include "includes/linksIn.php";
					}else{
						include "includes/linksOut.php";
					}
				?>
		</nav>
	</div>


	<div class="container">

		<div class="row" id="colOne">
			<div class="col-12 col-md-8">

				<h1>Bastile</h1>

				<div id="div_greet"></div>
				<p>Para</p>

			</div>

			<div class="col-6 col-md-4">

				<div class="well">
				<p><a href="#">Link</a></p>
				</div>

				<div class="well">
					<p><a href="#">Link</a></p>
				</div>

				<div class="well">
					<p><a href="#">Link</a></p>
				</div>

			</div>
		</div>


		<div class="row" id="colTwo">
			<div class="col-6 col-md-4">

				<p>info</p>

			</div>
			
			<div class="col-6 col-md-4">

				<p>info</p>
			
			</div>

			<div class="col-6 col-md-4">

				<p>info</p>

			</div>
		</div>

		

		<div class="row" id="colThree">
	

			<div class="col-6">

				<p>info</p>

			</div>

			<div class="col-6">

				<p>info</p>

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
</footer>


</html>