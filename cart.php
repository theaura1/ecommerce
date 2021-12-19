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
                        <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span>  Cart</a></li>
                        <li><a href="setting.php"><span class="glyphicon glyphicon-cog"></span>  Setting </a></li>
                        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>  Logout </a></li>

                        
                    </ul>
                    </div>
        </nav>
            
        
        <div class="row">
            <div clas="col-md-6 col-md-offset-3 container_decor">
                <table class="table table-striped table-hover table-bordered table-responsive" style="margin-left: 15px; margin-top: 100px;">
                    <!--show table only if there are items added in the cart-->
                    <?php
                    $sum=0;
                    if(isset($_SESSION['user_id'])) {
                    $user_id=$_SESSION['user_id'];
                    
                    $query = "SELECT items.price AS Price, items.id, items.name AS Name FROM users_items JOIN items ON users_items.item_id = items.id WHERE users_items.user_id='$user_id' and status='Added to cart'";
                    $result= mysqli_query($con, $query) or die(mysqli_error($con));
                    if (mysqli_num_rows($result) >= 1)  {
                        ?>
                    <thead>
                                <tr>
                                    <th>Item Number</th>
                                    <th>Item Name</th>
                                    <th>Price</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                    <?php                           
                                while ($row = mysqli_fetch_array($result)) {
                                    $sum+= $row['Price'];
                                    $user_id .= $row['id'] . ", ";
                                    echo "<tr><td>" . "#" . $row["id"] . "</td><td>" . $row["Name"] . "</td><td>Rs " . $row["Price"] . "</td><td><a href='cartremove.php?id={$row['id']}' class='remove_item_link'> Remove</a></td></tr>";
                                }
                                //$user_id = rtrim($id, ", ");
                                echo "<tr><td></td><td>Total</td><td>Rs " . $sum . "</td><td><a href='success.php?itemsid=" . $user_id . "' class='btn btn-primary'>Confirm Order</a></td></tr>";
                    ?>
                            </tbody>
                    <?php 
                    } }else {
                            echo "Add items to the cart first!";
                        }
                        ?>
                    <?php 
                    if(!isset($_SESSION['email']) || mysqli_num_rows($result)==0 ){
                    
                        ?>
                            <h2 style="margin-top: 50px; margin-left: 20px;"> ADD ITEMS TO THE CART FIRST </h2>
                    <?php } ?>
                                                        
                    </table>

                           
                    
                    
                   
              
            </div>
            
        </div>
            
            
            
         </div>   
        
    </body>
</html>
