<?php
/**
 * Created by PhpStorm.
 * User: barry
 * Date: 08/03/2017
 * Time: 00:25
 */
if(isset($_COOKIE["username"])) {
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>Student Records</title>
        <link rel="stylesheet" href="login.css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <style>
        a:link, a:visited {
            text-decoration: none;
            color: black;
        }
    </style>
    <body>
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <img src="data:image/jpeg;base64,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">
                </div>
                <ul class="nav navbar-nav navbar-right">
                    <!--                <li class="active"><a href="#">Home</a></li>-->
                    <li><a href="home.php">
                            <button class="btn btn-primary navbar-btn">Home</button>
                        </a></li>
                    <!--                <li><a href="logout.html">Logout</a></li>-->
                    <li><a href="logout.php">
                            <button class="btn btn-primary navbar-btn">Logout</button>
                        </a></li>
                </ul>
            </div>
        </nav>

    </header>
    <?php

    ?>
    <form method="POST" action="addLecturer.php" name="Login_Form" class="form-signin">
        <h3 class="form-signin-heading">Add New Lecturer</h3>
        <hr class="colorgraph">
        <br>
        <input name="name" type="text" class="form-control" placeholder="Name" required=""  autofocus=""/><br><br>
        <input name="department" type="text" class="form-control" placeholder="Department" required=""/><br><br>

        <button class="btn btn-primary btn-lg btn-block" name="Submit" value="Login" type="Submit">Add
        </button>
    </form>
    </body>
    </html>
    <?php
}