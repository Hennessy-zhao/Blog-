<?php
namespace Home\Controller;
use Think\Controller;
class EnrollController extends Controller {
    public function enroll(){
    	$this->display('enroll');


    }

    public function handle(){
    	if(I('post.username')==NULL||I('post.userpassword')==NULL||I('post.password')==NULL||
			I('post.sex')==NULL||I('post.useremail')==NULL)
		{
			echo"<script language=\"javascript\">";
	       	echo"alert(\"对不起，以上信息必须填写完整\");location.href='".$_SERVER["HTTP_REFERER"]."'" ;
	       	echo"</script>";
		}
		else
		{
			$username=I('post.username');			
			$userpad=I('post.userpassword');	
			$password=I('post.password');     
			$sex=I('post.sex');    
			$useremail=I('post.useremail');
			$userpassword=md5($userpad);

			if($userpad!=$password)
			{
				echo"<script language=\"javascript\">";
		       	echo"alert(\"对不起，两次密码输入不一致\");location.href='".$_SERVER["HTTP_REFERER"]."'" ;
		       	echo"</script>";
			}
			else
			{
				$where['name']=$username;
				$vote=M('user')->where($where)->select();
				if($vote!=NULL)
				{
					echo"<script language=\"javascript\">";
		       		echo"alert(\"对不起，此用户名已被注册\");location.href='".$_SERVER["HTTP_REFERER"]."'" ;
		       		echo"</script>";
				}
				else
				{
					$data=array(
					'name'=>$username,
					'password'=>$userpassword,
					'sex'=>$sex,
					'email'=>$useremail
					);
					
					$result=M('user')->add($data);
					echo"<script language=\"javascript\">";
		       		echo"alert(\"注册成功！\");" ;
		       		echo"</script>";
		       		$this->success('',U('Home/Index/index','',''));
					

				}


			}
		}


	}
	




}