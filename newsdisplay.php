<?php
include('header.php');

$query = ("SELECT * FROM news ");
$run=mysqli_query($bd,$query);
?>
<!DOCTYPE html>
<head>
<title>News</title>
<style>
body{
	background-image:url('image/news4.jpg');
    }
table{
	margin:125px 0px 10px 200px;
	height:100px;
}
table tr,th,td{
width:758px;
padding:15px;
background: #ffffff;
border:1px solid #eee;
border-collapse:collapse;
font-size:18px;
color:black;
text-align:center;
}
</style>
</head>
<body>
<table  border="1" cellpadding="1" cellspacing="1">

<tr>
<th>News</th>
</tr>

<?php
while($row= mysqli_fetch_assoc($run)){

	echo "<tr>";

     echo "<td>" .$row['news']. "</td>";
    echo "</tr>";

}
	?>
</table>
<?php include('footer.php') ?>
