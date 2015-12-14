<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>注册账号</title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
	<meta name="description" content=""/>	<!--这一行以及下一行的含义是让一些搜索引擎搜索到你的网页-->
	<meta name="keywords" content=""/>
	<meta name="save" content="history">

	<link href="/blog/Public/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="/blog/Public/css/bootstrap.min.css"/>

	<style type="text/css">

		.col-md-12{
			height: 800px;
			background-color: white;
		}

		.col-md-3{
			height: 500px;
			background-color: rgba(28, 34, 220, 0.16);
			margin-top:20px;
			border-radius:25px 0px 0px 25px;
			border-left:1px solid rgba(117, 122, 160, 0.19);
			border-top:1px solid rgba(117, 122, 160, 0.19);
			border-bottom:1px solid rgba(117, 122, 160, 0.19);
		}

		.col-md-9{
			height: 800px;
			background-color: rgba(88, 194, 228, 0.12);
			margin-top:20px;
			border-left:1px solid rgba(155, 189, 191, 0.34);
			border-right:1px solid rgba(155, 189, 191, 0.34);
			border-top:1px solid rgba(155, 189, 191, 0.34);
			border-bottom:1px solid rgba(155, 189, 191, 0.34);
		}

		table.tab1{
			width:70%;
		}


		p.p1{
			font-family: 方正舒体;
			font-size: 50px;
			position: absolute;
			left: 5%;
			top:10%;
		}

		p.p2{
			font-size: 50px;
			font-family: 方正舒体;
			position: absolute;
			left: 20%;
			top:28%;
		}


		p.p3{
			font-size: 50px;
			font-family: Broadway;
			position: absolute;
			left: 50%;
			top:50%;
		}

		p.p4{
			font-size: 50px;
			font-family: 华文行楷;
			color: #FF3300;
			position: absolute;
			left: 10%;
			top: 75%;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="column">
					<div class="col-md-3">
						<p class="p1">耽美</p>
						<p class="p2">俱乐部</p>
						<p class="p3">BL</p>
						<p class="p4">欢迎你~~~</p>
					</div>
				</div>
				<div class="column">
					<div class="col-md-9">
						<br/>
						<font face="黑体" size="5px">&nbsp&nbsp&nbsp注册账号</font><br/>
						<p align="right">已注册&nbsp&nbsp<a href="<?php echo U('Home/Index/index','','');?>">登陆</a></p>
						<hr  style="borber:1px solid black;"><br/>
						<div class="container">
							<form action="<?php echo U('Home/Enroll/handle','','');?>" method="post">
								<table class="tab1">
								<tr>
									<td align="left" style="width:15%;">
										<font size="4px" face="华文细黑">用户名</font>
									</td>
									<td align="left" style="width:45%;">
										<input type="text" name="username" style="width:280px;height:40px;" onchange="javascript:window.user(this.value)" value="" />
									</td>
									<td align="left" style="width:40%;">
										<font size="3px" face="黑体"><p id="p1">用户名由汉字、英文字母、数字、下划线构成，且首字符不能为数字</p></font>
									</td>
								</tr>
								<tr><td>&nbsp</td></tr>
								<tr>
									<td align="left" style="width:15%;">
										<font size="4px" face="华文细黑">密码</font>
									</td>
									<td align="left" style="width:45%;">
										<input type="password" id="userpassword" name="userpassword" style="width:280px;height:40px;" onchange="javascript:window.userpassword(this.value)" value="" />
									</td>
									<td align="left" style="width:40%;">
										<font size="3px" face="黑体"><p id="p2">密码由英文字母、数字构成</p></font>
									</td>
								</tr>
								<tr><td>&nbsp</td></tr>
								<tr>
									<td align="left" style="width:15%;">
										<font size="4px" face="华文细黑">再次输入密码</font>
									</td>
									<td align="left" style="width:45%;">
										<input type="password"  name="password" style="width:280px;height:40px;" onchange="javascript:window.password(this.value)" value=""/>
									</td>
									<td align="left" style="width:40%;">
										<font size="3px" face="黑体"><p id="p3"></p></font>
									</td>
								</tr>
								<tr><td>&nbsp</td></tr>
								<tr>
									<td align="left" style="width:15%;">
										<font size="4px" face="华文细黑">请选择性别:</font>
									</td>
									<td align="left" style="width:45%;">
										<select name="sex">
											<option value="male" id="male">男</option>
											<option value="female" id="female">女</option>
										</select>
									</td>
								</tr>
								<tr><td>&nbsp</td></tr>
								<tr>
									<td align="left" style="width:15%;">
										<font size="4px" face="华文细黑">认证邮箱</font>
									</td>
									<td align="left" style="width:45%;">
										<input type="text" name="useremail"  style="width:280px;height:40px;" onchange="javascript:window.email(this.value)" value=""/>
									</td>
									<td align="left" style="width:40%;">
										<font size="3px" face="黑体"><p id="p4"></p></font>
									</td>
								</tr>
								<tr><td>&nbsp</td></tr>
								<tr><td>&nbsp</td></tr>
								<tr><td>&nbsp</td></tr>
								<tr>
									<td align="center" colspan="3">
										<input type="submit" class="btn btn-primary" name="submit2" value="注册" style="width:480px;height:40px;"/>
									</td>
								</tr>
								</table>
							</form>
							<br/><br/><br/><br/><br/><br/>
							<center>
								<a href="#">关于耽美</a>&nbsp|&nbsp<a href="#">耽美贴吧</a>&nbsp|&nbsp<a href="#">耽美群信息</a>&nbsp|&nbsp<a href="#">本俱乐部官方邮箱：xxxxxx@163.com</a>
							</center>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<script type="text/javascript">
		function user(value)
		{
			if(value=='')
			{
				y=document.getElementById("p1");
				y.innerHTML="<span class='glyphicon glyphicon-remove'></span>&nbsp&nbsp用户名不能为空";
				y.style.color="red";
			}
			else if(!isNaN(value.substring(0,1)))
			{
				y=document.getElementById("p1");
				y.innerHTML="<span class='glyphicon glyphicon-remove'></span>&nbsp&nbsp用户名不能以数字开头";
				y.style.color="red";
			}
			else
			{
				y=document.getElementById("p1");
				y.innerHTML="<span class='glyphicon glyphicon-ok'></span>&nbsp&nbsp用户名创建成功";
				y.style.color="rgba(4, 154, 4, 0.94)";
			}
		}


		function userpassword(value)
		{
			if(value=='')
			{
				y=document.getElementById("p2");
				y.innerHTML="<span class='glyphicon glyphicon-remove'></span>&nbsp&nbsp密码不能为空";
				y.style.color="red";
			}
			else if(value.length>0&&value.length<6)
			{
				y=document.getElementById("p2");
				y.innerHTML="<span class='glyphicon glyphicon-remove'></span>&nbsp&nbsp密码至少六位";
				y.style.color="red";
			}
			else if(value.length>=6&&value.length<10)
			{
				y=document.getElementById("p2");
				y.innerHTML="<span class='glyphicon glyphicon-ok'></span>&nbsp&nbsp密码强度中等,密码设置成功";
				y.style.color="orange";
			}
			else if(value.length>=10)
			{
				y=document.getElementById("p2");
				y.innerHTML="<span class='glyphicon glyphicon-ok'></span>&nbsp&nbsp密码强度高等,密码设置成功";
				y.style.color="rgba(4, 154, 4, 0.94)";
			}
		}

		function password(value)
		{
			x=document.getElementById("userpassword").value;
			if(x==value)
			{
				y=document.getElementById("p3");
				y.innerHTML="<span class='glyphicon glyphicon-ok'></span>&nbsp&nbsp再次输入密码成功";
				y.style.color="rgba(4, 154, 4, 0.94)";
			}
			else
			{
				y=document.getElementById("p3");
				y.innerHTML="<span class='glyphicon glyphicon-remove'></span>&nbsp&nbsp两次密码输入不一致";
				y.style.color="red";
			}
		}

		function email(value)
		{
			apos=value.indexOf("@");
			dotpos=value.lastIndexOf(".");
			if (apos<1||dotpos-apos<2) 
  			{
  				y=document.getElementById("p4");
				y.innerHTML="<span class='glyphicon glyphicon-remove'></span>&nbsp&nbsp邮箱格式错误";
				y.style.color="red";
  			}
			else 
			{
				y=document.getElementById("p4");
				y.innerHTML="<span class='glyphicon glyphicon-ok'></span>&nbsp&nbsp输入邮箱成立";
				y.style.color="rgba(4, 154, 4, 0.94)";
			}

		}
	</script>
</body>
</html>