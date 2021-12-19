<?php
$con= mysqli_connect("localhost","root","","intern","3309") or die(mysqli_error($con));
//////entering data into database
session_start();
$name = mysqli_real_escape_string($con, $_POST['name']);
$email= mysqli_real_escape_string($con, $_POST['email']);
$password= mysqli_real_escape_string($con, $_POST['password']);
$password=MD5($password);
$contact= mysqli_real_escape_string($con, $_POST['contact']);
$city= mysqli_real_escape_string($con, $_POST['city']);

$address= mysqli_real_escape_string($con, $_POST['address']); 
$regex_email="/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
$regex_contact="/^[789][0-9]{9}$/";

$select= "SELECT * from users WHERE email='$email'";
$result= mysqli_query($con, $select);
$num= mysqli_num_rows($result);
if ($num!=0){
    $error="<span class='red' style='color:red'>Email Already Exists</span>";
    header('location:Signup.php?error='.$error);
}else if(preg_match($regex_contact,$contact)){
    $error1="<span class='red' style='color:red'>Not A Valid Phone Number</span>";
     header('location:Signup.php?error='.$error1);
}else{
    $query="INSERT into users(name, email, password, contact, city, address) VALUES('" . $name . "','" . $email . "','" . $password . "','" .     $contact . "','" . $city . "','" . $address . "')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    $hihi= "<span style='font-size:20px; border:1px solid red;'>USER REGISTERED SUCCESSFULLY</span>";
    $user_id = mysqli_insert_id($con);
    $_SESSION['email'] = $email;
    $_SESSION['user_id'] = $user_id;
    header('location: Signup.php? error='.$hihi);
    
}



?>