<?php
include('connection.php');

$sql = "DELETE FROM policeinfo WHERE mem_id='$_GET[id]'";
if(mysqli_query($bd, $sql))	
header("refresh:1; url=policeinfo.php");	
else
echo "Not Deleted";
?>