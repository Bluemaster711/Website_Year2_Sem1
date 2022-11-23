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
                <p>Navagation</p>
                <nav>
                    <?php include_once "includes/links.php" ?>
                </nav>
            </div>


        <div class="col-sm-2" id="colOne">

        <h1>Register</h1>

        <form action="processRegistration.php" method="post">
        Username: <input type="text" name="username"><br />

        Password: <input type="text" name="password"><br />

        <input type="submit">


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