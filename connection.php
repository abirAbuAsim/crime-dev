<?php
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password ="";
$mysql_database = "crms";
$prefix = "";
$dirName = dirname(__FILE__);
$dirName = str_replace('\\', "/", $dirName);

$base = str_replace($_SERVER['DOCUMENT_ROOT'], "", $dirName);
$bd = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysqli_select_db($bd, $mysql_database) or die("Could not select database");
error_reporting(0);
?>
