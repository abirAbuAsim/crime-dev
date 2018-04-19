<?php
include "connection.php";

$query ="SELECT * FROM policeinfo";

            $run=mysqli_query($bd,$query);
            while($row = mysqli_fetch_array($run,MYSQLI_ASSOC)){
	
            echo "<br/><br/>FName:".$row['fname'];
            echo"<br/><br/>LName:".$row['lname'];
            echo"<br/><br/>Gender:".$row['gender'];
            echo"<br/><br/>Adress:".$row['address'];
            echo"<br/><br/>P_Station:".$row['pstation'];
            echo"<br/><br/>Ranking:".$row['ranking'];
            echo"<br/><br/>Contact:".$row['contact'];		 
}
?>