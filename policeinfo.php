<?php
include('connection.php');

$sql = "SELECT * FROM policeinfo";
		
$records = mysqli_query($bd, $sql);
?>
<html>
<head>
<title>Police Info</title>
</head>
<style>
body{
	background-image:url('image/wall6.jpg');
background-size:cover;
background-attachment:fixed;
}
table{
	width:100%;
	background:white;
	color:black;
	text-align:center;
}
th{
	background-color:green;
	color:white;
}
h1{
	color:white;
	margin-top:20px;
}
a{
	color:red;
}
</style>
<body>
<a href="adminhome.php"><button>Back</button></a>
  
<h1 align="center">Police's Information</h1>
 
 <table width="600" align="center" border="1" cellpadding="1" cellspacing="1">
 <tr>
 
 <th>Member_ID</th>
 <th>First name</th>
  <th>Last name</th>
 <th>Gender</th>
 <th>Address</th>
 <th>Contact</th>
 <th>NID</th>

  <th>Police Station</th>
 <th>Ranking</th>
 
 <tr>
 <?php
 
 while($user=mysqli_fetch_assoc($records)){
	 
	 echo "<tr>";
	 
	 echo "<td>".$user['mem_id']."</td>";
	 
	 echo "<td>".$user['fname']."</td>";
	 
	 echo "<td>".$user['lname']."</td>";
	 
	 echo "<td>".$user['gender']."</td>";
	 
	 echo "<td>".$user['address']."</td>";
	 
	 echo "<td>".$user['contact']."</td>";
	 
	 echo "<td>".$user['nid']."</td>";
	 
	 
	 echo "<td>".$user['pstation']."</td>";
	 
	 echo "<td>".$user['ranking']."</td>";
	 
	  echo "<td><a href=deletepolice.php?id=".$user['mem_id'].">Delete</a></td>";
	 
	 
	 
	 echo "</tr>";
	  
 }
 ?>
 </table>
 </body>
 </html>
 
 