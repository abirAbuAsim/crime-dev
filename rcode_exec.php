<?php
session_start();
 
include('connection.php');
 
$c_name=$_POST['c_name'];
$c_type=$_POST['c_type'];
$c_equipment=$_POST['c_equipment'];
$c_target=$_POST['c_target'];
$c_area=$_POST['c_area'];
$Age=$_POST['Age'];
$picture=$_POST['picture'];
$gender=$_POST['gender'];
$wanted=$_POST['wanted'];
mysqli_query($bd, "INSERT INTO criminals(c_name, c_type, gender, c_equipment, c_target, picture, c_area, Age, wanted)VALUES('$c_name', '$c_type', '$gender', '$c_equipment', '$c_target', '$picture', '$c_area', '$Age', '$wanted')");
 
header("location: recordform.php?remarks=success");
 
mysqli_close($con);
?>