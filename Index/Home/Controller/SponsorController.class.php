<?php 

namespace Home\Controller;
use Think\Controller;
class SponsorController extends Controller {
    public function sponsor(){
    	
    	$this->display('sponsor');
     }


     public function handle(){
     	
     	if(I('post.title')=='')
     	{
     		echo"<script language=\"javascript\">";
	       	echo"alert(\"对不起，标题不能为空\");location.href='".$_SERVER["HTTP_REFERER"]."'" ;
	       	echo"</script>";
     	}
     	else{
     		$toptitle=I('post.title');
     		$desc=I('post.desc');
     		$title=array();
     		$address=array();
     		$title[1]=I('post.title1');
     		$address[1]=I('post.address1');
     		$title[2]=I('post.title2');
     		$address[2]=I('post.address2');
     		$title[3]=I('post.title3');
     		$address[3]=I('post.address3');
     		$title[4]=I('post.title4');
     		$address[4]=I('post.address4');
     		$title[5]=I('post.title5');
     		$address[5]=I('post.address5');
     		$title[6]=I('post.title6');
     		$address[6]=I('post.address6');
     		$title[7]=I('post.title7');
     		$address[7]=I('post.address7');
     		$title[8]=I('post.title8');
     		$address[8]=I('post.address8');
     		$title[9]=I('post.title9');
     		$address[9]=I('post.address9');
     		$title[10]=I('post.title10');
     		$address[10]=I('post.address10');
     		$title[11]=I('post.title11');
     		$address[11]=I('post.address11');
     		$title[12]=I('post.title12');
     		$address[12]=I('post.address12');
     		$title[13]=I('post.title13');
     		$address[13]=I('post.address13');
     		$title[14]=I('post.title14');
     		$address[14]=I('post.address14');
     		$title[15]=I('post.title15');
     		$address[15]=I('post.address15');
     		$title[16]=I('post.title16');
     		$address[16]=I('post.address16');
     		$title[17]=I('post.title17');
     		$address[17]=I('post.address17');
     		$title[18]=I('post.title18');
     		$address[18]=I('post.address18');
     		$title[19]=I('post.title19');
     		$address[19]=I('post.address19');
     		$title[20]=I('post.title20');
     		$address[20]=I('post.address20');


     		$where['title']=$toptitle;
			$resultt=M('votetitle')->where($where)->select();
			if($resultt!=NULL)
			{
				echo"<script language=\"javascript\">";
	       		echo"alert(\"对不起，该投票标题已被创建！\");location.href='".$_SERVER["HTTP_REFERER"]."'" ;
	       		echo"</script>";
			}

     		$i=1;
     		while($title[$i]!='')
     		{
     			$i++;
     		}
     		if($i<3)
     		{
     			echo"<script language=\"javascript\">";
	       		echo"alert(\"对不起，选项至少为2两个！\");location.href='".$_SERVER["HTTP_REFERER"]."'" ;
	       		echo"</script>";
     		}
     		else
     		{
     			$data=array(
							'title'=>$toptitle,
							'describt'=>$desc,
							'user'=>$_SESSION['username'],
							'lastdate'=>date('y-m-d h:i:s',time())
							);
				$result=M('votetitle')->add($data);

     			if($address[1]=='')
     			{
     				$k=1;
     				while($title[$k]!='')
     				{
     					$data1=array(
							'Bigtitle'=>$toptitle,
							'user'=>$_SESSION['username'],
							'title'=>$title[$k],
							'img'=>''
							);
						$result1=M('vote')->add($data1);
						$k++;
     				}
     			}
     			else
     			{
     				$k=1;
     				while($title[$k]!='')
     				{
     					$data1=array(
							'Bigtitle'=>$toptitle,
							'user'=>$_SESSION['username'],
							'title'=>$title[$k],
							'img'=>$address[$k]
							);
						$result1=M('vote')->add($data1);
						$k++;
     				}
     			}
     			if($result&&$result1)
     			{
     				echo"<script language=\"javascript\">";
	       			echo"alert(\"投票创建成功！！！\");" ;
	       			echo"</script>";
	       			 $this->success("",U('Home/Vote/vote','',''));
     			}
     		}
     		



     		
     	}

     	
     }
	

}

 ?>

