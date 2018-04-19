<?php
include('connection.php');

$sql = "SELECT * FROM complain";
		
$records = mysqli_query($bd, $sql);
?>
<html>
<head>
<title>Complain Info</title>
</head>
<style>
body{
background-image:url('image/wall6.jpg');
background-size:cover;
background-attachment:fixed;
color:white;
}
table{
	width:100%;
	background:white;
	color:black;
	text-align:center;
}
th{
	background-color:#a70000;
	color:white;
}
h1{
	color:white;
	margin-top:10px;
}
a{
	color:red;
}
</style>
<body>
<a href="adminhome.php"><button>Back</button></a>
  
<h1 align="center">Complain's Information</h1>
 <table width="600" align="center" border="1" cellpadding="1" cellspacing="1">
 <tr>
 
 <th>Complain_ID</th>
 <th>Complainer's Name</th>
 <th>Gender</th>
 <th>Police Station</th>
 <th>Police Name</th>
 <th>Next Reported Police</th>
 <th>Crime Type</th>
 <th>Crime Discription</th>
 <th>Crime Location</th>
 <th>Crime Timing</th>
 <th>Date_of_Incident</th>
 <th>Crime Support</th>
 <th>Evidence</th>
 <th>Witness</th>
 
 <tr>
  <?php
 
 while($user=mysqli_fetch_assoc($records)){
	 
	 echo "<tr>";
	 
	 echo "<td>".$user['c_id']."</td>";
	 
	 echo "<td>".$user['name']."</td>";
	 
	 echo "<td>".$user['gender']."</td>";
	 
	 echo "<td>".$user['p_station']."</td>";
	 
	 echo "<td>".$user['p_name']."</td>";
	 
	 echo "<td>".$user['next_p_name']."</td>";
	 
	 echo "<td>".$user['c_type']."</td>";
	 
	 echo "<td>".$user['c_discription']."</td>";
	 
	 echo "<td>".$user['c_location']."</td>";
	 
	 echo "<td>".$user['c_timing']."</td>";
	 
	 echo "<td>".$user['date_of_incident']."</td>";
	 
	 echo "<td>".$user['c_support']."</td>";
	 
	 echo "<td>".$user['evidence']."</td>";
	 
	 echo "<td>".$user['witness']."</td>";
	 
	 echo "<td><a href=deletecomplain.php?id=".$user['c_id'].">Delete</a></td>";
	 
	 
	 echo "</tr>";
	  
 }
 ?>
 </table>
 </body>
 </html>
 