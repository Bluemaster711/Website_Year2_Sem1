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

                <h1>User Profile</h1>
                <div id="div_greet"></div>
                <?php
                session_start(); 
                ?>
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
        <div class="row" id="colTwo">
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
        <div class="row" id="colTwo">
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

                <p>Change password</p>
                <form action="changePassword.php" method="post">

                    <input type="password" placeholder="Enter old password" name="password" required><br />
                    <input type="password" placeholder="Enter new password" name="newpassword"  required><br />

                    <input type="submit" value="change password">

                </form>

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