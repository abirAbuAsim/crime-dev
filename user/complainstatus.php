<?php
require_once('../connection.php');
include "header.php";
session_start();
if(isset($_SESSION['SESS_FIRST_NAME'])){

      $res=mysqli_query($bd,"SELECT * from complain WHERE name like '%".$_SESSION['SESS_FIRST_NAME']."%'");
      echo "<div class='search'>";
    if ($res) {
      $rowCount=mysqli_num_rows($res);
	  //echo $rowCount;
      if($rowCount>0){
        //var_dump($row);


      echo "<table border=2>";
    echo "<tr>";

    echo "<th>"; echo "Complain"; echo "</th>";
    echo "<th>"; echo "Location"; echo "</th>";
    echo "<th>"; echo "Police Station"; echo "</th>";
    echo "<th>"; echo "Inspector"; echo "</th>";
    echo "<th>"; echo "Ranking"; echo "</th>";
    echo "<th>"; echo "Police contact no."; echo "</th>";
    echo "<th>"; echo "Time and "; echo "Date"; echo "</th>";
    echo "<th>"; echo "Status"; echo "</th>";
    echo "<th>"; echo "Feedback"; echo "</th>";

    echo "</tr>";

    while($row=mysqli_fetch_array($res))
    {
        echo "<tr>";
      echo "<td>"; echo $row["c_discription"]; echo "</td>";
      echo "<td>"; echo $row["c_location"]; echo "</td>";
      echo "<td>"; echo $row["p_station"]; echo "</td>";

      $name_part=explode(" ",$row["p_name"]);

      $p_infos=mysqli_query($bd,"SELECT * from policeinfo WHERE username like '%".$name_part[0]."%'");
      
	$p_info = mysqli_fetch_array($p_infos);
	
	
	

      echo "<td>"; echo $row["p_name"]; echo "</td>";
      echo "<td>"; echo $p_info["ranking"]; echo "</td>";
      echo "<td>"; echo $p_info["contact"];  echo "</td>";
      echo "<td>"; echo $row["c_timing"]; echo "<br>".$row["date_of_incident"]; echo "</td>";

      if (is_null($row['status_id'])) {
        echo "<td>"; echo "Not reviewed yet"; echo "</td>";
        ?>        
        <td>
        <form action="<?php echo $base;?>/user/addFeedback.php" method="POST">
            <input type="hidden" name="complain" value="<?php echo $row['c_id']; ?>">
            <input type="submit" name="save" value="add">
        </form>
      </td>      
        <?php
      }else {
        $result = mysqli_query($bd,"SELECT description,victim_feedback from status WHERE complain_id ='".$row["c_id"]."' and id='".$row["status_id"]."'");
          if($result){
            $status_details = mysqli_fetch_array($result);

            $status_detail = $status_details['description'];
            if(is_null($status_detail)){
				echo "<td>"; echo "Not reviewed yet"; echo "</td>";
			}
			else{
            echo "<td>"; echo $status_detail; echo "</td>";
			}
            
      ?>
        <td>
          <form action="<?php echo $base;?>/user/updateFeedback.php" method="POST">
              <input type="hidden" name="complain" value="<?php echo $row['c_id']; ?>">
              <input type="hidden" name="status" value="<?php echo $row['status_id']; ?>">
              <input type="submit" name="edit" value="update">
          </form>
        </td>
        <?php
      
          }else{
            echo "<td>"; echo "query failed!!"; echo "</td>";
          }
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
  header("location: ".$base."/uhome.php");
  exit();
}
include "footer.php";
?>
