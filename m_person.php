<?php
session_start();
include('connection.php');


$name = $_POST['name'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$height = $_POST['height'];
$address = $_POST['address'];
$p_photo = $_POST['photo'];
$contact = $_POST['contact'];

mysqli_query($bd,"INSERT INTO  m_record(name,gender,age,height,address,photo,contact) VALUES('$name','$gender','$age','$height','$address','$p_photo','$contact')");

header("location: missing_person.php?remarks=success");
 
mysqli_close($con);


?>
