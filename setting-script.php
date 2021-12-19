<?php

// This page updates the user password
$con= mysqli_connect("localhost","root","","intern","3309") or die(mysqli_error($con));
session_start();
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}

$old_pass = $_POST['opassword'];
$old_pass = mysqli_real_escape_string($con, $old_pass);
$old_pass = MD5($old_pass);

$new_pass = $_POST['npassword'];
$new_pass = mysqli_real_escape_string($con, $new_pass);
$new_pass = MD5($new_pass);

$new_pass1 = $_POST['rnpassword'];
$new_pass1 = mysqli_real_escape_string($con, $new_pass1);
$new_pass1 = MD5($new_pass1);

$query = "SELECT email, password FROM users WHERE email ='" . $_SESSION['email'] . "'";
$result = mysqli_query($con, $query)or die($mysqli_error($con));
$row = mysqli_fetch_array($result);
$orig_pass = $row['password'];

if ($new_pass != $new_pass1) {
    header('location: settings.php?error=The two passwords don\'t match');
} else {
    if ($old_pass == $orig_pass) {
        $query = "UPDATE  users SET password = '" . $new_pass . "' WHERE email = '" . $_SESSION['email'] . "'";
        mysqli_query($con, $query) or die($mysqli_error($con));
        header('location: setting.php?error=Password Updated');
    } else
        header('location: settings.php?error=Wrong Old Password');
}
?>