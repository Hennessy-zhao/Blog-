<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>耽美留言圈</title>
	<meta http-equiv="Content-TYPE" content="text/html;charset=utf-8"/>
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


		}

		#title.col-md-12{
			height: 500px;
			background-color: rgba(233, 235, 240, 0.54);	

		}


				#title-top.col-md-12{
					height: 320px;
					background-color: white;
					


				}

					

				#title-bottom.col-md-12{
					height: 180px;
					border-top: 1px solid rgba(97, 119, 175, 0.23);
					border-left: 1px solid rgba(97, 119, 175, 0.23);
					border-right: 1px solid rgba(97, 119, 175, 0.23);
					border-bottom: 1px solid rgba(97, 119, 175, 0.23);
					border-radius: 10px;
				}


				
						#title-bottom.col-md-3{
							height: 180px;
							background-color:rgba(233, 235, 240, 0.18);								
							background-image: url(/blog/Public/001.jpg);
							background-repeat: no-repeat;
							background-size: 180px 180px;
							background-position: 100%;

						}
						#title-bottom.col-md-9{
							height: 120px;
							background-color:rgba(233, 235, 240, 0.18);
							margin-top: 50px;
							font-family: 微软雅黑;
							font-size: 10px;
							
						}





		#body.col-md-9{
			height: 1150px;
			border-left: 1px solid rgba(0, 0, 0, 0.06);
			border-top: 1px solid rgba(0, 0, 0, 0.06);
			border-bottom: 1px solid rgba(0, 0, 0, 0.06);
			background-color:rgba(233, 235, 240, 0.54);
			border-radius: 8px 0px 0px 8px;
			font-family: 华文细黑;
			font-size: 18px;

		}
		#body.col-md-3{
			height: 800px;
			background-color:white;
			border-top: 1px solid rgba(0, 0, 0, 0.06);
			border-right: 1px solid rgba(0, 0, 0, 0.06);
			border-bottom: 1px solid rgba(0, 0, 0, 0.06);
			border-radius: 0px 0px 8px 0px;
			background-image: url(/blog/Public/006.jpg);
			background-size: 100px 100px;

		}


		#bottom.col-md-12{
			height: 450px;
			background-color: white;
			border: 1px solid rgba(0, 0, 0, 0.15);
			border-radius: 5px;
			font-size: 20px;
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
			color:black;
		}

		
		
		


		table.tab1{
			font-size: 20px;
			font-family: 华文隶书;
			color: black;
		}
		
		p.p2{
			font-family: 华文楷体;
			font-size:25px;
			color: black;
		}

		ul.u1{
			font-family: 华文新魏;
			font-size:20px;
			color: black;
		}
		
	</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12" id="top">
				<!--下拉式-->
				<nav class="navbar"  style="position:absolute;left:88%;">
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

		<div class="row">
			<div class="col-md-12" id="title">
				<div class="row">
					<div class="col-md-12" id="title-top">
								<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="width:102%; height:100%;position:absoluet;left:-1%;">
	
									   <!-- 轮播（Carousel）指标 -->
									   <ol class="carousel-indicators">
									      <li data-target="#mycarousel-example-generic" data-slide-to="0" class="active"></li>
									      <li data-target="#carousel-example-generic" data-slide-to="1"></li>
									      <li data-target="#carousel-example-generic" data-slide-to="2"></li>
									   </ol>  
									   <!-- 轮播（Carousel）项目 -->
									   <div class="carousel-inner" role="listbox">
									      <div class="item active">
									         <a href="<?php echo U('Home/Message/message','','');?>"><img src="/blog/Public/002.jpg" class="img-rounded" style="width:100%;height:321px;"></a>
									      </div>
									      <div class="item">
									         <a href="<?php echo U('Home/Vote/vote','','');?>"><img src="/blog/Public/003.jpg" class="img-rounded" style="width:100%;height:321px;"></a>
									      </div>
									      <div class="item">
									         <img src="/blog/Public/004.jpg" class="img-rounded" style="width:100%;height:321px;">
									      </div>
									   </div>
									   <!-- 轮播（Carousel）导航 -->
									   	<a class="carousel-control left" href="#carousel-example-generic" data-slide="prev">
									   		<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    										<span class="sr-only">Previous</span>
									    </a>
									   <a class="carousel-control right" href="#carousel-example-generic" data-slide="next">&rsaquo;
									   		<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
   											<span class="sr-only">Next</span>
									   </a>

								</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12" id="title-bottom">
						<div class="column">
							<div class="col-md-3" id="title-bottom">
							</div>
							<div class="col-md-9" id="title-bottom">
								<font size="10px"><span class="glyphicon glyphicon-star-empty"></span>耽美评论圈</font><br/>
								人类彻底超越了两性的性别差异，抛却了对性爱对象的性别执着。在这个世界里，女性无须藏匿自己的性别和欲望，男人和女人获得了绝对意义上的平等，没有什么不可以被改变的，男性和女性也不是绝对对立的，而是混沌未分的统一体，有着通往彼此的途径。在这个世界里，你选择你的爱人，是因为绝对的爱，而并非因为他是男性或者女性。
							</div>
						</div>
					</div>


				</div>
			</div>
		</div>
		<div class="row">
			
			<!--导航栏-->
					 <nav class="navbar  navbar-default " role="navigation" style="background:white; margin-bottom:0px;">
					   <div class="navbar-header">
					      <a class="navbar-brand" href="<?php echo U('Home/Message/message','','');?>"><font color="black" face-"华文新魏">&nbsp讨论帖&nbsp</font></a>
					   </div>
					   <div>
					      <ul class="nav navbar-nav">
					         <li class="active"><a href="<?php echo U('Home/Vote/vote','','');?>">投票贴</a></li>
					         <li><a href="#">图片库</a></li>
					         
					      </ul>
					   </div>
					</nav>
			
		</div>
		<div class="row">
			<div class="col-md-9" id="body">
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
						        <td align="left"><a class="a1" href="<?php echo U('Home/Content/content',array('title'=>$data['title'],'host'=>$data['user']));?>">&nbsp<span class="glyphicon glyphicon-star-empty"></span>&nbsp『耽美』<?php echo ($data["title"]); ?></a></td>
						        <td align="right"><?php echo ($data["user"]); ?></td>
						        <td align="right"><?php echo ($data["lastdate"]); ?></td>
						    </tr><?php endforeach; endif; ?>
				   </tbody>
				</table>
				
				<br/><br/><center> <?php echo ($page); ?><center>
			</div>
			<div class="col-md-3" id="body">
				<br/>
				<center>
				&nbsp<span class="glyphicon glyphicon-star"></span>&nbsp
				&nbsp<span class="glyphicon glyphicon-star"></span>&nbsp
				&nbsp<span class="glyphicon glyphicon-star"></span>&nbsp
				</center>
				<br/><br/>
				<table class="tab1">
					<tr>
						<td align="left">&nbsp圈主： </td><td align="right">Hennessy</td>
					</tr>
					<tr>
						<td align="left">&nbsp副圈主： </td><td align="right">Hennessy</td>
					</tr>
					<tr>
						<td align="left">&nbsp管理员： </td><td align="right">Hennessy</td>
					</tr>
					<tr>
						<td align="left">&nbsp管理员： </td><td align="right">Hennessy</td>
					</tr>
					<tr>
						<td align="left">&nbsp管理员： </td><td align="right">Hennessy</td>
					</tr>
				</table>
				<br/><br/>
				<center>
				&nbsp<span class="glyphicon glyphicon-star"></span>&nbsp
				&nbsp<span class="glyphicon glyphicon-star"></span>&nbsp
				&nbsp<span class="glyphicon glyphicon-star"></span>&nbsp
				</center>
				<br/><br/>
				<p class="p2">圈规</p>
				<ul class="u1">
					<li>禁止无端辱骂他人，爆粗口，违者封号</li>
					<li>禁止散播淫乱不健康信息，违者封号</li>
					<li>禁止打广告，违者禁言</li>
					<li>非耽美爱好者请绕道，违者封号</li>
					<li>长期发起与本圈无关话题者禁号</li>
				</ul>

			</div>
		</div>
		<div class='row'>			
			<div class="col-md-12" id="bottom">
				<form action="<?php echo U('Home/Message/message_submit');?>" method="post">
					<div class="form-group">
						<p><center><span class="glyphicon glyphicon-star-empty"></span>&nbsp发帖&nbsp<span class="glyphicon glyphicon-star-empty"></span></center></p>
						标题<input type="text" class="form-control" name="title">
						内容<textarea class="form-control" rows="6" name="content" ></textarea><br/>
						发帖人：&nbsp&nbsp<?php echo $_SESSION['username']; ?><br/><br/>
						<center><input type="submit" class="btn btn-primary" style="width:80%;height:40px;"></center>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>