<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Missing_Person</title>
</head>
<style>
body{
	background:white;
	color:white;
	padding-top:50px;
	
}
#form{
	background:#003366;
	margin:50px 400px 0px 400px;
	height:400px;
	
}
#missing{
	
	background:#CCFFCC;
	color:black;
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
    var a=document.forms["missing"]["name"].value;
    var b=document.forms["missing"]["gender"].value;
    var c=document.forms["missing"]["age"].value;
    var d=document.forms["missing"]["height"].value;
	var e=document.forms["missing"]["address"].value;
	var f=document.forms["missing"]["photo"].value;
	var g=document.forms["missing"]["contact"].value;
    if ((a==null || a=="") && (b==null || b=="") && (c==null || c=="") && (d==null || d=="") && (e==null || e=="") && (f==null || f=="") && (g==null || g=="") )
	{
	  alert("All Field must be filled out");
      return false;
    }
    if (a==null || a=="")
    {
      alert(" name must be filled out");
      return false;
    }
    if (b==null || b=="")
    {
      alert("gender must be filled out");
      return false;
	  }
    if (c==null || c=="")
    {
      alert("age name must be filled out");
      return false;
    }
    if (d==null || d=="")
    {
      alert("height must be filled out");
      return false;
    }
    if (e==null || e=="")
    {
      alert("address must be filled out");
      return false;
    }
	if (f==null || f=="")
    {
      alert("photo must be filled out");
      return false;
    }
    if (g==null || g=="")
    {
      alert("contact must be filled out");
      return false;
    }
    
  }
</script>
<body>
 <div id="form">
 
<form name="missing" action="m_person.php" onsubmit="return validateForm()" method="post">
  <table width="274" border="0" align="center" cellpadding="2" cellspacing="0">
    <tr>
      <td colspan="2">
        <div align="center" id="missing">
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
        <td width="95"><div align="right">Name:</div><br></td>
        <td width="171"><input type="text" name="name" /></td>
      </tr>
       
      <tr>
        <td><div align="right">Gender:</div><br></td>
	    <td>
		<input type="radio" value="male" name="gender">Male
	    <input type="radio" value="female" name="gender">Female</td>
      </tr>
	   <tr>
	  <td><div align="right">Age:</div><br></td>
        <td><input type="text" name="age" /></td>
      </tr>
	  <tr>
	  <td><div align="right">Height:</div><br></td>
        <td><input type="text" name="height" /></td>
      </tr>
    
      <tr>
        <td><div align="right">Address:</div><br></td>
        <td><input type="text" name="address" /></td>
      </tr>
	   <tr>
        <td><div align="right">P_photo:</div><br></td>
       <td><input type=file name=photo></td>
	</tr>

      <tr>
        <td><div align="right">Contact:</div><br></td>
        <td><input type="text" name="contact" /></td>
      </tr>
	  <tr>
        <td><div align="right"></div></td>
        <td><input name="submit" type="submit" value="Submit" id="submit" /></td>
	 </tr>
    </table>
  </form>
  <a href="adminhome.php"><button>Back</button>
  </div>
</body>
</html>