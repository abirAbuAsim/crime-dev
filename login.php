<?php
	//Start session
	session_start();	
	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
	unset($_SESSION['SESS_FIRST_NAME']);
	unset($_SESSION['SESS_LAST_NAME']);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <meta charset="UTF-8">
  <title>Login</title>
  <style>
	  body{
	  background-image:url('image/wall6.jpg');
	  background-size:cover;
	  width:950px;
      height:400px;
      margin-top:50px;
      margin-left:160px;
     border:5px solid #ffffff;

	  }
 
  #login{
	  background-image:url('image/login.jpg');
	  
	  padding:25px 150px 25px 20px;
	  margin:50px 150px 0px 250px;
	  color:white;
  }
  #new{
	  
	  margin:0px 150px 0px 250px;
      color:gray;
	  font-size:16px;
	  background:#000033;
	padding-top:30px;
	height:80px;
	padding-left:180px;
	opacity:0.5;
	
  }
  ul li{
	  color:white;
  }
  a{
	  color:white;
  }
  
  </style>
</head>
<body>
<div id="login">
<form name="loginform" action="login_exec.php" method="post">
<h3>User Login</h3>

<table width="309" border="0" align="center" cellpadding="2" cellspacing="5">
  <tr>
    <td colspan="2">
		<!--the code bellow is used to display the message of the input validation-->
		 <?php
			if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
			echo '<ul class="err">';
			foreach($_SESSION['ERRMSG_ARR'] as $msg) {
				echo '<li>',$msg,'</li>'; 
				}
			echo '</ul>';
			unset($_SESSION['ERRMSG_ARR']);
			}
		?>
	</td>
  </tr>
  <tr>
    <td width="116"><div align="right">Username:</div></td>
    <td width="177"><input name="username" type="text" /></td>
  </tr>
  <tr>
    <td><div align="right">Password:</div></td>
    <td><input name="password" type="password" /></td>
  </tr>
  <tr>
  <td><div align="right"></div></td>
    <td><input name="" type="submit" value="sign in" /></td>
  </tr>
 </table>
</form>
</div>
<div id="new">
<ul>
<li> <a href="user_reg.php">Register New?</a>
</li>
</ul>
</div>
</body>
</html>