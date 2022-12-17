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
				<p><a href="https://www.deezer.com/en/artist/1352097">Deezer</a></p>
				</div>

				<div class="well">
					<p><a href="https://open.spotify.com/artist/7EQ0qTo7fWT7DPxmxtSYEc">spotify</a></p>
				</div>

				<div class="well">
					<p><a href="https://www.youtube.com/@BastilleVEVO">Bastile Youtube</a></p>
				</div>

			</div>
		</div>

		<div class="row" id="colTwo">
            <div class="col-md-12">
             
				<p id=lyrics>Song</p>
				
			</div>
        </div>


        <div class="row" id="colThree">
            
			<div class="col-6">

				<button id=playlyrics>Play Song</button>

			</div>

			<div class="col-6">

				

			</div>

        </div>
    

		<div class="row" id="colthreeimage">
	

		
			<div class="col-6" id ="div_img">

				<p id = "imagelocation">

				</p>
			</div>

			<div class="col-6" id="div_img2">

				<p id = "imagelocation2">

				</p>


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