<?php
include('connection.php');
include('police/header.php');

$sql = "SELECT * FROM criminals";

$records = mysqli_query($bd, $sql);
?>
<html>
<head>
 <title>Criminal Info</title>
</head>
<style>
body{
	background:white;
	
}
table{
	width:100%;
	background:#000033;
	color:white;
	text-align:center;
}
h2{
	color:red;
	margin-top:50px;
}
</style>
<body>
<h2 align="center">Criminal's Information</h2>
 <table width="600" align="center" border="1" cellpadding="1" cellspacing="1">
 <tr>

 <th>C_ID</th>
 <th>Criminal Name</th>
 <th>Gender</th>
 <th>Age</th>
 <th>C_Type</th>
 <th>C_Target</th>
 <th>C_Equipment</th>
 <th>C_Area</th>
 <th>Wanted?</th>
 <th>Picture</th>

 <tr>

 <?php

 while($user=mysqli_fetch_assoc($records)){

	 echo "<tr>";

	 echo "<td>".$user['c_id']."</td>";

	 echo "<td>".$user['c_name']."</td>";

	 echo "<td>".$user['gender']."</td>";

	 echo "<td>".$user['Age']."</td>";

	 echo "<td>".$user['c_type']."</td>";

	 echo "<td>".$user['c_target']."</td>";

	 echo "<td>".$user['c_equipment']."</td>";

	 echo "<td>".$user['c_area']."</td>";

	 echo "<td>".$user['wanted']."</td>";

	 echo "<td>";?> <img src="image/<?php echo $user['picture'];?>" height="100" width="100"> <?php echo "</td>";


	 echo "</tr>";

 }
 ?>
 </table>
 </body>
 </html>
