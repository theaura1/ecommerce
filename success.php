<?php
$con= mysqli_connect("localhost","root","","intern","3309") or die(mysqli_error($con));
session_start();
if(!isset($_SESSION['email'])){
header('location:index.php'); }
else{
$user_id = $_SESSION['user_id'];
//

//We will change the status of the items purchased by the user to 'Confirmed'
//$query="delete from users_items where user_id = '$user_id' ";
$query = "UPDATE users_items SET status='Confirmed' WHERE user_id=" . $user_id . " and status='Added to cart'";


$result=mysqli_query($con, $query) or die(mysqli_error($con));
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
                     padding-top:  60px;
                     margin-top: 60px;
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
        
            <div class="col-md-12 container_decor">
                <div class="jumbotron">
                      <h3 align="center">Your order is confirmed. Thank you for shopping with us.</h3><hr>
                    <p align="center">Click <a href="products.php">here</a> to purchase any other item.</p>
                </div>
            </div>

            
        </div>
    </body>
</html>