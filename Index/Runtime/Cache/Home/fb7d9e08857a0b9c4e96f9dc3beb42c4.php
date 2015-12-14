<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>发起投票</title>
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
			margin-bottom: 30px;
		}

		#title.col-md-12{
			height: 50px;
			background-color:rgba(233, 235, 240, 0.88);
			border-bottom: 2px solid blue;
			border-top:1px solid rgba(167, 178, 206, 0.54);
			border-left: 1px solid rgba(167, 178, 206, 0.54);
			border-right: 1px solid rgba(167, 178, 206, 0.54);
			font-size: 15px;
		}
		#body.col-md-12{
			height: 3400px;
			background-color: rgba(233, 235, 240, 0.28);
			border-bottom: 1px solid rgba(233, 235, 240, 0.98);
			border-left: 1px solid rgba(233, 235, 240, 0.98);
			border-right: 1px solid rgba(233, 235, 240, 0.98);
			font-size: 15px;
			font-family: 华文细黑;


		}
	</style>
</head>
<body>
	<div class="container">
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
		<div class="row">
			<div class="col-md-12" id="title">
				<p style="position:absolute;top:40%;"><a href="<?php echo U('Home/Message/message','','');?>">耽美评论圈</a>&nbsp>>&nbsp<a href="<?php echo U('Home/Vote/vote','','');?>">耽美投票区域</a>&nbsp>>&nbsp发起投票</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12" id="body">
				<form action="<?php echo U('Home/Sponsor/handle','','');?>" method="post">
					<div class="form-group">
						<label>标题</label>
	    				<input type="text" class="form-control" name="title" placeholder="标题">
	    			</div>
	    			<div class="form-group">
    					<label>描述</label>
    					<textarea class="form-control" rows="3" placeholder="描述/可不填" name="desc"></textarea>
    				</div>
    				<br/><br/>
    				<div class="form-group">
						<label>投票选项(必须大于2并且小于等于20)(图插入必须每个选项都插入或都不插入)</label><br/>
						<?php $__FOR_START_21921__=1;$__FOR_END_21921__=20;for($k=$__FOR_START_21921__;$k <= $__FOR_END_21921__;$k+=1){ echo ($k); ?>.<input type="text" class="form-control" name="title<?php echo ($k); ?>" placeholder="选项描述" style="width:50%;"><br/>
								<font color="blue">插入图片</font><input type="text" class="form-control" name="address<?php echo ($k); ?>" placeholder="图片网址/可不填" style="width:50%;"><br/><?php } ?>
	    			</div>
	    				<center>
	    				<input class="btn btn-success" type="submit" style="width:60%;htight:40px;">
	    				</center>
				</form>
			</div>
		</div>
	</div>
</body>
</html>