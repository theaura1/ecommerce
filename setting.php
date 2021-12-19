<?php
$con= mysqli_connect("localhost","root","","intern","3309") or die(mysqli_error($con));
session_start();
if (!isset($_SESSION['email'])) {
    header('location: index.php');
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
        <title><?php echo" ASSIGNMENT INTERN"; ?></title>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
       
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <style>
            
            .navbar-header{
             margin-left:5px;
               margin-right: 5px;
                 }
                 .navbar-right{
                     margin-right: 10px;
                 }
                 .container_decor{
                     padding-top: 110px;
                 }
                 .img-responsive{
                    height: 170px;
                    width:100%;
                     
                 }
                 .panel-heading
                 {
                     height: 45px;
                 }
                 .panel-body{
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
                    <a  class="navbar-brand" href="products.php">  E-Store</a>
                </div>
                <div class="collapse navbar-collapse" id="mynavbar"> 
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span>  Cart</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-cog"></span>  Setting </a></li>
                        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>  Logout </a></li>
                        
                    </ul>
                </div>
        </nav>    
        </div>
        <div class ="container-fluid col-xs-4 col-xs-offset-4 container_decor">
            <center>
                <h3 style="letter-spacing: 2px;"><b>CHANGE PASSWORD</b></h3><br>
                <form action="setting-script.php" method="POST">
                    
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Old Password" id="opassword" name="opassword" pattern=".{6,}"> <br>
                            </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="New Password" id="npassword" name="npassword" pattern=".{6,}"> <br>
                            </div>
                    <div class="form-group">
                                <input type="password" class="form-control" placeholder="Retype New Password" id="rnpassword" name="rnpassword" pattern=".{6,}">
                            </div>
                    <button type="submit" value="Change" class="btn btn-primary" style="float:left;">CHANGE</button>
                    <?php
                         if(isset($_GET['error']))
                        echo "<br><br><b class='red'>" . $_GET['error'] . "</b>";
                        ?>

                             
                </form>    
            </center>
            
        </div>
        
        
    </body>
</html>
            