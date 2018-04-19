<?php
session_start();
 
include('connection.php');
 
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$contact=$_POST['contact'];
$nid=$_POST['nid'];
$pstation=$_POST['pstation'];
$ranking=$_POST['ranking'];
$username=$_POST['username'];
$password=$_POST['password'];
 
mysqli_query($bd, "INSERT INTO policeinfo(fname, lname, gender, address, contact, nid, pstation, ranking, username, password)VALUES('$fname', '$lname', '$gender', '$address', '$contact', '$nid', '$pstation', '$ranking', '$username', '$password')");
 
header("location: p_reg.php?remarks=success");
 
mysqli_close($con);
?>