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
            <!-- DATA               -->
            <div class="row container_decor" >
                <div class="col-xs-offset-1 col-xs-9" >
                    <h2><b>LIVE SUPPORT</b></h2>
                    <h3 style="letter-spacing:2px;">24 hours | 7 days a week | 365 days a year Live Techincal Support</h3>
                    <p>I recently discovered I could make fudge with just chocolate chips, sweetened condensed milk, vanilla extract, and a thick pot on slow heat. I tried it with dark chocolate chunks and I tried it with semi-sweet chocolate chips. It's better with both kinds. It comes out pretty bad with just the dark chocolate. The best add-ins are crushed almonds and marshmallows -- what you get from that is Rocky Road. It takes about twenty minutes from start to fridge, and then it takes about six months to work off the twenty pounds you gain from eating it. All things in moderation, friends. All things in moderation.</p>
                </div>
                <div class="col-xs-2" style="float:right">
                    <img src="c.jpg" alt="support">
                </div>
            </div>
            <div class="row">
                <div class ="col-xs-offset-1 col-xs-7">
                    <h2><b>CONTACT US</b></h2>
                    <form style="margin-bottom:10px;" method="POST" action="support.php">
                            <div class="form-group">
                                <label for="first_name">First Name</label>
                                <input type="text" class="form-control btn-block" id="name" name="name">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control btn-block" id="email" name="email">
                            </div>
                            
                            <div class="form-group">
                                <label for="txtarea">Message</label>
                                <textarea rows="10" cols="30" id="txtarea"  name="txtarea" class="btn-block" style="outline:none;">
                                    
                                </textarea>
                            </div>
                        <input type="submit" value="submit" class="btn btn-primary">
                        
                        <?php
                                       if(isset($_GET['error']))
                                       echo $_GET['error']; 
                                       
                        ?>
                    </form>
                </div>
                <div class="col-xs-4">
                    <h2><b>COMPANY INFORMATION  </b></h2><br>
                    <ul style="font: normal normal 200  cursive; list-style: none; margin: 0; padding: 0;">
                        <li>500 Kohat Enclave</li>
                        <li>526-B Maharaja Agarsen Road.</li>
                        <li>India</li>
                        <li>Phone: +91 9876543210</li>
                        <li>Fax: (000) 002 0234 4423</li>
                        <li>Email: Ekart@gmail.com</li>
                        <li>Follow Us on : Facebook, Twitter</li>
                    </ul>
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
            
            
            
            
            
             <!-- DATA               -->
            <footer style="padding-top: 10px; position:relative; width:100%; bottom: 0; border-top: 1px solid black; background-color: #2E2E2E; color:white;">
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
             
        </div>
        
    </body>
</html>    