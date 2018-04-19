<?php
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Criminal's Record</title>
</head>
 <style>
body{
	background:white;
	color:white;
	padding-top:50px;
	
}
#form{
	background:#003366;
	margin:30px 400px 0px 400px;
	height:480px;
	
}
#record{
	background-color:#CCFFCC;
	color:black;
}
a{
	margin-left:14;
	color:white;
	
}
#submit{
	background:green;
	color:white;
}
button{
	background-color:white;
	color:black;
	margin-left:300px;
	
}
</style>
<script type="text/javascript">
  function validateForm()
  {
    var a=document.forms["reg"]["c_name"].value;
    var b=document.forms["reg"]["c_type"].value;
    var c=document.forms["reg"]["gender"].value;
    var d=document.forms["reg"]["Age"].value;
    var e=document.forms["reg"]["c_equipment"].value;
    var f=document.forms["reg"]["c_target"].value;
    var g=document.forms["reg"]["c_area"].value;
	var h=document.forms["reg"]["picture"].value;
	var i=document.forms["reg"]["wanted"].value;
    if ((a==null || a=="") && (b==null || b=="") && (c==null || c=="") && (d==null || d=="") && (e==null || e=="")  && (f==null || f=="")  && (g==null || g=="") && (h==null || h=="")  && (i==null || i=="") )
    {
      alert("All Field must be filled out");
      return false;
    }
    if (a==null || a=="")
    {
      alert("name must be filled out");
      return false;
    }
    if (b==null || b=="")
    {
      alert("c_type must be filled out");
      return false;
    }
    if (c==null || c=="")
    {
      alert("Gender name must be filled out");
      return false;
    }
	if (d==null || d=="")
    {
      alert("Age must be filled out");
      return false;
    }
    if (e==null || e=="")
    {
      alert("c_equipment must be filled out");
      return false;
    }
    if (f==null || f=="")
    {
      alert("c_target must be filled out");
      return false;
    }
    if (g==null || g=="")
    {
      alert("c_area must be filled out");
      return false;
    }
	if (h==null || h=="")
    {
      alert("picture must be filled out");
      return false;
    }
	if (i==null || i=="")
    {
      alert("wanted must be filled out");
      return false;
    }
	
	}
</script>

<body>
 <div id="form">
	
<form name="reg" action="rcode_exec.php" onsubmit="return validateForm()" method="post">
  <table width="274" border="0" align="center" cellpadding="2" cellspacing="0">
    <tr>
      <td colspan="2">
        <div align="center" id="record">
           <?php 
          // $remarks=$_GET['remarks'];
          if (!isset($_GET['remarks']))
          {
            echo 'Record Here';
          }
          if (isset($_GET['remarks']) && $_GET['remarks']=='success')
          {
            echo 'Recorded Successfully';
          }
          ?>  
        </div><br></td>
      </tr>
      <tr>
        <td width="95"><div align="right">Criminal Name:</div><br></td>
        <td width="171"><input type="text" name="c_name" /></td>
      </tr>
      <tr>
        <td><div align="right">Crime_Type:</div><br></td>
        <td><input type="text" name="c_type" /></td>
      </tr>
      <tr>
        <td><div align="right">Gender:</div><br></td>
		<td>
		<input type="radio" value="male" name="gender">Male
	    <input type="radio" value="female" name="gender">Female</td>
      </tr>
      <tr>
        <td><div align="right">Age:</div><br></td>
        <td><input type="text" name="Age" /></td>
      </tr>
      <tr>
        <td><div align="right">Crime_equipment:</div><br></td>
        <td><input type="text" name="c_equipment" /></td>
      </tr>
      <tr>
        <td><div align="right">C_Target:</div><br></td>
        <td><input type="text" name="c_target" /></td>
      </tr>
	  <tr>
        <td><div align="right">C_Area:</div><br></td>
        <td><input type="text" name="c_area" /></td>
      </tr>
	  
      <tr>
        <td><div align="right">Picture:</div><br></td>
        <td><input type="file" name="picture" /></td>
      </tr>
	  <tr>
        <td><div align="right">Wanted?</div><br></td>
        <td><input type="text" name="wanted" /></td>
      </tr>
      <tr>
        <td><div colspan="2" align="right"></div></td>
        <td><input name="submit" type="submit" value="Submit" id="submit"/></td>
      </tr>
    </table>
  </form>
  <a href="adminhome.php"><button>Back</button>
  
 </div>	
</body>
</html>
