<?php
session_start();
 
include('connection.php');
 
$news=$_POST['news'];

mysqli_query($bd, "INSERT INTO news(news)VALUES('$news')");
 
header("location: news.php?remarks=success");
 
mysqli_close($con);
?>