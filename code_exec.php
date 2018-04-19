<?php
session_start();
 
include('connection.php');
 
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$nid=$_POST['nid'];
$username=$_POST['username'];
$password=$_POST['password'];
 
mysqli_query($bd, "INSERT INTO member(fname, lname, gender, address, email, contact, nid, username, password)VALUES('$fname', '$lname', '$gender', '$address', '$email', '$contact', '$nid', '$username', '$password')");
 
header("location: user_reg.php?remarks=success");
 
mysqli_close($con);
?>