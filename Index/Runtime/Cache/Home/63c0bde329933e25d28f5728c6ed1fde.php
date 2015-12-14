<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>

<style type="text/css">
/*basic reset*/
* {margin: 0; padding: 0;}
/*adding a black bg to the body to make things clearer*/
body {background: black;}
canvas {display: block;}
</style>

</head>
<body>

<canvas id="c"></canvas>

<script type="text/javascript">
var c = document.getElementById("c");
var ctx = c.getContext("2d");

//making the canvas full screen
c.height = window.innerHeight;
c.width = window.innerWidth;

//chinese characters - taken from the unicode charset
var chinese = "耽美俱乐部";
//converting the string into an array of single characters
chinese = chinese.split("");

var font_size = 30;
var columns = c.width / font_size; //number of columns for the rain
//an array of drops - one per column
var drops = [];
//x below is the x coordinate
//1 = y co-ordinate of the drop(same for every drop initially)
for (var x = 0; x < columns; x++)
	drops[x] = 1;

//drawing the characters
function draw() {
	//Black BG for the canvas
	//translucent BG to show trail
	ctx.fillStyle = "rgba(0, 0, 0, 0.05)";
	ctx.fillRect(0, 0, c.width, c.height);

	ctx.fillStyle ="yellow"; 			//"#0F0"; //green text
	ctx.font = font_size + "px arial";
	//looping over drops
	for (var i = 0; i < drops.length; i++) {
		//a random chinese character to print
		var text = chinese[Math.floor(Math.random() * chinese.length)];
		//x = i*font_size, y = value of drops[i]*font_size
		ctx.fillText(text, i * font_size, drops[i] * font_size);

		//sending the drop back to the top randomly after it has crossed the screen
		//adding a randomness to the reset to make the drops scattered on the Y axis
		if (drops[i] * font_size > c.height && Math.random() > 0.975)
			drops[i] = 0;

		//incrementing Y coordinate
		drops[i]++;
	}
}

setInterval(draw, 50);


window.onload=function(){
	var obj=document.getElementsByTagName("html")[0];
	obj.onclick=function(){
		window.location="<?php echo U('Home/Message/message','','');?>"
		}
	}
</script>

</body>
</html>