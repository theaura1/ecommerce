


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
                     padding-top: 120px;
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
                        <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span>  Signup</a></li>
                        <li><a href="#" data-toggle="modal" data-target="#lmodel"><span class="glyphicon glyphicon-log-in"></span>  Login</a></li>
                        <li><a href="about.php"><span class="glyphicon glyphicon-th-list"></span>  About Us</a></li>
                        <li><a href="Contact.php"><span class="glyphicon glyphicon-earphone"></span>  Contact Us</a></li>

                        
                    </ul>
                    </div>
        </nav>
                </div>
        
        
        
            <!-- signup -->
            <div class="row"> 
                <div class="container_decor">
                <div class="col-xs-offset-1 col-xs-6">
                    <img src="sign.jpg" class="img-responsive" style="border: 1px solid black;" alt="wow" width="1100px" height="1600px" >
                </div>
                </div>    
                <div class ="col-xs-offset-1 col-xs-3">
                    <h2>SIGNUP</h2><br>
                    <form method="POST" action="Signupscript.php">
                            <div class="form-group">
                                 <input type="text" class="form-control" placeholder="Name" id="name" name="name" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$">
                            </div>
                            <div class="form-group"> 
                                <input type="email" class="form-control" placeholder="Email" id="email" name="email"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                                    
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" id="password" name="password" pattern=".{6,}">
                            </div>
                            <div class="form-group">
                                <input type="number" class="form-control" placeholder="Contact" id="contact" name="contact" >
                                    <?php
                                       if(isset($_GET['error1']))
                                       echo $_GET['error1']; 
                                       ?>

                            </div>
                            <div class="form-group">
                                 <input type="text" class="form-control" placeholder="City" id="city" name="city">
                            </div>
                            <div class="form-group">
                                 <input type="text" class="form-control" placeholder="Address" id="address" name="address">
                            </div>
                        <button type="submit" class="btn btn-primary" value="registeration_submit" style="float:right;">SUBMIT</button>
                        <?php 
                                    if(isset($_GET['error']))
                                    echo $_GET['error'];
                                    ?>
                        
                        </form>
                    
                </div>
            </div>
            
            
            
            
            
            
            <!-- signup -->
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
               <footer style="padding-top: 10px; position:fixed; width:100%; bottom: 0; border-top: 1px solid black; background-color: #2E2E2E; color:white;">
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
        
        </head>
        </html>
        
