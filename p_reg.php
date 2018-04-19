<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Registration</title>
</head>
<style>
body{
background-image:url('image/wall5.jpg');
	
color:black;
}
#reg{
	
	background:#CD5C5C;
	color:white;
}
#form{
	background:white;
	margin:30px 400px 0px 400px;
	height:510px;
}
#submit{
	background:green;
	color:white;
}
button{
	background-color:blue;
	color:white;
	margin-left:350px;
	margin-top:0px;
	
}
</style>
<script type="text/javascript">
  function validateForm()
  {
    var a=document.forms["reg"]["fname"].value;
    var b=document.forms["reg"]["lname"].value;
    var c=document.forms["reg"]["gender"].value;
    var d=document.forms["reg"]["address"].value;
    var e=document.forms["reg"]["contact"].value;
	var f=document.forms["reg"]["nid"].value;
    var g=document.forms["reg"]["pstation"].value;
    var h=document.forms["reg"]["ranking"].value;
	var i=document.forms["reg"]["username"].value;
	var j=document.forms["reg"]["password"].value;
    if ((a==null || a=="") && (b==null || b=="") && (c==null || c=="") && (d==null || d=="") && (e==null || e=="") && (f==null || f=="") && (g==null || g=="") && (h==null || h=="") && (i==null || i=="") && (j==null || j=="")  )
    {
      alert("All Field must be filled out");
      return false;
    }
    if (a==null || a=="")
    {
      alert("First name must be filled out");
      return false;
    }
	if (b==null || b=="")
    {
      alert("Last name must be filled out");
      return false;
    }
    if (c==null || c=="")
    {
      alert("Gender name must be filled out");
      return false;
    }
    if (d==null || d=="")
    {
      alert("Address must be filled out");
      return false;
    }
    if (e==null || e=="")
    {
      alert("Contact must be filled out");
      return false;
    }
    if (f==null || f=="")
    {
      alert("nid must be filled out");
      return false;
    }
	if (g==null || g=="")
    {
      alert("pstation must be filled out");
      return false;
    }
	if (h==null || h=="")
    {
      alert("ranking must be filled out");
      return false;
    }
	if (i==null || i=="")
    {
      alert("username must be filled out");
      return false;
    }
	if (j==null || j=="")
    {
      alert("password must be filled out");
      return false;
    }
  }
</script>
<body>
<div id="form">
<form name="reg" action="pcode_exec.php" onsubmit="return validateForm()" method="post">
  <table width="274" border="0" align="center" cellpadding="2" cellspacing="0">
    <tr>
      <td colspan="2">
        <div align="center" id="reg">
          <?php 
          // $remarks=$_GET['remarks'];
          if (!isset($_GET['remarks']))
          {
            echo 'Please Register Here';
          }
          if (isset($_GET['remarks']) && $_GET['remarks']=='success')
          {
            echo 'Registration Success';
          }
          ?>  
		  </div><br></td>
      </tr>
      <tr>
        <td width="95"><div align="right">First Name:</div><br></td>
        <td width="171"><input type="text" name="fname" /></td>
      </tr>
      <tr>
        <td><div align="right">Last Name:</div><br></td>
        <td><input type="text" name="lname" /></td>
      </tr>
      <tr>
        <td><div align="right">Gender:</div><br></td>
	    <td>
		<input type="radio" value="male" name="gender">Male
	    <input type="radio" value="female" name="gender">Female</td>
      </tr>

      <tr>
        <td><div align="right">Address:</div><br></td>
        <td><input type="text" name="address" /></td>
      </tr>
      <tr>
        <td><div align="right">Contact No.:</div><br></td>
        <td><input type="text" name="contact" /></td>
      </tr>
	  <tr>
        <td><div align="right">NID:</div><br></td>
        <td><input type="text" name="nid" /></td>
      </tr>
	  <tr>
        <td><div align="right">P_Station:</div><br></td>
		<td>
		<select name="pstation">
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
        <td><div align="right">Ranking:</div><br></td>
        <td><input type="text" name="ranking" /></td>
      </tr>
      <tr>
        <td><div align="right">Username:</div><br></td>
        <td><input type="text" name="username" /></td>
      </tr>
      <tr>
        <td><div align="right">Password:</div><br></td>
        <td><input type="password" name="password" /></td>
      </tr>
	  <tr>
        <td><div align="right"></div></td>
        <td><input name="submit" type="submit" value="Submit" id="submit" /></td>
      </tr>
    </table>
	
  </form>
  	<a href="adminhome.php"><button>Back</button></a>

</body>
</html>