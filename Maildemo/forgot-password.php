<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
$con= mysqli_connect("localhost","root","","intern","3309") or die(mysqli_error($con));
//session_start();
if (isset($_SESSION['email'])) {
    header('location:../Assignment/products.php');
}
if($_POST)
{
    $email=$_POST['email'];
    $query= "select*from users where email='$email'" or die(mysqli_error($con));
    $result= mysqli_query($con, $query);
    $count= mysqli_num_rows($result);
    $row= mysqli_fetch_array($result);
    if($count>0)
    {
        //echo ($row['password']);
        // Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function


// Load Composer's autoloader
require 'vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'iamnotabotbaby@gmail.com';                     // SMTP username
    $mail->Password   = 'yoyohoneysingh123';                               // SMTP password
    $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('iamnotabotbaby@gmail.com', 'tryingtrying');
    $mail->addAddress($email, $email);     // Add a recipient
    

   
    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'FORGOT PASSWORD';
    $mail->Body    = "Hi $email , your password is {$row['password']}  and Decrypt it using https://www.md5online.org/md5-decrypt.html ";
    $mail->AltBody = "Hi $email , your password is {$row['password']}  and Decrypt it using https://www.md5online.org/md5-decrypt.html ";

    $mail->send();
    header('location: forgot-password.php?error=PASSWORD RECOVERY MAIL SUCCESSFULLY SENT');
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
    }
    else
{
    echo "<script>alert('EMAIL NOT FOUND'); </script>";
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
                        <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span>  Signup</a></li>
                        <li><a href="#" data-toggle="modal" data-target="#lmodel"><span class="glyphicon glyphicon-log-in"></span>  Login</a></li>
                        <li><a href="about.php"><span class="glyphicon glyphicon-th-list"></span>  About Us</a></li>
                        <li><a href="Contact.php"><span class="glyphicon glyphicon-earphone"></span>  Contact Us</a></li>
                    </ul>
                </div>
        </nav>    
        </div>
        
        <div class ="container-fluid col-xs-4 col-xs-offset-4 container_decor">
            <center>
                <h3 style="letter-spacing: 2px;"><b>RESET YOUR PASSWORD</b></h3><br>
                <form  method="POST">
                    
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Enter Your Email Id" id="email" name="email" > <br>
                            </div>
                    
                    <button type="submit" value="SEND RESET LINK" class="btn btn-primary" >SEND RESET LINK</button>
                    <?php
                         if(isset($_GET['error']))
                        echo "<br><br><b class='red'>" . $_GET['error'] . "</b>";
                        ?>

                             
                </form>    
            </center>
            
        </div>
        
        
    </body>
</html>
            