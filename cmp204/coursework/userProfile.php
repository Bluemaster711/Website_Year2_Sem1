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
            
                <p>Welcome <?php if(isset($_SESSION["username"])) { echo $_SESSION["username"]; } else { echo "hello unauthorized user"; } ?></p>

            </div>

            <div class="col-6 col-md-4">

                <div class="well">
                    <p><a href="https://www.allmusic.com/artist/bastille-mn0002825814/biography">Bastile Information</a></p>
                </div>

                <div class="well">
                    <p><a href="https://open.spotify.com/artist/7EQ0qTo7fWT7DPxmxtSYEc">spotify</a></p>
                </div>

                <div class="well">
                    <p><a href="https://en-gb.facebook.com/bastilleuk/">Bastile facebook</a></p>
                </div>

            </div>
        
        </div>


        <div class="row" id="colTwo">

            <div class="col-12 col-md-8">

                <h1>Your Tours / Gigs --->></h1>

            </div>

            <div class="col-6 col-md-4">

                <form action="editgigs.php">
                    <button>Edit Your Tours / Gigs</button>
                </form>

            </div>

        </div>

        <div class="row" id="colTwoo">
            <div class="col-md-12">
                

				<div class = "sga" ><p class = "sga" ><?php include "selectGigsAttended.php"?></p></div>
			
				
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
<P>This website uses cookies for registered users. Click <a href="TandC.php">HERE</a> to see our term and conditions</P>
</footer>

</body>

</html>