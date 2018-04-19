<?php
include('connection.php');

$query = ("SELECT * FROM v_record ");
$run=mysqli_query($bd,$query);
?>
<!DOCTYPE html>
<head>
<title>Vehicle display</title>
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


</style>
</head>

<body>
<a href="adminhome.php"><button>Back</button></a>

<h1 align=center >Stolen Vehicle</h1><br>

<table  border="1" cellpadding="1" cellspacing="1">

<tr>

<th>Police Station</th>
<th>FIR No</th>
<th>Date</th>
<th>Vehicle</th>
<th>Vehicle Type</th>
<th>Model</th>
<th>Color</th>

</tr>


<?php
while($row= mysqli_fetch_assoc($run)){
	

	echo "<tr><form action=Vupdate.php method=post>";
	
	echo "<td><input type=text name=policestation value='" .$row['policestation']. "'</td>";
    echo "<td><input type=text name=fir value='" .$row['fir']. "'</td>";
    echo "<td><input type=text name=date value='" .$row['date']. "'</td>";
    echo "<td><input type=text name=vehicle value='" .$row['vehicle']. "'</td>";
    echo "<td><input type=text name=vehicletype value='" .$row['vehicletype']. "'</td>";
    echo "<td><input type=text name=model value='" .$row['model']. "'</td>";
    echo "<td><input type=text name=color value='" .$row['color']. "'</td>";
    
     echo  "<td><input type=hidden name=id value='".$row['id']. "'</td>";
	
	
	echo  "<td><input type=submit name=Update value=Update>"; 
	
	echo  "</form>";
	

	  echo "</tr>";
		
}

	?>
</table>

</body>
</html>