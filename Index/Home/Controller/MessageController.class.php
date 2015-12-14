<?php
namespace Home\Controller;
use Think\Controller;
class messageController extends Controller {
    public function message(){
    	//分页
    	$m = M('title');      
        $where = "id>0";
        $count = $m->where($where)->count();
        $p = getpage($count,20);
        $list = $m->field(true)->where($where)->order('id desc')->limit($p->firstRow, $p->listRows)->select();
        $this->assign('select', $list); // 赋值数据集
        $this->assign('page', $p->show()); // 赋值分页输出
    	//分页
    	
    	$this->display('message');
     }

     public function message_submit(){
     	$title=I('post.title');
     	$content=I('post.content');
     	$user=$_SESSION['username'];
     	$where['title']=$title;
		$result=M('title')->where($where)->select();
		if($user==NULL)
		{
			echo"<script language=\"javascript\">";
	       	echo"alert(\"对不起，请先登陆后再发帖\");" ;
	       	echo"</script>";
		    $this->success("",U('Home/Index/index','',''));

		}
     	else if($title==''||$content=='')
     	{
     		echo"<script language=\"javascript\">";
	       	echo"alert(\"对不起，标题或内容不能为空\");location.href='".$_SERVER["HTTP_REFERER"]."'" ;
	       	echo"</script>";
     	}
     	else if($result!=NULL)
     	{
     		echo"<script language=\"javascript\">";
		    echo"alert(\"对不起，你不能使用已使用的标题\");location.href='".$_SERVER["HTTP_REFERER"]."'" ;
		    echo"</script>";
     	}
     	else
     	{
	     	$data1=array(
				'user'=>$user,
				'title'=>$title,
				'lastdate'=>date('y-m-d h:i:s',time())
			);

			$data2=array(
				'user'=>$user,
				'title'=>$title,
				'message'=>$content,
				'lastdate'=>date('y-m-d h:i:s',time())
				
			);
						
			$result1=M('title')->add($data1);
			$result2=M('message')->add($data2);
			if($result1&&$result2)
			{
				echo"<script language=\"javascript\">";
		       	echo"location.href='".$_SERVER["HTTP_REFERER"]."'" ;
		       	echo"</script>";
			}
		}



     }
	

}
?>





