<?php
session_start();
 
include('connection.php');
 
$name=$_POST['name'];
$p_name=$_POST['p_name'];
$gender=$_POST['gender'];
$p_station=$_POST['p_station'];
$witness=$_POST['witness'];
$evidence=$_POST['evidence'];
$c_timing=$_POST['c_timing'];
$c_support=$_POST['c_support'];
$date_of_incident=$_POST['date_of_incident'];
$c_type=$_POST['c_type'];
$c_location=$_POST['c_location'];
$c_discription=$_POST['c_discription'];
$next_p_name=$_POST['next_p_name'];
  
mysqli_query($bd, "INSERT INTO complain(name, p_name, gender, p_station, witness, evidence, c_timing, c_support, date_of_incident, c_type, c_location, c_discription, next_p_name)VALUES('$name', '$p_name', '$gender', '$p_station', '$witness', '$evidence', '$c_timing', '$c_support', '$date_of_incident', '$c_type', '$c_location', '$c_discription', '$next_p_name')");
 
header("location: cform.php?remarks=success");
 
mysqli_close($con);
?>