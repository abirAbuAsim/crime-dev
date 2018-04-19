<?php
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Complain search display</title>
  </head>
  <style>
  body{
	  background-image:url('image/crimeback.jpg');
    
	  color:white;
  }
  #form{
	  margin:90px 50px 20px 60px;
	  border:5px solid black;
	  height:500px;
	  background:gray;
  }
  </style>
 <body>
 <div id="form">
<form name="reg" action="" method="post">
  <table width="274" border="0" align="center" cellpadding="2" cellspacing="0">
    <tr>
      <td colspan="2">
        <div align="center">
          
        </div></td>
      </tr>
      <tr>
        <td width="95"><div align="right">Name:</div></td>
        <td width="171"><input type="text" name="name" value="Enter Your Name" /></td>
      </tr>
     
      <tr>
        <td><div colspan="2" align="right"></div></td>
		
        
		<td><input name="submit2" type="submit" value="delete"></td>
		
		<td><input name="submit3" type="submit" value="update"></td>
		
		<td><input name="submit4" type="submit" value="display"></td>
		
		<td><input name="submit5" type="submit" value="search"></td>
		
		</td>
	
      </tr>
    </table>
  </form>
  

<?php
  if(isset($_POST["submit2"]))
  {
	  mysqli_query($bd,"DELETE from complain WHERE name='$_POST[name]'");
	  
  }
  if(isset($_POST["submit4"]))
  {
      $res=mysqli_query($bd,"SELECT * from complain");
      echo "<table border=1>";
	  echo "<tr>";
	  
	  echo "<th>"; echo "name"; echo "</th>";
	  echo "<th>"; echo "gender"; echo "</th>";
	  echo "<th>"; echo "p_station"; echo "</th>";
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
		  echo "<td>"; echo $row["p_station"]; echo "</td>";
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
    if(isset($_POST["submit5"]))
  {
      $res=mysqli_query($bd,"SELECT * from complain WHERE name='$_POST[name]'");
      echo "<table border=1>";
	  echo "<tr>";
	  
	  echo "<th>"; echo "name"; echo "</th>";
	  echo "<th>"; echo "gender"; echo "</th>";
	  echo "<th>"; echo "p_station"; echo "</th>";
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
		  echo "<td>"; echo $row["p_station"]; echo "</td>";
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
  
  
  ?>
  
  
 </div> 
</body>
</html>


  
  
  
  
  
  
  
  