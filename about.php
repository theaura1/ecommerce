<?php
$con= mysqli_connect("localhost","root","","intern","3309") or die(mysqli_error($con));
session_start();


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
                    <a  class="navbar-brand" href="index.php">  E-Store</a>
                </div>
                <div class="collapse navbar-collapse" id="mynavbar"> 
                    <ul class="nav navbar-nav navbar-right">
                        <?php  if(!isset($_SESSION['email'])){ ?>
                        <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span>  Signup</a></li>
                        <li><a href="#" data-toggle="modal" data-target="#lmodel"><span class="glyphicon glyphicon-log-in"></span>  Login</a></li>
                        <li><a href="about.php"><span class="glyphicon glyphicon-th-list"></span>  About Us</a></li>
                        <li><a href="Contact.php"><span class="glyphicon glyphicon-earphone"></span>  Contact Us</a></li>
                        <?php } else { ?>
                        <?php if (isset($_SESSION['name'])) { ?>
                        <li><a href="#"><span class="glyphicon glyphicon-user"> <?php  echo $_SESSION['name']; ?> </span> </a> </li>
                       <?php } ?>
                        <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span>  Cart</a></li>
                        <li><a href="setting.php"><span class="glyphicon glyphicon-cog"></span>  Setting </a></li>
                        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>  Logout </a></li>
                        

                        <?php } ?>
                    </ul>
                </div>
            
        </nav>
            
            <!--      About Us         -->
            
            <div class="col-md-offset-1 col-md-3 container_decor">
                <h3>WHO WE ARE</h3>
                <img src="me.jpg" class="img-responsive" alt="hi">
                <p style="font-family:sans-serif; font-size: 12px;"><br> Hello , My Name is <b>Lavkesh</b>. A Sophomore.
                    I started this company a week ago, It was amazing to work on this project, I gained a lot of Valuable Experience
                    I Hope this will be useful for customers and sellers.</p>
            </div>
                

            <!--      About Us         -->    
            <div class="col-md-offset-1 col-md-3 container_decor">
                <h3 style="letter-spacing:2px;">OUR HISTORY </h3>
                <p style="font-family:sans-serif; font-size: 12px;">
                    <b>1990</b><br>
                    Greg understood that this situation would make Michael terribly uncomfortable. Michael simply had no idea what was about to come and even though Greg could prevent it from happening, he opted to let it happen. It was quite ironic, really. It was something Greg had said he would never wish upon anyone a million times, yet here he was knowingly letting it happen to one of his best friends. He rationalized that it would ultimately make Michael a better person and that no matter how uncomfortable, everyone should experience racism at least once in their lifetime.
                </p>
                <p style="font-family:sans-serif; font-size: 12px;">
                    <b>1998</b><br>
                    Greg understood that this situation would make Michael terribly uncomfortable. Michael simply had no idea what was about to come and even though Greg could prevent it from happening, he opted to let it happen.
                </p>
                <p style="font-family:sans-serif; font-size: 12px;">
                    <b>2003</b><br>
                    Greg understood that this situation would make Michael terribly uncomfortable. Michael simply had no idea what was about to come and even though Greg could prevent it from happening, he opted to let it happen.
                </p>
                <p style="font-family:sans-serif; font-size: 12px;">
                    <b>2010</b><br>
                    Greg understood that this situation would make Michael terribly uncomfortable. Michael simply had no idea what was about to come and even though Greg could prevent it from happening, he opted to let it happen. It was quite ironic, really. It was something Greg had said he would never wish upon anyone a million times, yet here he was knowingly letting it happen to one of his best friends. He rationalized that it would ultimately make Michael a better person and that no matter how uncomfortable, everyone should experience racism at least once in their lifetime.
                </p>
                
            </div>
            
            <div class="col-md-offset-1 col-md-3 container_decor">
                <h3 style="letter-spacing:2px;">OPPORTUNITIES </h3>
                <p style="font-family:sans-serif; font-size: 12px;">
                    <b>Available Roles</b><br>
                <ol style="padding:0; margin:0 ; font-family:sans-serif; font-size: 12px; ">
                    <li>Web Developer[experience =4 years (minimum)]</li>
                    <li>Business Apprentice</li>
                    <li>Marketing Expertise</li>
                </ol>
                
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
                            if(isset($_GET['error']))
                            echo $_GET['error']; 
                            ?>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" id="password" name="password">
                            </div>
                            <input type="submit" value="Login" class="btn btn-primary">
                            <?php
                            if(isset($_GET['hihi']))
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
               <footer style="padding-top: 20px; position:fixed; width:100%; bottom: 0; border-top: 1px solid black; background-color: #2E2E2E; color:white;">
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
        </div>
    </body>
</html>

