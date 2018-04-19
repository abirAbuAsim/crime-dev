<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>slider</title>
<style type="text/css">
img{
width:100%;
height:400px;
}
#slider{
width:700px;
height:500px;
margin:80px auto;
position:relative;
border:10px solid white;
box-shadow:0px 0px 5px 2px #ccc;
}
button{
padding:20px;
border:none;
background:#37f;
font-size:30px;
color:white;
position:absolute;
top:45%;
cursor:pointer;
}
.next{
border-radius:10px 0px 0px 10px;
margin-left:650px;
}
.prew{
border-radius:0px 10px 10px 0px;
}
</style>

</head>
<body>
<div id="slider">
  <div id="box">
    <img src="criminal1.jpg">
	</div>
	<!--button for control slider--->
	<button class="prew" onclick="prewImage()">-</button>
	<button class="next" onclick="nextImage()">+</button>
	<script type="text/javascript">
	var slider_content=document.getElementById('box');
	//contain images in an array
	var image=['criminal2','criminal3','criminal4','criminal5','criminal6'];
	var i=image.length;
	//function for next slider
	function nextImage(){
		if(i<image.length){
			i=i+1;
		}else{
			i=1;
		}
		slider_content.innerHTML= "<img src="+image[i-1]+".jpg>";
	}
	//function for prew slider
	function prewImage(){
		if(i<image.length+1 && i>1){
			i=i-1;
		}else{
			i=image.length;
		}
		slider_content.innerHTML="<img src="+image[i-1]+".jpg>";
	}
	
</body>

</html>