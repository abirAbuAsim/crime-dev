<?php
require_once('../connection.php');
include "header.php";

session_start();
if(isset($_SESSION['SESS_FIRST_NAME'])){

      $result=mysqli_query($bd,"SELECT * from complain WHERE p_name like '%".$_SESSION['SESS_FIRST_NAME']."%'");
      echo "<div class='search'>";
    if ($result) {
      $rowCount=mysqli_num_rows($result);
      if($rowCount>0){
        //var_dump($rowCount);
      echo "<table border=2>";
    echo "<tr>";

    echo "<th>"; echo "Victim"; echo "</th>";
    echo "<th>"; echo "Victim Phone"; echo "</th>";
    echo "<th>"; echo "Complain"; echo "</th>";
    echo "<th>"; echo "Location"; echo "</th>";
    echo "<th>"; echo "Police Station"; echo "</th>";
    echo "<th>"; echo "Inspector"; echo "</th>";
    echo "<th>"; echo "Ranking"; echo "</th>";
    /*echo "<th>"; echo "Phone no."; echo "</th>";*/
    echo "<th>"; echo "Time and "; echo "Date"; echo "</th>";
    echo "<th>"; echo "Victim Feedback"; echo "</th>";
    echo "<th>"; echo "Feedback"; echo "</th>";

    echo "</tr>";

    while($row=mysqli_fetch_array($result))
    {
		$name_part=explode(" ",$row["name"]);
	$contact=" ";
	//echo $contact."<br>";
	//echo $name_part[0]." nn ".$name_part[1];
      $v_infos=mysqli_query($bd,"SELECT contact from member WHERE username like '%".$name_part[0]."%'");
      if($v_infos){
		
	while($v_info = mysqli_fetch_array($v_infos)){
	$contact=$v_info["contact"];
	
	  }}
        echo "<tr>";
      echo "<td>"; echo $row["name"]; echo "</td>";
      echo "<td>"; echo $contact; echo "</td>";
      echo "<td>"; echo $row["c_discription"]; echo "</td>";
      echo "<td>"; echo $row["c_location"]; echo "</td>";
      echo "<td>"; echo $row["p_station"]; echo "</td>";
      echo "<td>"; echo $row["p_name"]; echo "</td>";
      $name_part=explode(" ",$row["p_name"]);

      $p_infos=mysqli_query($bd,"SELECT * from policeinfo WHERE username like '%".$name_part[0]."%'");
      
	$p_info = mysqli_fetch_array($p_infos);
      echo "<td>"; echo $p_info["ranking"]; echo "</td>";
      echo "<td>"; echo $row["c_timing"]; echo "<br>".$row["date_of_incident"]; echo "</td>";
mysqli_free_result($p_infos);
      if (is_null($row['status_id'])) {
		  echo "<td>"; echo " didnot give feedback yet"; echo "</td>";
		  ?>
        <td>
        <form action="addFeedback.php" method="POST">
            <input type="hidden" name="complain" value="<?php echo $row['c_id']; ?>">
            <input type="submit" name="save" value="add">
        </form>
      </td>
        <?php
      }else {
			
        $res = mysqli_query($bd,"SELECT description,victim_feedback from status WHERE complain_id ='".$row["c_id"]."' and id='".$row["status_id"]."'");
          if($res){
            $status_details = mysqli_fetch_array($res);

            $status_detail = $status_details['victim_feedback'];
            if(is_null($status_detail)){
				echo "<td>"; echo "didnot give feedback yet"; echo "</td>";
			}
			else{
            echo "<td>"; echo $status_detail; echo "</td>";
			}
		}else
		{
			echo "<td>"; echo "Query failed"; echo "</td>";
		}
		  ?>
        <td>
          <form action="updateFeedback.php" method="POST">
              <input type="hidden" name="complain" value="<?php echo $row['c_id']; ?>">
              <input type="hidden" name="status" value="<?php echo $row['status_id']; ?>">
              <input type="submit" name="edit" value="update">
          </form>
        </td>
        <?php
      }

      echo "</tr>";

    }
    echo "</table>";
    }else {
      echo '<div style="color:red;"> you have no Complain!!</div>';
    }
  }else {
    echo '<div style="color:red;"> you have no Complain!!</div>';
  }
    echo "</div>";
}
else
{
  $_SESSION['ERRMSG_ARR'] = array("Please Login first!!");
  session_write_close();
  header("location: ../phome.php");
  exit();
}
include "footer.php";
?>
