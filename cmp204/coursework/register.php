<!doctype html>

<html lang="en">

<head>

    <title>Register</title>
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

                    <h1>Welcome to Bastile's Fan Page!!</h1>
                    <p>Please fill out the forum below</p>
                    <p>Don't forget to accept our T and C's</p>
                    
        </div>

        <div class="col-6 col-md-4">



        </div>
    </div>


    <div class="row" id="colTwo">
        <div class="col-6 col-md-4">

           

        </div>
    
        <div class="col-6 col-md-4">

            <div class="register">

                <h1 id="h1-black">Register</h1>

                    <form action="processRegistration.php" method="post" class="form-center">
            
                        <input type="text" placeholder="Enter Username" name="username" id="username" required><br />

                        <input type="password" placeholder="Enter Password" name="password" id ="password" required><br />

                        <input type="checkbox" id="TandC" name="TandC" value="TandC">
                        <label for="TandC"> I accept the T's and C's</label>
                        <p>click <a href="TandC.php">HERE</a> to see our term and conditions</p><br>  
                        
                        <input type="submit" value="register" id="submitColour">


                    </form>



            </div>

        </div>

        <div class="col-6 col-md-4">

           

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