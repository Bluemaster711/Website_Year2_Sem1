<!doctype html>

<html lang="en">

<head>
    <title>Tour Information</title>
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
					include "includes/linksOut.php";}
			?>
        </nav>
    </div>



    <div class="container">

		<div class="row" id="colOne">
			<div class="col-12 col-md-8">

				<h1>Tour Information</h1>

				<div id="div_greet"></div>
                <p>Details of tour's</p>

			</div>

			<div class="col-6 col-md-4">
			</div>

		</div>


		<div class="row" id="colTwo">

			<div class="col-12 col-md-8">
				<p>Past Tours</p>
			</div>

			<div class="col-6 col-md-4">
			</div>
		</div>

		<div class="row" id="colTwo">
            <div class="col-6 col-md-4">
                <p>tour</p>
            </div>
    
            <div class="col-6 col-md-4">
                <p>tour</p>
            </div>

            <div class="col-6 col-md-4">
                <p>tour</p>
            </div>
        </div>
		
		<div class="row" id="colThree">
	

			<div class="col-6">

				<button id=randbutton>Randomize</button>

			</div>

			<div class="col-6">

				<p id=randtext></p>

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