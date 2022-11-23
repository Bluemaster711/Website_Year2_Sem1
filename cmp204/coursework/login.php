<!doctype html>

<html lang="en">

<head>

    <title>Login</title>
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

        
            <h1>Login</h1>

            <form action="processLogin.php" method="post">
            <label for="uname"><b><Password></b></label>
            <input type="text" placeholder="Enter Username" name="username" required><br />

            <label for="psw"><b><Password></b></label>
            <input type="password" placeholder="Enter Password" name="password" required><br />

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