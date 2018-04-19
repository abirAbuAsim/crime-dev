<?php
include('connection.php');

$query = ("SELECT * FROM m_record ");
$run=mysqli_query($bd,$query);
?>
<head>
<title>person display</title>
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
}	
</style>
</head>
<body>
<?php include('phead.php');?>
<table  border="1" cellpadding="1" cellspacing="1">
<h2 align=center >MISSING RECORD</h2><br>

<tr>

<th>Name</th>
<th>Gender</th>
<th>Age</th>
<th>Height</th>
<th>Address</th>
<th>P_Photo</th>
<th>Contact</th>
</tr>


<?php
while($row= mysqli_fetch_assoc($run)){
	
	echo "<tr>";
	 
     echo "<td>" .$row['name']. "</td>";
   
     echo "<td>" .$row['gender']. "</td>";
   
	 echo "<td>" .$row['age']. "</td>";
	
	 echo "<td>" .$row['height'].  "</td> ";
	
	 echo "<td>" .$row['address']. "</td>";
	  
	 echo "<td>";?><img src="image/<?php echo $row['photo'];?>" height="80" width="80"> <?php echo  "</td>";
	
	 echo  "<td>".$row['contact']. "</td>";
	
	 echo "</tr>";
		
}
	?>
</table>

</body>
</html>
