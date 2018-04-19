<?php

require_once('connection.php');

	if(isset($_POST["Go"]))
  {
	$res=mysqli_query($bd,"SELECT * from policeinfo WHERE pstation='$_POST[pstation]'");
      echo "<table align=center border=1>";
	  echo "<tr>";
	  
	  echo "<th>"; echo "name"; echo "</th>";
	  echo "<th>"; echo "contact"; echo "</th>";
	  echo "<th>"; echo "address"; echo "</th>";
	  echo "<th>"; echo "ranking"; echo "</th>";
	  echo "<th>"; echo "gender"; echo "</th>";
	  
	  echo "</tr>";
	  
	 while($row=mysqli_fetch_array($res))
	  {
		  echo "<tr>";
		  
		  echo "<td>"; echo $row["username"]; echo "</td>";
		  echo "<td>"; echo $row["contact"]; echo "</td>";
		  echo "<td>"; echo $row["address"]; echo "</td>";
		  echo "<td>"; echo $row["ranking"]; echo "</td>";
		  echo "<td>"; echo $row["gender"]; echo "</td>";
		  
	      echo "</tr>";
		  
	  }
	 
	  echo "</table>";
	
  }	 
 ?>