<?php
include('connection.php');
include('police/header.php');

?>
<html>
<head>
<title>Station_Complain Search</title>
</head>
<style>
body{
	background-image:url('image/crimeback.jpg');
}
table{
	background:#ffffff;
	margin-top:50px;
	color:#000033;
	width:100%;
	
    align:center;
}


</style>
<body>

<?php
	if(isset($_POST["Go"]))
  {
	$res=mysqli_query($bd,"SELECT * from complain WHERE p_station='$_POST[p_station]'");
	$rowCount=mysqli_num_rows($res);
      if($rowCount>0){
     
      echo "<table align=center border=1>";
	  echo "<tr>";
	  echo "<th>"; echo "name"; echo "</th>";
	  echo "<th>"; echo "gender"; echo "</th>";
	  echo "<th>"; echo "p_name"; echo "</th>";
	  echo "<th>"; echo "c_type"; echo "</th>";
	  echo "<th>"; echo "c_discription"; echo "</th>";
	  echo "<th>"; echo "c_location"; echo "</th>";
	  echo "<th>"; echo "c_timing"; echo "</th>";
	  echo "<th>"; echo "c_support"; echo "</th>";
	  echo "<th>"; echo "date_of_incident"; echo "</th>";
	  echo "<th>"; echo "evidence"; echo "</th>";
	  echo "<th>"; echo "witness"; echo "</th>";
	  
	  echo "</tr>";
	  
	while($row=mysqli_fetch_array($res))
	  {
		  echo "<tr>";
		  
		  echo "<td>"; echo $row["name"]; echo "</td>";
		  echo "<td>"; echo $row["gender"]; echo "</td>";
		  echo "<td>"; echo $row["p_name"]; echo "</td>";
		  echo "<td>"; echo $row["c_type"]; echo "</td>";
		  echo "<td>"; echo $row["c_discription"]; echo "</td>";
		  echo "<td>"; echo $row["c_location"]; echo "</td>";
		  echo "<td>"; echo $row["c_timing"]; echo "</td>";
		  echo "<td>"; echo $row["c_support"]; echo "</td>";
		  echo "<td>"; echo $row["date_of_incident"]; echo "</td>";
		  echo "<td>"; echo $row["evidence"]; echo "</td>";
		  echo "<td>"; echo $row["witness"]; echo "</td>";
		   echo "</tr>";
		  
	  }
	  echo "</table>";
	
  }	 
  else {?>

	<div style="color: red; margin-left: 450px; margin-top: 100px; font">  <h1> No Result Found</h1></div>
	<?php }
  }
?>

</body>
</html>