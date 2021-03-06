<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>投票</title>
	<meta http-equiv="Content-TYPE" content="text/html;charset=utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="/blog/Public/js/jquery-2.1.4.min.js" ></script>
	<link  rel="stylesheet" href="/blog/Public/css/bootstrap.min.css"/>
	<script src="/blog/Public/js/bootstrap.js" ></script>
	<style type="text/css">

		#top.col-md-12{
			height: 50px;
			background-color: white;
			text-align: right;
			list-style-type:none;
			font-size: 18px;
			margin-bottom: 50px;
		}

		#container.col-md-9{
			height: 5000px;
			background-color: white;
			position: absolute;
			left: 13%;
		}

		#title.col-md-12{
			height: 300px;
			background-image: url(/blog/Public/008.jpg);
			background-size: 100% 100%;
			background-repeat: no-repeat;
			border-radius: 10px;
			border-left: 1px solid rgba(97, 119, 175, 0.23);
			border-right: 1px solid rgba(97, 119, 175, 0.23);
			border-top: 1px solid rgba(97, 119, 175, 0.23);
			border-bottom: 1px solid rgba(97, 119, 175, 0.23);
		}

		#nav.col-md-12{
			height: 50px;
			background-color: white;
			border-left: 1px solid rgba(97, 119, 175, 0.23);
			border-right: 1px solid rgba(97, 119, 175, 0.23);
			border-top: 1px solid rgba(97, 119, 175, 0.23);
			border-bottom: 1px solid rgba(97, 119, 175, 0.23);
			border-radius: 6px;

		}

		#page.col-md-12{
			height: 40px;
			background-color:rgba(233, 235, 240, 0.48);
			border-top: 1px solid rgba(97, 119, 175, 0.23);
			border-left: 1px solid rgba(97, 119, 175, 0.23);
			border-right: 1px solid rgba(97, 119, 175, 0.23);
			border-radius: 6px 6px 0px 0px;

		}

		#body.col-md-12{
			height: 3000px;
			background-color:rgba(233, 235, 240, 0.88);
			border-top: 1px dotted rgba(97, 119, 175, 0.23);
			border-bottom: 1px solid rgba(97, 119, 175, 0.23);
			border-left: 1px solid rgba(97, 119, 175, 0.23);
			border-right: 1px solid rgba(97, 119, 175, 0.23);

			
		}

		#vote.col-md-12{
			height: 50px;
			background-color: black;
		}

		#img1.img-thumbnail{
			width:100px;
			height: 100px;
			left: 91%;
			top:66%;
			position:relative;
			animation-name:myfirst;
			animation-duration:9s;
			animation-timing-function:linear;
			animation-delay:0;
			animation-iteration-count:infinite;
			animation-direction:alternate;
			animation-play-state:running;
			/* Firefox: */
			-moz-animation-name:myfirst;
			-moz-animation-duration:9s;
			-moz-animation-timing-function:linear;
			-moz-animation-delay:0;
			-moz-animation-iteration-count:infinite;
			-moz-animation-direction:alternate;
			-moz-animation-play-state:running;
			/* Safari and Chrome: */
			-webkit-animation-name:myfirst;
			-webkit-animation-duration:9s;
			-webkit-animation-timing-function:linear;
			-webkit-animation-delay:0;
			-webkit-animation-iteration-count:infinite;
			-webkit-animation-direction:alternate;
			-webkit-animation-play-state:running;
			/* Opera: */
			-o-animation-name:myfirst;
			-o-animation-duration:9s;
			-o-animation-timing-function:linear;
			-o-animation-delay:0;
			-o-animation-iteration-count:infinite;
			-o-animation-direction:alternate;
			-o-animation-play-state:running;
		}

		@keyframes myfirst
		{
		0%   {background:white; left:-15px; top:0px;}
		35%  {background:yellow; left:900px; top:0px;}
		50%  {background:red; left:900px; top:200px;}
		85%  {background:blue; left:-15px; top:200px;}
		100% {background:pink; left:-15px; top:0px;}
		}

		@-moz-keyframes myfirst /* Firefox */
		{
		0%   {background:white; left:0px; top:0px;}
		35%  {background:yellow; left:900px; top:0px;}
		50%  {background:red; left:900px; top:200px;}
		85%  {background:blue; left:0px; top:200px;}
		100% {background:pink; left:0px; top:0px;}
		}

		@-webkit-keyframes myfirst /* Safari and Chrome */
		{
		0%   {background:white; left:0px; top:0px;}
		35%  {background:yellow; left:900px; top:0px;}
		50%  {background:red; left:900px; top:200px;}
		85%  {background:blue; left:0px; top:200px;}
		100% {background:pink; left:0px; top:0px;}
		}

		@-o-keyframes myfirst /* Opera */
		{
		0%   {background:white; left:0px; top:0px;}
		35%  {background:yellow; left:900px; top:0px;}
		50%  {background:red; left:900px; top:200px;}
		85%  {background:blue; left:0px; top:200px;}
		100% {background:pink; left:0px; top:0px;}
		}


		table.tab1{
			width: 50%;
			position: absolute;
			top:40%;
			font-size: 18px;
		}

		table.tab2{
			width: 97%;
			font-size: 15px;
			position: absolute;
			top: 20%;
		}


		a.a1:link{
				color: black;
				text-decoration: none;
			}

		a.a1:visited{
			text-decoration:none; 
			color:black;
		}

		a.a1:hover{
			text-decoration:underline; 
			color:blue;
		}

		a.a1:active{
			text-decoration:none; 
			color:black;
		}


	</style>
</head>
<body>
	<div class="row">
		<div class="col-md-12" id="top">
				<!--下拉式-->
					<nav class="navbar"  style="position:absolute;left:85%;">
			   			<div>
			      			<ul class="nav navbar-nav">
								
								<li class="dropdown" >
								    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> 
								        <span class="glyphicon glyphicon-user"></span>
								        <?php echo $_SESSION['username']; ?>
								            <b class="caret"></b>
								    </a>
								 	<ul class="dropdown-menu">
								        <li><a href="#">我的中心</a></li>
								        <li><a href="<?php echo U('Home/Index/index','','');?>" onclick="return confirm('确定退出吗？')">退出</a></li>
								              
								    </ul>
								</li>
							</ul>
						</div>
					</nav>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-9" id="container">
				<div class="row">
					<div class="col-md-12" id="title">
						<img src="/blog/Public/001.jpg" class="img-thumbnail" id="img1">
					</div>
				</div>
				<div class="row">
					<div class="col-md-12" id="nav">
						<table  class="tab1">
							 <tr>
							 	<td align="left" colspan="2">
							 		<a href="<?php echo U('Home/Message/message');?>" class="a1"><span class="glyphicon glyphicon-file"></span>&nbsp帖子</a>
							 	</td>
							 	<td align="left" colspan="2">
							 		<a href="#" class="a1"><span class="glyphicon glyphicon-check"></span>&nbsp投票</a>
							 	</td>
							 	<td align="left" colspan="2">
							 		<a href="#" class="a1"><span class="glyphicon glyphicon-picture"></span>&nbsp图库</a>
							 	</td>
							 	<td align="left" colspan="2">
							 		<a href="#" class="a1"><span class="glyphicon glyphicon-user"></span>&nbsp管理员</a>
							 	</td>
							 	<td align="left" colspan="2">
							 		<a href="#" class="a1"><span class="glyphicon glyphicon-list-alt"></span>&nbsp规定</a>
							 	</td> 

							 </tr>
						</table>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12" id="page">
					<table class="tab2">
						<tr>
							<td align="left"><?php echo ($page); ?></td>
							<td align="right"><a href="<?php echo U('Home/Message/message','','');?>">&nbsp>>返回评论圈</a></td>
						</tr>
					</table>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12" id="body">
						<table class="table  table-hover">
						   <thead>
						      <tr>
						         <td align="left"><font size="5px" face="华文新魏">标题</font></td>
						         <td align="right"><font size="5px" face="华文新魏">发帖人</font></td>
						         <td align="right"><font size="5px" face="华文新魏">发帖时间</font></td>
						      </tr>
						   </thead>
						   <tbody>
						   		<?php if(is_array($select)): foreach($select as $key=>$data): ?><tr>
								        <td align="left">
									        <a class="a1" href="<?php echo U('Home/Votecontent/Votecontent',array('title'=>$data['title'],'host'=>$data['user']));?>">
									        	&nbsp<span class="glyphicon glyphicon-star-empty"></span>&nbsp『耽美投票』<?php echo ($data["title"]); ?>
									        </a>
									    </td>
								        <td align="right"><?php echo ($data["user"]); ?></td>
								        <td align="right"><?php echo ($data["lastdate"]); ?></td>
								    </tr><?php endforeach; endif; ?>
						   </tbody>
						</table>
						<center>
						<a href="<?php echo U('Home/Sponsor/sponsor');?>" class="btn btn-success" id="a3" style="width:60%;height:50px; font-size:20px;">我&nbsp要&nbsp发&nbsp起&nbsp投&nbsp票</a>

					</div>
				</div>
				<div class="row">
					<div class="col-md-12" id="vote">
						
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>