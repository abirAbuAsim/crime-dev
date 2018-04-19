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
#submit{
	background:green;
	color:white;
}
#form{
	background:white;
	margin:40px 400px 0px 400px;
	height:480px;
}
button{
	background-color:blue;
	color:white;
	margin-left:350px;
}
</style>
<script type="text/javascript">
  function validateForm()
  {
    var a=document.forms["reg"]["fname"].value;
    var b=document.forms["reg"]["lname"].value;
    var c=document.forms["reg"]["gender"].value;
    var d=document.forms["reg"]["address"].value;
	var e=document.forms["reg"]["email"].value;
    var f=document.forms["reg"]["contact"].value;
	var g=document.forms["reg"]["nid"].value;
    var h=document.forms["reg"]["username"].value;
    var i=document.forms["reg"]["password"].value;
    if ((a==null || a=="") && (b==null || b=="") && (c==null || c=="") && (d==null || d=="") && (e==null || e=="") && (f==null || f=="") && (g==null || g=="") && (h==null || h=="") && (i==null || i=="")  )
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
      alert("address must be filled out");
      return false;
    }
    if (e==null || e=="")
    {
      alert("valid email must be filled out");
      return false;
    }
	if (f==null || f=="")
    {
      alert("contact must be filled out");
      return false;
    }
    if (g==null || g=="")
    {
      alert("nid must be filled out");
      return false;
    }
    if (h==null || h=="")
    {
      alert("username must be filled out");
      return false;
    }
	if (i==null || i=="")
    {
      alert("password must be filled out");
      return false;
    }
  }
</script>
<body>
 <div id="form">
<form name="reg" action="code_exec.php" onsubmit="return validateForm()" method="post">
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
        <td><div align="right">Email:</div><br></td>
        <td><input type="text" name="email" /></td>
      </tr>

      <tr>
        <td><div align="right">Contact No.:</div><br></td>
        <td><input type="text" name="contact" /></td>
      </tr>
	  <tr>
        <td><div align="right">NID No.:</div><br></td>
        <td><input type="text" name="nid" /></td>
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
  <a href="login.php"><button>Login</button></a>

  </div>
</body>
</html>