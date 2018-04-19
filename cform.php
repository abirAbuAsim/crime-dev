<?php
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Complain</title>
  </head>
  <style>
body{
	background-image:url('image/wall6.jpg');
	background-size:cover;
	color:white;
	padding-top:50px;
	
}
#form{
	background:#6699CC;
	margin:50px 400px 0px 400px;
	height:420px
}
#submit{
	background:green;
	color:white;
}
</style>
<script type="text/javascript">
  function validateForm()
  {
    var a=document.forms["reg"]["name"].value;
    var b=document.forms["reg"]["p_name"].value;
    var c=document.forms["reg"]["gender"].value;
    var d=document.forms["reg"]["p_station"].value;
    var e=document.forms["reg"]["witness"].value;
    var f=document.forms["reg"]["evidence"].value;
    var g=document.forms["reg"]["c_timing"].value;
	var h=document.forms["reg"]["c_support"].value;
	var i=document.forms["reg"]["date_of_incident"].value;
	var j=document.forms["reg"]["c_type"].value;
	var k=document.forms["reg"]["c_location"].value;
	var l=document.forms["reg"]["c_discription"].value;
	var m=document.forms["reg"]["next_p_name"].value;
	
    if ((a==null || a=="") && (b==null || b=="") && (c==null || c=="") && (d==null || d=="") && (e==null || e=="") && (f==null || f=="")  && (g==null || g=="") && (h==null || h=="") && (i==null || i=="")  && (j==null || j=="") && (k==null || k=="")  && (l==null || l=="") && (m==null || m=="") )
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
      alert("p_name must be filled out");
      return false;
    }
    if (c==null || c=="")
    {
      alert("gender name must be filled out");
      return false;
    }
    if (d==null || d=="")
    {
      alert("p_station must be filled out");
      return false;
    }
    if (e==null || e=="")
    {
      alert("witness must be filled out");
      return false;
    }
    if (f==null || f=="")
    {
      alert("evidence must be filled out");
      return false;
    }
	
	 if (g==null || g=="")
    {
      alert("c_timing must be filled out");
      return false;
    }
		 if (h==null || h=="")
    {
      alert("c_support must be filled out");
      return false;
    }
	
		 if (i==null || i=="")
    {
      alert("date_of_incident must be filled out");
      return false;
    }
		 if (j==null || j=="")
    {
      alert("c_type must be filled out");
      return false;
    }
		 if (k==null || k=="")
    {
      alert("c_location must be filled out");
      return false;
    }
	
		 if (l==null || l=="")
    {
      alert("c_discription must be filled out");
      return false;
    }
	if (m==null || m=="")
    {
      alert("next_p_name must be filled out");
      return false;
    }
  }
</script>
	
 <div id="form">
	
<body>
 
<form name="reg" action="cform_exec.php" onsubmit="return validateForm()" method="post">
  <table width="274" border="0" align="center" cellpadding="2" cellspacing="0">
    <tr>
      <td colspan="2">
        <div align="center">
        <?php 
          // $remarks=$_GET['remarks'];
          if (!isset($_GET['remarks']))
          {
            echo 'Complain Here';
          }
          if (isset($_GET['remarks']) && $_GET['remarks']=='success')
          {
            echo 'Complained Successfully';
          }
          ?>    
        </div><br></td>
      </tr>
      <tr>
        <td width="95"><div align="right">Name:</div></td>
        <td width="171"><input type="text" name="name" /></td>
      </tr>
      <tr>
        <td><div align="right">Gender:</div></td>
	  <td>
		<input type="radio" value="male" name="gender">Male
	    <input type="radio" value="female" name="gender">Female</td>
      </tr>
      <tr>
        <td><div align="right">P_Station:</div></td>
        <td>
		<select name="p_station">
		<option> potiya thana </option>
		<option> boalkhali thana </option>
		<option> chandonayes thana </option>
		<option> banshkhali thana </option>
		<option> lohagara thana </option>
		<option> vujpur thana </option>
		<option> potiya thana </option>
		<option> anowara thana </option>
		<option> bayzid bostami thana </option> 
		<option> bondor thana </option>
		<option> chandgao thana </option>
		<option> double mourring thana </option>
		<option> kotoali thana </option>
		<option> kornafuli thana </option>
		<option> panchlaish Model thana </option>
		<option> hathazari thana </option>
		<option> fatickchari thana </option>
		
		</td></select>
	
      </tr>
	   <tr>
        <td><div align="right">P_Name:</div></td>
        <td><input type="text" name="p_name" /></td>
      </tr>
	  <tr>
        <td><div align="right">Next_Reported_Police:</div></td>
        <td><input type="text" name="next_p_name" /></td>
      </tr>
	  <tr>
        <td><div align="right">C_Type:</div></td>
        <td><input type="text" name="c_type" /></td>
      </tr>
      <tr>
        <td><div align="right">C_Discription:</div></td>
        <td><input type="text" name="c_discription"/></td>
      </tr>
      <tr>
        <td><div align="right">C_Timing:</div></td>
        <td><input type="time" name="c_timing" /></td>
      </tr>
	  
	  <tr>
        <td><div align="right">C_Location:</div></td>
        <td><input type="text" name="c_location" /></td>
      </tr>
	  <tr>
        <td><div align="right">C_Support:</div></td>
		<td>
		<input type="radio" value="male" name="c_support">Male
	    <input type="radio" value="female" name="c_support">Female</td>
        </tr>
	  <tr>
        <td><div align="right">Date_of_Incident:</div></td>
        <td><input type="date" name="date_of_incident" /></td>
      </tr>
	  <tr>
        <td><div align="right">Witness:</div></td>
        <td><input type="text" name="witness" /></td>
      </tr>
	  <tr>
        <td><div align="right">Evidence:</div></td>
        <td><input type="text" name="evidence" /></td>
      </tr>
      <tr>
        <td><div colspan="2" align="right"></div></td>
		
        <td><input name="submit" type="submit" value="submit" id="submit"></td>
		
		</td>
	
      </tr>
    </table>
  </form>
  <a href="uhome.php">
		<button>Back to top</button>
		
  </div>
</body>
</html>

