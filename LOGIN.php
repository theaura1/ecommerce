<?php
$con= mysqli_connect("localhost","root","","intern","3309") or die(mysqli_error($con));
session_start();
$email= mysqli_real_escape_string($con,$_POST['email']);
$password = mysqli_real_escape_string($con, $_POST['password']);
$password=md5($password);
/////////query///////////
$query="SELECT id, email, name FROM users WHERE email='" . $email . "' AND password='" . $password . "'";
$result= mysqli_query($con, $query) or die(mysqli_error($con));
$num= mysqli_num_rows($result);
// If the email and password are not present in the database, the mysqli_num_rows returns 0, it is assigned to $num.


if ($num == 0) {
  $error = "<span class='red'style='color:red'; >Please enter correct E-mail id and Password</span>";
  header('location: index.php?error=' . $error);
} else {  
  $row = mysqli_fetch_array($result);
  $_SESSION['email'] = $row['email'];
  $_SESSION['user_id'] = $row['id'];
  $_SESSION['name']=$row['name'];
  header('location: products.php');
  
 // echo " USER SUCCESSFULLU LOGIN";
}


?>