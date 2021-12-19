<?php
$con= mysqli_connect("localhost","root","","intern","3309") or die(mysqli_error($con));
session_start();
if(!isset($_SESSION['email']))
    header('location:index.php');

//This code checks if the product is added to cart. 
function check_if_added_to_cart($item_id) {
    $user_id = $_SESSION['user_id']; //We'll get the user_id from the session
    $con= mysqli_connect("localhost","root","","intern","3309") or die(mysqli_error($con));
     // connecting to the database
    // We will select all the entries from the user_items table where the item_id is equal to the item_id we passed to this function, user_id is equal to the user_id in the session and status is 'Added to cart'
    
    $query = "SELECT * FROM users_items WHERE item_id='$item_id' AND user_id ='$user_id' and status='Added to cart'";
    $result = mysqli_query($con, $query) or die(mysqli_error($con));
    
// We'll check if the no.of rows in the result and no.of rows returned by the mysqli_num_rows($result) is true. If yes then it return 0 else it returns 0
    if (mysqli_num_rows($result) >= 1) {
        return 1;
    } else {
        return 0;
    }
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
                     padding-top: 60px;
                 }
                 .img-responsive{
                    height: 240px;
                    width:100%;
                     
                 }
                 .panel-heading
                 {
                     height: 45px;
                 }
                 .panel-body{
                     height: 350px;
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
                       <?php if (isset($_SESSION['name'])) { ?>
                        <li><a href="#"><span class="glyphicon glyphicon-user"> <?php  echo $_SESSION['name']; ?> </span> </a> </li>
                       <?php } ?>
                        <li><a href="about.php"><span class="glyphicon glyphicon-th-list"></span>  About</a></li>
                        <li><a href="Contact.php"><span class="glyphicon glyphicon-earphone"></span>  Contact Us</a></li>
                        <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span>  Cart</a></li>
                        <li><a href="setting.php"><span class="glyphicon glyphicon-cog"></span>  Setting </a></li>
                        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>  Logout </a></li>

                        
                    </ul>
                    </div>
        </nav>
        
        <div class="row container_decor container-fluid" style="margin-bottom: 40px;">
                <div class=" col-sm-3 " >
                    <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Samsung Guru</h4>
                    </div> 
                       <div class="panel-body"> 
                    
                           <img src="m1.jpg" class="img-responsive" alt="wow" >
                <div class="caption">
                    <p>Most Reliable Phone</p>
                                   
                                   <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="#" role="button" class="btn btn-primary btn-block">Add to Cart</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cartadd.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                                   ?>

               
                </div>
                </div>
                </div>
                </div>
                <div class=" col-sm-3 " >
                    <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Honor View 20</h4>
                    </div> 
                       <div class="panel-body"> 
                    
                           <img src="m7.jpg" class="img-responsive" alt="wow" >
                <div class="caption">
                    <p>Featuring 8gb RAM</p>
                    <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="#" role="button" class="btn btn-primary btn-block">Add to Cart</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(2)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cartadd.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                                   ?>

               
                </div>
                </div>
                </div>
                </div>
                <div class=" col-sm-3" >
                    <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Xiaomi Redmi Note Q</h4>
                    </div> 
                       <div class="panel-body"> 
                           <img src="m2.jpg" class="img-responsive" alt="wow">
                <div class="caption">
                    <p>Love To Click</p>
                    <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="#" role="button" class="btn btn-primary btn-block">Add to Cart</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(3)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cartadd.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                                   ?>
                </div>
                </div>
                    </div>
                </div>
               <div class=" col-sm-3"  >
                    <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Mi Mix 4</h4>
                    </div> 
                       <div class="panel-body"> 
                           <img src="m3.jpg" class="img-responsive" alt="wow">
                <div class="caption">
                    <p>Best Camera Phone in the market</p>
                    <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="#" role="button" class="btn btn-primary btn-block">Add to Cart</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(4)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cartadd.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                                   ?>
                </div>
                </div>
                    </div>
                </div>
                
          
                <div class="col-sm-3 " >
                    <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Realme Z</h4>
                    </div> 
                       <div class="panel-body"> 
                    
                           <img src="m4.jpg" class="img-responsive" alt="wow" >
                <div class="caption">
                    <p>Amazement personified</p>
                    <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="#" role="button" class="btn btn-primary btn-block">Add to Cart</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(5)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cartadd.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                                   ?>
               
                </div>
                </div>
                </div>
                </div>
                <div class=" col-sm-3 " >
                    <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Samsung Galaxy A20</h4>
                    </div> 
                       <div class="panel-body"> 
                    
                           <img src="m8.jpg" class="img-responsive" alt="wow" >
                <div class="caption">
                    <p>Technology in your hands</p>
                    <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="#" role="button" class="btn btn-primary btn-block">Add to Cart</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(6)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cartadd.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                                   ?>
               
                </div>
                </div>
                </div>
                </div>
                <div class="col-sm-3" >
                    <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Realme 8</h4>
                    </div> 
                       <div class="panel-body"> 
                    <img src="m5.jpg" class="img-responsive" alt="wow">
                <div class="caption">
                    <p>You need it , it doesn't</p>
                    <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="#" role="button" class="btn btn-primary btn-block">Add to Cart</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(7)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cartadd.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                                   ?>
                </div>
                </div>
                    </div>
                </div>
               <div class="col-sm-3"  >
                    <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Redmi Note 8 Pro</h4>
                    </div> 
                       <div class="panel-body"> 
                           <img src="m6.jpg" class="img-responsive" alt="wow">
                <div class="caption">
                    <p>Seemlessly Amazing Battery life</p>
                    <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="#" role="button" class="btn btn-primary btn-block">Add to Cart</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(8)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cartadd.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                                   ?>
                </div>
                </div>
                    </div>
                </div>
                </div>
                        </div>
        
        
    </body>
</html>