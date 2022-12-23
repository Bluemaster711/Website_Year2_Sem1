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

		<div class="row" id="colOne">
			<div class="col-12 col-md-8">

				<h1>Bastile</h1>
				<p>Bastille but with one L</p>

				<div id="div_greet"></div>

			</div>

			<div class="col-6 col-md-4">

				<div class="well">
					<p><a href="https://twitter.com/bastilledan?lang=en">Dan Smith Twiter</a></p>
				</div>

				<div class="well">
					<p><a href="https://en-gb.facebook.com/bastilleuk/">Bastile facebook</a></p>
				</div>

				<div class="well">
					<p><a href="https://en.wikipedia.org/wiki/Bastille_(band)">Main source of infomration....</a></p>
				</div>

			</div>
		</div>


		<div class="row" id="colTwo">
			<div class="col-6 col-md-4">
				<h3>Band members</h3>
				<p>Dan Smith</p>
				<p>Kyle Simmons</p>
				<p>Will Farquarson</p>
				<p>Chris Woody</p>
			</div>			
			<div class="col-6 col-md-4">		
				<h3>Instrument</h3>
				<p>Vocalist</p>
				<p>Keyboardist</p>
				<p>Bassost and Guitarist</p>
				<p>Drummer</p>	
			</div>
			<div class="col-6 col-md-4">
			</div>
		</div>

		

		<div class="row" id="colThree">
	

			<div class="col-6">

			<p>This page was created for educational purposes</p>

			</div>

			<div class="col-6">


			</div>

		</div>

		<div class="row">
	

			<div class="col-12">

				<?php include "includes/footer.php" ?>

			</div>


		</div>

	</div>


<footer>
<P>This website uses cookies for registered users. Click <a href="TandC.php">HERE</a> to see our term and conditions</P>
</footer>
</body>

</html>