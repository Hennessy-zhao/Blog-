<?php
namespace Home\Controller;
use Think\Controller;
class ContentController extends Controller {
    public function content(){
    	$title=I('get.title');
    	$host=I('get.host');
    	$_SESSION['title']=$title;
    	$_SESSION['host']=$host;
    	$this->assign('title', $title);
    	$this->assign('host',$host);


    	//分页
    	
    	$m = M('message');      
        $where['title'] = $title;
        $count = $m->where($where)->count();
        $p = getpage($count,20);
        $list = $m->field(true)->where($where)->order('id')->limit($p->firstRow, $p->listRows)->select();
        $this->assign('select', $list); // 赋值数据集
        $this->assign('page', $p->show()); // 赋值分页输出

        $num=1;
        $this->assign('num',$num);
        $this->assign('count',$count);
        

    	//分页

        
    	if($count==0)
    	{
    		$where['title']=$title;
			$data=M('title')->where($where)->delete();
		    $this->success("",U('Home/Message/message','',''));

    	}

    	
    	

    	$this->display('content');
    }

    public function handle(){
    	$comment=I('post.comment');
     	$title=$_SESSION['title'];
     	$user=$_SESSION['username'];

     	if($comment=='')
     	{
     		echo"<script language=\"javascript\">";
	       	echo"alert(\"对不起，评论内容不能为空\");location.href='".$_SERVER["HTTP_REFERER"]."'" ;
	       	echo"</script>";
     	}
     	else
     	{
     	
	    	$data=array(
					'user'=>$user,
					'title'=>$title,
					'message'=>$comment,
					'lastdate'=>date('y-m-d h:i:s',time())
					
				);
							
				$result=M('message')->add($data);
				if($result)
				{
					echo"<script language=\"javascript\">";
			       	echo"location.href='".$_SERVER["HTTP_REFERER"]."'" ;
			       	echo"</script>";
				}
		}
    }



    public function delete1()
    {
    	$id=I('post.id');
    	$name=I('post.name');
    	$username=$_SESSION['username'];
    	$host=$_SESSION['host'];
    	
    	if($username==$host||$username==$name)
    	{
    		$where['id']=$id;
			$data=M('message')->where($where)->delete();
			if($data)
			{
				echo"<script language=\"javascript\">";
	       		echo"location.href='".$_SERVER["HTTP_REFERER"]."'" ;
	       		echo"</script>";
			}
			else
			{
				echo"<script language=\"javascript\">";
	       		echo"alert(\"删除失败\");location.href='".$_SERVER["HTTP_REFERER"]."'" ;
	       		echo"</script>";
			}


    	}
    	else
    	{
    			echo"<script language=\"javascript\">";
	       		echo"alert(\"对不起，你不能删除此信息\");location.href='".$_SERVER["HTTP_REFERER"]."'" ;
	       		echo"</script>";
    	}
    	

    }

    public function addcomment()
    {
    	$addcomment=I('post.add_comment');
    	$num=I('get.num')-1;
    	
    	if($addcomment=='')
    	{
    		echo"<script language=\"javascript\">";
	       	echo"alert(\"对不起，评论信息不能为空\");location.href='".$_SERVER["HTTP_REFERER"]."'" ;
	       	echo"</script>";
    	}
    	else
    	{
    		$data=array(
					'adduser'=>$_SESSION['username'],
					'title'=>$_SESSION['title'],
					'floot'=>$num,
					'addcomment'=>$addcomment
					
				);
							
			$result=M('addcomment')->add($data);
			if($result)
			{
				echo"<script language=\"javascript\">";
			    echo"location.href='".$_SERVER["HTTP_REFERER"]."'" ;
			    echo"</script>";
			}
    	}
	
    }



}



?>




