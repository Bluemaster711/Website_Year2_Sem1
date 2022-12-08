<!doctype html>

<html lang="en">

<head>

    <title>Register</title>
    <?php include "includes/head.php" ?>
</head>

<body>
    <div class="container-fluid">

        <h1>Header</h1>

        <div id="div_greet"></div>

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


        <div class="col-sm-2" id="colOne">

            
            <div class="register">

                <h1>Register</h1>

                <form action="processRegistration.php" method="post">
    
                <input type="text" placeholder="Enter Username" name="username" id="username" required><br />

                <input type="password" placeholder="Enter Password" name="password" id ="password" required><br />

                <input type="submit" value="register">

                </form>

            </div>

		</div>

        <div class="col-sm-6" id="colTwo">
            <p>Para</p>
        </div>

        <div class="col-sm-4" id="colThree">
            <p>Para</p>
        </div>

    </div>


<footer>

    <?php include "includes/footer.php"; ?>

</footer>

</body>

</html>