<!doctype html>

<html lang="en">

<head>
    <title>UserProfile</title>
    <?php include "includes/head.php" ?>
</head>

<body>

    <div class="container-fluid">

    <h1>User Profile</h1>

        <div id="div_greet"></div>

            <div id=flip>
                <p>Navagation</p>
                <nav>
                    <?php include_once "includes/links.php" ?>
                </nav>
            </div>

        <div class="col-sm-2" id="colOne">

            <p>Welcome <?php echo $_POST["username"]; ?></p>    


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