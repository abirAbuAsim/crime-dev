<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Crime report</title>
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
padding-left:60px;
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
	width:180px;
	color:white;
	text-align:center;
	display:block;
	text-decoration:none;
	font-family:Century Gothic;
    font-weight:bold;
	border-radius:10px;
	padding:10px;
	font-size:15px;

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
	margin: 180px 50px 0px 100px;
	background: #000033;
	width: inherit;
	heigth: auto;
	padding: 25px 250px 25px 20px;
	opacity: .8;
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

</style>
</head>
<body>

<div class="nav">
<ul>
<li> <a href="<?php echo $base;?>/uhome.php">Home</a></li>
<li> <a href="#">File Complain</a>
<ul>
<li> <a href="<?php echo $base;?>/cform.php">Crime File Complain</a></li>
</ul>
</li>
<li> <a href="<?php echo $base;?>/user/complainstatus.php">Complain Status</a>
</li>

<li> <a href="<?php echo $base;?>/index.php">Logout</a></li>
</ul>
<form class="search-form" method="post" action="<?php echo $base;?>/psearch.php">
<input type="text" name="pstation" placeholder="P_Station..."></td>
<input type="submit" value="Search" name="Go" id="search"></td>
</form>
</div>
