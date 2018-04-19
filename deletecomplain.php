<?php
include('connection.php');

$sql = "DELETE FROM complain WHERE c_id='$_GET[id]'";
if(mysqli_query($bd, $sql))	
header("refresh:1; url=complaininfo.php");	
else
echo "Not Deleted";
?>