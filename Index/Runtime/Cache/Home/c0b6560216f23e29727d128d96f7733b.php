<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>登录系统</title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
	<meta name="description" content=""/>	<!--这一行以及下一行的含义是让一些搜索引擎搜索到你的网页-->
	<meta name="keywords" content=""/>

	<script src="/blog/Public/js/jquery-2.1.4.min.js" ></script>
	<link  rel="stylesheet" href="/blog/Public/css/bootstrap.min.css"/>
	<script src="/blog/Public/js/bootstrap.js" ></script>
	<script type="text/javascript">
	$(function(){         

		var captcha_img = $('#code').find('img');
		var verifyimg = captcha_img.attr("src");
		captcha_img.attr('title', '点击刷新');
		captcha_img.click(function(){
			if( verifyimg.indexOf('?')>0)
			{
	       		 $(this).attr("src", verifyimg+'&random='+Math.random());
	    	}
	    	else
	    	{
	        	$(this).attr("src", verifyimg.replace(/\?.*$/,'')+'?'+Math.random());
	    	}
		});
	})
	</script>
	<style type="text/css">
	#top.col-md-12{
		background-color: rgba(133, 133, 165, 0.14);;
		height: 60px;
		border-bottom:1px solid #9999FF;
	}
	#body.col-md-12{
		background-color:white;
		height: 500px;
		
	}

			#body-left.col-md-4{
				background-color:white;
				height: 500px;
				text-align: center;
		
			}


			#body-middle.col-md-3{
				background-color:white;
				height: 500px;
		
			}


			#body-right.col-md-5{
				background-color:white;
				height: 500px;
		
			}

						#body-right-body{
							width: 400px;
							height: 460px;
							border-radius:25px 25px 25px 25px;
							border-left:1px solid rgba(117, 122, 160, 0.82);
							border-right:1px solid rgba(117, 122, 160, 0.82);
							border-top:1px solid rgba(117, 122, 160, 0.82);
							border-bottom:1px solid rgba(117, 122, 160, 0.82);
							margin-top: 20px;
							margin-left: 40px;
						}



	#button.col-md-12{
		background-color: rgba(90, 125, 125, 0.15);
		height: 30px;
		border-top:1px solid rgba(130, 173, 173, 0.33);
	}




	</style>
</head>
<body>
	
		<div class="row">
			<div class="row">
				<div class="col-md-12" id="top">
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				<font face="Broadway" size="15px">BL</font>	<font face="华文行楷" color="blue" size="5px">耽美俱乐部</font>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12" id="body">
					<div class="container">
						<div class="column">
								<div class="col-md-4" id="body-left">
									<br/><br/><br/><img src="/blog/Public/012.jpg" width="280px" height="400px" class="img-circle">
								</div>
						</div>
						<div class="column">
								<div class="col-md-3" id="body-middle">
								
								<font size="4px" face="华文行楷"><br/><br/><br/><br/><br/><br/>&nbsp&nbsp&nbsp&nbsp曾经我们让男人来决定女人该不该受教育，白人决定黑人能不能活下去，后来我我们都认为这是荒诞的。
									<br/><br/><br/>&nbsp&nbsp&nbsp&nbsp如今，我们却又让异性恋来决定同性恋能不能相爱
									</font>
								</div>
						</div>
						<div class="column">
								<div class="col-md-5" id="body-right">
									<div class="container" id="body-right-body">
										<br/><center><font size="5px" face="华文楷体">耽美俱乐部登陆</font></center>
										<hr align="center" size="1px" width="380px"  nashade="noshade" id="hr"><br/>
										<form action="<?php echo U('Home/Index/handle','','');?>" method="post">
											<font size="4px" face="华文细黑">
											<p align="center">用户名<input type="text" name="username" style="width:280px;height:40px;" /></p><br/>
											<p align="center">密码<input type="password" name="userpassword"  style="width:280px;height:40px; "/></p><br/>
											<p align="center" id="code">请输入验证码<input type="text" name="code" style="width:100px;height:40px;" />&nbsp<img src="<?php echo U('Home/Index/verify','','');?>" title="点击刷新"></p><br/>
											<p align="center"><input type="submit" class="btn btn-primary" name="submit1" value="登陆" style="width:280px;height:40px;"/></p>
												
												</font>	
											
										</form>
										<br/><br/>
										<p align="right"><a href="#">忘了密码？</a>&nbsp|&nbsp<a href="<?php echo U('Home/Enroll/enroll','','');?>">注册账号</a>&nbsp|&nbsp<a href="#">意见反馈</a></p>
										
										
									</div>
								</div>
						</div>
					</div>	
				</div>
			</div>
			<div class="row">
				<div class="col-md-12" id="button">
					<center>
						<a href="#">关于耽美</a>&nbsp|&nbsp<a href="#">耽美贴吧</a>&nbsp|&nbsp<a href="#">耽美群信息</a>&nbsp|&nbsp<a href="#">本俱乐部官方邮箱：xxxxxx@163.com</a>
					</center>
				</div>
			</div>
		</div>
	

	
</body>
</html>