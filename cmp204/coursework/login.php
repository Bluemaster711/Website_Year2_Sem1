<!doctype html>

<html lang="en">

<head>

    <title>Login</title>
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
            <p>Para</p>

        </div>

        <div class="col-6 col-md-4">

        <img src="images/logo.jpg" alt=”Logo” class="logo">



        </div>
    </div>


    <div class="row" id="colTwo">
        <div class="col-6 col-md-4">

           

        </div>
    
        <div class="col-6 col-md-4">

            <div class="login">

        
                <h1 id="h1-black">Login</h1>

                <form action="processLogin.php" method="post" class="form-center">

                    <input type="text" placeholder="Enter Username" name="username" id="username" required><br />

                    <input type="password" placeholder="Enter Password" name="password" id ="password" required><br />

                    <input type="submit" value="login" id="submitColour">

                </form>
            </div>

        </div>

        <div class="col-6 col-md-4">

            <div class="well">
                <p><a id="redirectToReg" href="register.php">No a member? Join By clicking here!!</a></p>
            </div>

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