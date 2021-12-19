<?php
$con= mysqli_connect("localhost","root","","intern","3309") or die(mysqli_error($con));
session_start();
$email=$_POST['email'];
$name=$_POST['name'];
$message=$_POST['txtarea'];
$query="INSERT into doubts(name, email,message) VALUES('" . $name . "','" . $email . "','" . $message . "')";
$result=mysqli_query($con, $query) or die(mysqli_error($con));
$hihi= "<span style='font-size:20px; border:1px solid red;'>Your Query Has Been Sent To The Developers</span>";
header('location: Contact.php? error='.$hihi);
?>

