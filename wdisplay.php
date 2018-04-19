<?php
include('connection.php');
$query = ("SELECT * FROM w_record ");
$run=mysqli_query($bd,$query);

?>
<!DOCTYPE html>
<head>
<title>Most Wanted</title>
<style>
body{
	background:#eee;
}
table tr,th,td{

width:400px;

background: #000033;
border:1px solid #eee;
border-collapse:collapse;
font-size:18px;
text-align:center;
color:white;
}
h2{
	color:red;
	
}	
</style>
</head>

<body>
	<?php include('phead.php');?>
<table align="center"  border="1" cellpadding="1" cellspacing="1"/>
<h2 align="center">Most Wanted!!!</h2><br>
	
<tr>
<th> Name </th>
<th> Address </th>
<th> Photo </th>

</tr>

<?php

 while($row= mysqli_fetch_assoc($run)){
	
	echo "<tr>";
	  echo "<td>"  .$row['name'].  "</td> ";
	
     
	 echo "<td>"  .$row['text'].  "</td> ";
	 
	 echo "<td>";?><img src="image/<?php echo $row['image'];?>" height="100" width="100"> <?php echo  "</td>";
	 echo "</tr>";
		
}
	echo '<td colspan="5"><button id="btn" name="' .$row['id']. '">Load More</button></td>';
	?>
</table>

</body>
</html>
