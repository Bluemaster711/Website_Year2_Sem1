<!doctype html>

<html lang="en">

<head>
    <title>UserProfile</title>
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

                <h1>User Profile</h1>
                <div id="div_greet"></div>
            
                <p>Welcome <?php if(isset($_SESSION["username"])) { echo $_SESSION["username"]; } else { echo "your stupid"; } ?></p>

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

            <div class="col-12 col-md-8">

                <h1>Your Tours</h1>

            </div>

            <div class="col-6 col-md-4">

                <form action="editGigs.php">
                    <button>Edit Your Gig's</button>
                </form>

            </div>

        </div>

        <div class="row" id="colTwoo">
            <div class="col-6 col-md-4">
                <p>photo</p>
            </div>

            <div class="col-6 col-md-4">
                <p>photo</p>
            </div>

            <div class="col-6 col-md-4">
                <p>photo</p>
            </div>
        </div>


        <div class="row" id="colThree">

            <div class="col-6">
                <form action="accountSettings.php">
                    <button>Account Settings</button>
                </form>
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
</footer>

</body>

</html>