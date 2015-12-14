<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>投票:<?php echo ($Bigtitle); ?></title>
	<meta http-equiv="Content-TYPE" content="text/html;charset=utf-8"/>
	<script src="/blog/Public/js/jquery-2.1.4.min.js" ></script>
	<link  rel="stylesheet" href="/blog/Public/css/bootstrap.min.css"/>
	<script src="/blog/Public/js/bootstrap.js" ></script>
	<style type="text/css">

		body{
			background-image: url(/blog/Public/007.jpg);
			background-repeat: repeat;
			background-size: 500px 500px;
			height: 4000px;
		}

		#top.col-md-12{
			height: 50px;
			background-color: white;
			text-align: right;
			list-style-type:none;
			font-size: 18px;
			margin-bottom: 50px;
		}


		#container.col-md-9{
			height: 3431px;
			background-color:rgba(233, 235, 240, 0.98);
			position: absolute;
			left: 15%;

		}


		#title.col-md-2{
			height: 200px;
			background-color:rgba(233, 235, 240, 0.58);
			border-top: 1px solid rgba(97, 119, 175, 0.23);
			border-left: 1px solid rgba(97, 119, 175, 0.23);
			border-radius: 6px 0px 0px 0px;

		}
		#title.col-md-7{
			height: 200px;
			background-color:rgba(233, 235, 240, 0.58);
			border-top: 1px solid rgba(97, 119, 175, 0.23);
		}

		#title.col-md-3{
			height: 200px;
			background-color:rgba(233, 235, 240, 0.58);
			border-top: 1px solid rgba(97, 119, 175, 0.23);
			border-right: 1px solid rgba(97, 119, 175, 0.23);
			border-radius: 0px 6px 0px 0px;


		}

		#name.col-md-12{
			height: 40px;
			background-color:rgba(233, 235, 240, 0.58);
			border-left: 1px solid rgba(97, 119, 175, 0.23);
			border-right: 1px solid rgba(97, 119, 175, 0.23);
			border-bottom: 1px solid rgba(97, 119, 175, 0.23);
			border-radius: 0px 0px 6px 6px;
		}


		#nav.col-md-12{
			height: 40px;
			background:white;
			border-radius: 5px;
			border-top: 1px solid rgba(0, 0, 0, 0.28);
			border-bottom: 1px solid rgba(0, 0, 0, 0.28);
			border-left: 1px solid rgba(0, 0, 0, 0.28);
			border-right: 1px solid rgba(0, 0, 0, 0.28);

		}


		#message.col-md-12{
			height: 150px;
			background-color:rgba(108, 108, 158, 0);
			border-top: 1px solid rgba(0, 0, 0, 0.28);
			border-left: 1px solid rgba(0, 0, 0, 0.28);
			border-right: 1px solid rgba(0, 0, 0, 0.28);
			border-bottom: 1px dashed rgba(0, 0, 0, 0.28);
			border-radius: 6px 6px 0px 0px;
			font-size: 20px;
			font-family: 微软雅黑;


		}


		#vote.col-md-12{
			height: 1600px;
			background-color:rgba(108, 108, 158, 0);
			border-left: 1px solid rgba(0, 0, 0, 0.28);
			border-right: 1px solid rgba(0, 0, 0, 0.28);
			border-bottom: 1px dashed rgba(0, 0, 0, 0.28);
			border-radius: 0px 0px 6px 6px;
			font-size: 18px;
			font-family: 华文楷体;
			color: black;

		}

		#result.col-md-12{
			height: 1400px;
			background-color:rgba(108, 108, 158, 0);
			border-left: 1px solid rgba(0, 0, 0, 0.28);
			border-right: 1px solid rgba(0, 0, 0, 0.28);
			border-bottom: 1px solid rgba(0, 0, 0, 0.28);
			

		}


		p.p1{
			font-size: 45px;
			position: absolute;
			left:5%;
			top: 40%;
		}


		p.p2{
			font-size: 23px;
			position: absolute;
			left: 0%;
			top: 60%;
			font-family: 华文细黑;
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
		}


			table.tab1{
			width: 50%;
			position: absolute;
			top:10%;
			font-size: 18px;
		}

			table.tab2{
				position: absolute;
				top:15%;
			}


			table.tab3{
				width: 90%;
			}

		span.c1{
			position: absolute;
			left: 78%;
			top:18%;
			font-size: 16px;
		}

		#select{
			width:200px;
			height: 270px;
			background-color:rgba(108, 108, 158, 0);
			float: left;
			margin: 20px;
		}
		
				#select-top{
					width:195px;
					height: 195px;
					margin: 1px;
					overflow:hidden;
					white-space:nowrap;
					font-size: 20px;
				}
				#select-bottom{
					width:200px;
					height: 50px;
					background-color:rgba(108, 108, 158, 0);
					text-align: center;
					margin-top: 20px;
					
				}

				#submit{
					width: 100%;
					height: 50px;
					float: left;

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
					<div class="col-md-2" id="title">
						<img src="/blog/Public/001.jpg" class="img-thumbnail" style="width:140px;height:140px;position:absolute;left:19%;top:20%;">
					</div>
					<div class="col-md-7" id="title">
						<p class="p1">&nbsp<span class="glyphicon glyphicon-star-empty"></span><a class="a1" href="<?php echo U('Home/Message/message','','');?>">&nbsp耽美评论圈</a></p>
					</div>
					<div class="col-md-3" id="title">
						<p class="p2">圈主：&nbsp Hennessy</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12" id="name">
						<table  class="tab1">
							 <tr>
							 	<td align="left" colspan="2">
							 		<a href="<?php echo U('Home/Message/message');?>" class="a1"><span class="glyphicon glyphicon-file"></span>&nbsp帖子</a>
							 	</td>
							 	<td align="left" colspan="2">
							 		<a href="<?php echo U('Home/Vote/vote','','');?>" class="a1"><span class="glyphicon glyphicon-check"></span>&nbsp投票</a>
							 	</td>
							 	<td align="left" colspan="1">
							 		<a href="#" class="a1"><span class="glyphicon glyphicon-picture"></span>&nbsp图库</a>
							 	</td>
							 	<td align="left" colspan="1">
							 		<a href="#" class="a1"><span class="glyphicon glyphicon-user"></span>&nbsp管理员</a>
							 	</td>
							 	<td align="left" colspan="1">
							 		<a href="#" class="a1"><span class="glyphicon glyphicon-list-alt"></span>&nbsp规定</a>
							 	</td> 

							 </tr>
						</table>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12" id="nav">
						<a href="<?php echo U('Home/Sponsor/sponsor','','');?>" class="btn btn-success" style="width:20%;height:80%; position:absolute;top:10%;" ><font size="4px" face="华文楷体" color="black">我也要创建投票</font></a>
						<span class="c1"><a href="<?php echo U('Home/Message/message','','');?>">&nbsp>>&nbsp回到评论圈</a>&nbsp>>&nbsp<a href="<?php echo U('Home/Vote/vote','','');?>">回到投票</a></span>

					</div>
				</div>
				<div class="row">
					<div class="col-md-12" id="message">
						<table class="tab2">
							<tr>
								<td>『耽美投票』：<?php echo ($Bigtitle); ?></td>
							</tr>
							<tr>
								<td>&nbsp&nbsp发起者：<?php echo ($host); ?></td>
							</tr>
							<tr>
								<td>&nbsp&nbsp投票描述：<?php echo ($describt); ?></td>
							</tr>
						</table>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12" id="vote">
						<form action="<?php echo U('Home/Votecontent/handleimage','','');?>" method="post">
							<?php $i=0; ?>
							<?php if(is_array($image)): foreach($image as $key=>$data): ?><div id="select">
									<div id="select-top">
										<img style="width:195px;height:195px;" class="img-thumbnail" src="data:image/jpg;base64,<?php echo ($data); ?>" alt="此选项没有图片">
									</div>
									<div id="select-bottom">
										<?php echo $select[$i]['title']; ?>
										<input type="radio" name="select" value="<?php echo $select[$i]['title'];?>">
										<?php $i++; ?>
									</div>
								</div><?php endforeach; endif; ?>
							<br/>
							<div id="submit">
								<center>
									<input type="submit" class="btn btn-success" value="投票" style="width:30%;height:45px;">
								</center>
							</div>
							
						</form>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12" id="result">
						<h3><span class="glyphicon glyphicon-star-empty"></span>投票结果<span class="glyphicon glyphicon-star-empty"></span></h3>
						<table class="tab3">
							<?php if(is_array($data2)): foreach($data2 as $key=>$data): ?><tr>
								<td style="width:10%" align="left">
									<span class="glyphicon glyphicon-star-empty"></span>
									<?php echo ($data["title"]); ?>  
								</td>
								<td style="width:70%" align="left">
									<div class="progress progress-striped">
										<div class="progress-bar progress-bar-success" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo ($data["vote"]); ?>%;"><?php echo ($data["vote"]); ?>票
										</div>
									</div>
								</td>
								<td style="width:20%" align="right">
									<!--下拉菜单-->

											<div class="btn-group">
											   <button type="button" class="btn btn-primary">投票人</button>
											   <button type="button" class="btn btn-primary dropdown-toggle" 
											      data-toggle="dropdown">
											      <span class="caret"></span>
											      <span class="sr-only">切换下拉菜单</span>
											   </button>
											   <ul class="dropdown-menu" role="menu" style="width:20%;color:black;">
											     	<?php echo ($data["votor"]); ?>
											   </ul>
											</div>
								</td>
							</tr>
							<tr><td>&nbsp</td></tr><?php endforeach; endif; ?>
						</table>
					</div>
				</div>
			</div>
		</div>
			
	</div>
</body>
</html>