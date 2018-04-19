<?php
include('connection.php');

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Search Criminal</title>
</head>
<style>
body{
background-image:url('image/srchcriminal.jpg');	
margin:0;
padding:0;

background-size:cover;
font-family:sans-serif;
}

.search{
	margin:150px 700px 0px 300px;
	background:#000033;
	width:270px;
	heigth:50px; 
	padding:25px 500px 25px 20px;
	opacity:.8;

}
#text{
	width:200px;
	height:20px;
	color:gray;
	border:2px solid gray;
}
#submit{
	border:none;
	width:50px;
	height:24px;
	background:#B9B9B9;
	cursor:pointer;
}
#submit:hover{
	background:#9d226d;
	color:#ffffff;
}
table{
	color:white;
	width:100%;
	
}

</style>
<body>
	<?php include('phead.php');?>
<div class="search">
<form name="reg" action="" method="post">
<table width="274" border="0" align="center" cellpadding="2" cellspacing="0">
    <tr>
      <td colspan="2">
        <div align="center">
          </div></td>
      </tr>



<tr>
<td><div align="right" C_Name:</div></td>
<td><input type="text" name="c_name" id="text" placeholder="Enter Criminal Name"></td>
</tr>
<tr>
<td><div colspan="2" align="right"></div></td>
		
<td><input type="submit" value="Go" name="Go" id="submit"></td>
</tr>
</table>
</form>
<?php
	if(isset($_POST["Go"]))
  {
	$res=mysqli_query($bd,"SELECT * from criminals WHERE c_name='$_POST[c_name]'");
	$rowCount=mysqli_num_rows($res);
      if($rowCount>0){
     
      echo "<table align=center border=1>";
	  echo "<tr>";
	  
	  echo "<th>"; echo "C_Name"; echo "</th>";
	  echo "<th>"; echo "C_Type"; echo "</th>";
	  echo "<th>"; echo "C_Equipment"; echo "</th>";
	  echo "<th>"; echo "C_Target"; echo "</th>";
	  echo "<th>"; echo "Area"; echo "</th>";
	  echo "<th>"; echo "gender"; echo "</th>";
	  echo "<th>"; echo "Age"; echo "</th>";
	  echo "<th>"; echo "Wanted"; echo "</th>";
	  echo "<th>"; echo "Picture"; echo "</th>";
	  
	  echo "</tr>";
	  
	 while($row=mysqli_fetch_array($res))
	  {
		  echo "<tr>";
		  
		  echo "<td>"; echo $row["c_name"]; echo "</td>";
		  echo "<td>"; echo $row["c_type"]; echo "</td>";
		  echo "<td>"; echo $row["c_equipment"]; echo "</td>";
		  echo "<td>"; echo $row["c_target"]; echo "</td>";
		  echo "<td>"; echo $row["c_area"]; echo "</td>";
		  echo "<td>"; echo $row["gender"]; echo "</td>";
		  echo "<td>"; echo $row["Age"]; echo "</td>";
		  echo "<td>"; echo $row["wanted"]; echo "</td>";
		  echo "<td>";?> <img src="./image/<?php echo $row["picture"];?>" height="100" width="100"> <?php echo "</td>";
		  
	      echo "</tr>";
		  
	  }
	 echo "</table>";
	
  }	
  else {?>

	<div style="color: red; margin-left: 400px; margin-top: 50px; font">  <h2> No Result Found</h2></div>
	<?php }
  }
  
?>

</div>
</body>
</html>
