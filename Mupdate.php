<?php
include('connection.php');
 
	
$query= "Update m_record SET name='$_POST[name]',gender='$_POST[gender]',age='$_POST[age]',height='$_POST[height]',address='$_POST[address]',contact='$_POST[contact]' WHERE id='$_POST[id]'";

 if(mysqli_query($bd,$query))

	 header("refresh:1; url=upmissinginfo.php");	

 else
 
 echo " Not Update";
 

 

?> 

