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
				<p>Your past tours and facts about bastile</p>
				<br>

				<div id="div_greet"></div>

			</div>

			<div class="col-6 col-md-4">
			</div>

		</div>


		<div class="row" id="colTwo">

			<div class="col-md-12">
				<h1>Past Tours</h1>
			</div>

		</div>

		<div class="row" id="colTwoo">
            <div class="col-md-12">
                

				<div class = "sga" ><p class = "sga" ><?php include "selectGigsAttended.php"?></p></div>
			
				
            </div>
    
        
        </div>
		
		<div class="row" id="colThree">
	

			<div class="col-6">

				<button onclick=randpara() id=randbutton>Randomize</button>

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
<P>This website uses cookies for registered users. Click <a href="TandC.php">HERE</a> to see our term and conditions</P>
</footer>

</body>

</html>