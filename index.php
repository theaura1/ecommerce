<?php
$con = mysqli_connect("localhost", "root", "", "intern", "3309") or die(mysqli_error($con));
session_start();
// Redirects the user to products page if he/she is logged in.
if (isset($_SESSION['email'])) {
    header('location: products.php');
}

?>


<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>

<head>
    <meta charset="UTF-8">
    <title><?php echo " ASSIGNMENT INTERN"; ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .navbar-header {
            margin-left: 5px;
            margin-right: 5px;
        }

        .navbar-right {
            margin-right: 10px;
        }

        .container_decor {
            padding-top: 60px;
        }

        .img-responsive {
            height: 170px;
            width: 100%;

        }

        .panel-heading {
            height: 45px;
        }

        .panel-body {
            height: 270px;
        }
    </style>


</head>

<body>
    <div class="container-fluid  row">
        <nav class="navbar navbar-default navbar-fixed-top ">


            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"> E-Store</a>
            </div>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Signup</a></li>
                    <li><a href="#" data-toggle="modal" data-target="#lmodel"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    <li><a href="about.php"><span class="glyphicon glyphicon-th-list"></span> About Us</a></li>
                    <li><a href="Contact.php"><span class="glyphicon glyphicon-earphone"></span> Contact Us</a></li>


                </ul>
            </div>

        </nav>
        <div class="row container_decor container-fluid" style="margin-bottom: 40px;">
            <div class=" col-sm-3 ">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Samsung Guru</h4>
                    </div>
                    <div class="panel-body">

                        <img src="m1.jpg" class="img-responsive" alt="wow">
                        <div class="caption">
                            <p>Most Reliable Phone</p>
                            <input type="submit" value="Order Now" class="btn btn-primary btn-block">

                        </div>
                    </div>
                </div>
            </div>
            <div class=" col-sm-3 ">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Honor View 20</h4>
                    </div>
                    <div class="panel-body">

                        <img src="m7.jpg" class="img-responsive" alt="wow">
                        <div class="caption">
                            <p>Featuring 8gb RAM</p>
                            <input type="submit" value="Order Now" class="btn btn-primary btn-block">

                        </div>
                    </div>
                </div>
            </div>
            <div class=" col-sm-3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Xiaomi Redmi Note Q</h4>
                    </div>
                    <div class="panel-body">
                        <img src="m2.jpg" class="img-responsive" alt="wow">
                        <div class="caption">
                            <p>Love To Click</p>
                            <input type="submit" value="Order Now" class="btn btn-primary btn-block">
                        </div>
                    </div>
                </div>
            </div>
            <div class=" col-sm-3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Mi Mix 4</h4>
                    </div>
                    <div class="panel-body">
                        <img src="m3.jpg" class="img-responsive" alt="wow">
                        <div class="caption">
                            <p>Best Camera Phone in the market</p>
                            <input type="submit" value="Order Now" class="btn btn-primary btn-block">
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-sm-3 ">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Realme Z</h4>
                    </div>
                    <div class="panel-body">

                        <img src="m4.jpg" class="img-responsive" alt="wow">
                        <div class="caption">
                            <p>Amazement personified</p>
                            <input type="submit" value="Order Now" class="btn btn-primary btn-block">

                        </div>
                    </div>
                </div>
            </div>
            <div class=" col-sm-3 ">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Samsung Galaxy A20</h4>
                    </div>
                    <div class="panel-body">

                        <img src="m8.jpg" class="img-responsive" alt="wow">
                        <div class="caption">
                            <p>Technology in your hands</p>
                            <input type="submit" value="Order Now" class="btn btn-primary btn-block">

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Realme 8</h4>
                    </div>
                    <div class="panel-body">
                        <img src="m5.jpg" class="img-responsive" alt="wow">
                        <div class="caption">
                            <p>You need it , it doesn't</p>
                            <input type="submit" value="Order Now" class="btn btn-primary btn-block">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Redmi Note 8 Pro</h4>
                    </div>
                    <div class="panel-body">
                        <img src="m6.jpg" class="img-responsive" alt="wow">
                        <div class="caption">
                            <p>Seemlessly Amazing Battery life</p>
                            <input type="submit" value="Order Now" class="btn btn-primary btn-block">
                        </div>
                    </div>
                </div>
            </div>
        </div>












        <!--        MOdAL STARTS               -->
        <div id="lmodel" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Login</h4>
                    </div>
                    <div class="modal-body">
                        <p>Don't Have an account?<a href="#"> Signup</a> </p>
                        <form method="POST" action="LOGIN.php">
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email" id="email" name="email">
                            </div>
                            <?php
                            if (isset($_GET['error']))
                                echo $_GET['error'];
                            ?>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" id="password" name="password">
                            </div>
                            <input type="submit" value="Login" class="btn btn-primary">
                            <?php
                            if (isset($_GET['hihi']))
                                echo $_GET['hihi'];
                            ?>
                        </form>
                        <a href="../Maildemo/forgot-password.php"><br><br>Forgot Password?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- MODAL ENDS                          -->




    <!-- FOOOTER STARTS                        -->
    <footer style="padding-top: 20px; position:relative; width:100%; bottom: 0; border-top: 1px solid black; background-color: #2E2E2E; color:white;">
        <div class="container">
            <div class="row" style="padding-bottom: 10px;">
                <div class="col-md-3">
                    <div class="hidden-lg hidden-md">
                        <h1 style="margin-bottom: 15px; margin-top: 0px; color:black; font-size: 20px; letter-spacing: 2px;">
                            SITE NAVIGATION
                        </h1>
                    </div>
                    <h4>INFORMATION</h4>
                    <ul style="list-style: none; margin-bottom: 0px; padding: 0; margin:0; ">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h4>MY ACCOUNT</h4>
                    <ul style="list-style: none; margin-bottom: 0px; padding: 0; margin:0; ">
                        <li><a href="#">Login</a></li>
                        <li><a href="#">Signup</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h4>Contact Us</h4>
                    <p>Contact: +91 9876543210</p>
                </div>
                <div class="col-md-3">
                    <h4 style="letter-spacing: 2px;">ALL RIGHTS RESERVED</h4>

                </div>
            </div>
        </div>
    </footer>
    <!-- FOOTER ENDSSSS                        -->
</body>

</html>