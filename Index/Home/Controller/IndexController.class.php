<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	
    	$this->display('land');
     }

     public function verify(){
        $verify = new \Think\Verify;
        $verify->fontSize=13;
        $verify->length=4;
        $verify->useNoise=false;
        $verify->useCurve=false;
        $verify->imageW=120;
        $verify->imageH=40;
        $verify->codeSet = '0123456789';
        $verify->entry();
    }



    Public function handle()
	{
		
		session_start();
		$username=I('post.username');
		$userpad=I('post.userpassword');
		$userpassword=md5($userpad);
		$code=I('post.code');
		
		if($username==''||$userpad=='')
		{
			echo"<script language=\"javascript\">";
	       	echo"alert(\"对不起，用户名或密码不能为空！\");location.href='".$_SERVER["HTTP_REFERER"]."'" ;
	       	echo"</script>";
		}
		else
		{	
			$where['name']=$username;
			$password=M('user')->where($where)->getField('password');
			
			
			if(!check_code($code))
			{
				
				echo"<script language=\"javascript\">";
	       		echo"alert(\"验证码错误！！\");location.href='".$_SERVER["HTTP_REFERER"]."'" ;
	       		echo"</script>";
			}
			else
			{	
				
			
				if($password==$userpassword)
				{
					
					echo"<script language=\"javascript\">";
		       		echo"alert(\"登陆成功！！\");" ;
		       		echo"</script>";
		       		$_SESSION['username']=$username;
		       		
		       		$this->success("",U('Home/Waterfall/waterfall','',''));
		       		

		       		
		       		
				}
				else
				{
					
					
					echo"<script language=\"javascript\">";
		       		echo"alert(\"对不起，用户名或密码错误！！\");location.href='".$_SERVER["HTTP_REFERER"]."'" ;
		       		echo"</script>";
		       		
				}
				

			}
			
			
		}

		
		
	}
	

}
?>