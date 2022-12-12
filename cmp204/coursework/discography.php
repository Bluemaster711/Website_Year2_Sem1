<!doctype html>

<html lang="en">

<head>
    <title> Discography</title>
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

				<h1>Discography</h1>

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
                <p>Song 1</p>
            </div>
    
            <div class="col-6 col-md-4">
                <p>Song 2</p>
            </div>

            <div class="col-6 col-md-4">
                <p>Song 3</p>
            </div>
        </div>
        <div class="row" id="colTwo">
            <div class="col-6 col-md-4">
                <p>Song 4</p>
            </div>
    
            <div class="col-6 col-md-4">
                <p>Song 5</p>
            </div>

            <div class="col-6 col-md-4">
                <p>Song 6</p>
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



<footer>
</footer>
  
</body>

</html>