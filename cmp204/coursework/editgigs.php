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

				<div id="div_greet"></div>
				<p>Here you can edit your tours/gigs</p>
				<p>You can view them at tour info or at your user profile</p>
				<!-- I used tour and gig interchangeably and didnt noticed that you wanted them displayed on the user profile until last minute
				hence the duplicate display on the two pages -->

			</div>

			<div class="col-6 col-md-4">


			</div>
		</div>


		<div class="row" id="colTwo">
                   
            	<div class="col-6 col-md-4">
					<h1>Add</h1>
            	</div>

				<div class="col-6 col-md-4">
					<h1>Change</h1>
				</div>

				<div class="col-6 col-md-4">
					<h1>Delete</h1>
				</div>

		</div>
		
		
		<div class="row" id="colTwoo">

            <div class="col-6 col-sm-4">
              
				<div class="editgig">

					<form action="addGigsAttended.php" method="post" class="form-center">
						<input type="name" placeholder="Enter Title or Venue" name='titlegig' id="titlegig" required><br />

						<input type="name" placeholder="Enter Location" name='locationgig' id ="locationgig" required><br />

						<input type="date" placeholder="Date" name='dategig' id ="dategig" required><br />

						<input type="submit" value="submit" id="submitColour">
					</form>
				</div>


            </div>

            <div class="col-6 col-sm-4">

					<div class="editgig">

						<form action="editGigsAttended.php" method="post" class="form-center">
							<label>Enter title of the gig / tour you want to change</label><br>
							<input type="name" placeholder="Enter Title or Venue" name='oldtitlegig' id="titlegig" required><br />

							<br>
							<br>

							<label>Change Title</label><br>
							<label>leave blank if you do not want to change it.</label><br>
							<input type="name" placeholder="Enter Title or Venue" name='titlegig' id="titlegig"><br />

							<label>Change Location</label><br>
							<label>leave blank if you do not want to change it.</label><br>
							<input type="name" placeholder="Enter Location" name='locationgig' id ="locationgig"><br />

							<label>Change Date</label><br>
							<label>leave blank if you do not want to change it.</label><br>
							<input type="date" placeholder="Date" name='dategig' id ="dategig" ><br />

							<input type="submit" value="submit" id="submitColour">

						</form>
					</div>

            </div>

            <div class="col-6 col-sm-4">


				<div class="editgig">

					<form action="deleteGigsAttended.php" method="post" class="form-center">
						<label>Enter title of the gig / tour you want to delete</label><br>

						<input type="name" placeholder="Enter Title or Venue" name='titlegig' id="titlegig" required><br />

						<input type="submit" value="submit" id="submitColour">
					</form>
				</div>


            </div>
        </div>



		<div class="row" id="colThree">
		<div class="col-6">
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

</body>

<footer>
<P>This website uses cookies for registered users. Click <a href="TandC.php">HERE</a> to see our term and conditions</P>
</footer>


</html>