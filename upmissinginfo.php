<?php
include('connection.php');
 
if(isset($_GET["delete"])){
	$run=mysqli_query($con,"delete from m_record where id='".$_GET["delete"]."'");
	if($run){
		@unlink("images/".$_GET["image"]);
	}
	}

?>
<!DOCTYPE html>
<head>
<title>person display</title>
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


</style>
</head>

<body>
<a href="adminhome.php"><button>Back</button></a>

<h1 align=center >Missing info</h1>

<table align="center" width="600" border="1" cellpadding="1" cellspacing="1">

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
$query = ("SELECT * FROM m_record ");
$run=mysqli_query($bd,$query);

while($row= mysqli_fetch_assoc($run)){
	
	echo "<tr><form action=Mupdate.php method=post>";
	 
     echo "<td><input type=text name=name value='" .$row['name']. "'</td>";
   
     echo "<td><input type=text name=gender value='" .$row['gender']. "'</td>";
   
	 echo "<td><input type=text name=age value='" .$row['age']. "'</td>";
	
	 echo "<td><input type=text name=height value='" .$row['height'].  "'</td> ";
	
	 echo "<td><input type=text name=address value='" .$row['address']. "'</td>";
	echo "<td>";?><img src="image/<?php echo $row['photo'];?>" height="100" width="100"> <?php echo  "</td>";
	 	
	 echo  "<td><input type=text name=contact value='".$row['contact']. "'</td>";
	
	 echo  "<td><input type=hidden name=id value='".$row['id']. "'</td>";
	
	echo  "<td><input type=submit name=Update value=Update>"; 
	
	echo  "</form>";
	
	echo '<td><a href="?delete=' .$row['id']. '&image='.$row['photo'].'"> Delete</td>';	
	
	
	 echo "</tr>"; 
		
}
	?>
</table>

</body>
</html>