<html>
<head>
<title>News</title>
</head>
<style>

body{
	background-image:url('image/wall7.jpg');
     }
#form{
	background:white;
	margin:90px 350px 0px 400px;
	height:350px
	
}
#news{
	width:300px;
	height:200px;
	background:#FFFFFF;
}
#post{
	background:#000066;
	color:white;
}
#pn{
	background:#000066;
	color:white;
}
</style>
<script type="text/javascript">
  function validateForm()
  {
    var a=document.forms["news"]["news"].value;
    

if (a==null || a=="")
    {
      alert(" Newsbox must be filled out");
      return false;
    }
  }
</script>

<body>
<div id="form">
  <div class="cross">
<a href="adminhome.php" aria-label="Close Account Info Modal Box">&#10006;</a>
</div>
<form name="news"  action="newspost.php" onsubmit="return validateForm()" method="post">
  <table width="274" border="0" align="center" cellpadding="2" cellspacing="0">
	 <tr>
      <td colspan="2">
        <div align="center" id="pn">
          <?php 
          // $remarks=$_GET['remarks'];
          if (!isset($_GET['remarks']))
          {
            echo 'Post News';
          }
          if (isset($_GET['remarks']) && $_GET['remarks']=='success')
          {
		  echo 'News Posted Successfully';
          }
          ?>  
        </div><br></td>
      </tr>
	   <tr>
        <td width="95"><div align="right">News:</div><br></td>
        <td><textarea input type="text" name="news" placeholder="Post News Here" id="news"></textarea></td>
	</tr> 
         <tr>
		 <td><div align="right"><input type="submit" value="Post" name="submit" id="post"</td>
		 </tr>
		  </table>
  </form>
  </div>
</body>
</html>