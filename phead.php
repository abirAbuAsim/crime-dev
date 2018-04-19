<style>

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
	margin:180px 100px 0px 50px;
	background:#000033;
	width:600px;
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

<div class="nav">
<ul>
<li> <a href="<?php echo $base;?>/phome.php">Home</a></li>
<li> <a href="#">View Record</a>
<ul>
<li> <a href="<?php echo $base;?>/cinfo.php">Criminal Record</a></li>
<li> <a href="<?php echo $base;?>/wdisplay.php">Most Wanted Record</a></li>
<li> <a href="<?php echo $base;?>/search_criminal.php">Search Criminal</a></li>
</ul>
</li>
<li> <a href="<?php echo $base;?>/missingdisplay.php">Missing Person</a></li>
<li> <a href="<?php echo $base;?>/police/complainstatus.php">Complain Status</a></li>
<li> <a href="<?php echo $base;?>/logout.php">Logout</a></li>
</ul>
<form class="search-form" method="post" action="<?php echo $base;?>/station_file.php">
<input type="text" name="p_station" placeholder="Station..."></td>
<input type="submit" value="Search" name="Go" id="search"></td>
</form>
</div>
