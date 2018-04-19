<?php
include('connection.php');

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Crime report</title>
</head>
<style>
body{
margin:0;
padding:0;
background:white;
background-size:cover;
font-family:sans-serif;
}
.logo{
margin-top:200px;
padding-left:50px;
	weidth:40px;
	height:30px;
	position:absolute;
}
.nav{
width:100%;
background:#000033;
height:65px;
margin-top:55px;
opacity:0.8;
}
ul{
list-style:none;
padding:0;
margin:0;
position:absolute;
}
li{
float:left;
margin-top:10px;
}
a{
width:150px;
color:white;
display:block;
text-decoration:none;
font-size:15px;
text-align:center;
padding:10px;
border-radius:10px;
font-family:Century Gothic;
font-weight:bold;

}
a:hover{
background:#669900;
transition:0.6s;
}
ul li ul{
background:#000033;
}
ul li ul li{
float:none;
}
ul li ul{
display:none;
}
ul li:hover ul{
display:block;
}
.search{
	margin:150px 700px 0px 300px;
	background:#000033;
	width:390px;
	heigth:50px;
	padding:25px 500px 20px 40px;
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
    font-size:12px;

}
.search-form{
	margin-top:15px;
	float:right;
	margin-right:100px;
	
	
}
input[type=text]{
	padding:7px;
	border:none;
	font-size:12px;

}

#search{
	float:right;
	background:orange;
	color:white;
	border-radius:0 5px 5px 0;
	cursor:pointer;
	position:relative;
	padding:7px;
	border:none;
	font-size:12px;
}
h5{
	color:white;
}
</style>
<body>
<div class="logo">
<img src="image/police_logo.jpg" class="right">
</div>
<div class="nav">
<ul>
<li> <a href="phome.php">Home</a></li>
<li> <a href="#">View Record</a>
<ul>
<li> <a href="cinfo.php">Criminal Record</a></li>
<li> <a href="wdisplay.php">Most Wanted Record</a></li>
<li> <a href="search_criminal.php">Search Criminal</a></li>
</ul>
</li>
<li> <a href="missingdisplay.php">Missing Person</a></li>
<li> <a href="police/complainstatus.php">Complain Status</a></li>
<li> <a href="logout.php">Logout</a></li>
</ul>
<form class="search-form" method="post" action="station_file.php">
<input type="text" name="p_station" placeholder="Station..."></td>
<input type="submit" value="Search" name="Go" id="search"></td>
</form>
</div>

<?php
session_start();
 if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
echo '<div class="search" style="padding:5px;color:red;">';
 echo '<ul class="err">';
 foreach($_SESSION['ERRMSG_ARR'] as $msg) {
	 echo '<li>',$msg,'</li>';
	 }
 echo '</ul>';
 echo '</div>';
 unset($_SESSION['ERRMSG_ARR']);
 }
?>

<div class="search">
<form name="reg" action="" method="post">
<h5>search your complain?</h5>
<table width="274" border="0" align="center" cellpadding="2" cellspacing="0">
    <tr>
      <td colspan="2">
        <div align="center">
          </div></td>
      </tr>



<tr>
<td><div align="right" P_Name:</div></td>
<td><input type="text" name="p_name" placeholder="Enter Username" id="text"></td>
</tr>
<tr>
<td><div colspan="2" align="right"></div></td>

<td><input type="submit" value="Go" name="Go" id="submit"></td>
</tr>
</table><br>
</form>
<?php
	if(isset($_POST["Go"]))
  {
	$res=mysqli_query($bd,"SELECT * from complain WHERE p_name='$_POST[p_name]'");
	$rowCount=mysqli_num_rows($res);
      if($rowCount>0){
    
      echo "<table align=center border=1>";
	  echo "<tr>";
	  echo "<th>"; echo "name"; echo "</th>";
	  echo "<th>"; echo "gender"; echo "</th>";
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

	<div style="color: red; margin-left: 300px; margin-top: 25px; font">  <h5> No Complain!</h5></div>
	<?php }
  }
 
?>

</div>
</body>
</html>
