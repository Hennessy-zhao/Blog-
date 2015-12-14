<?php
namespace Home\Controller;
use Think\Controller;
class VotecontentController extends Controller {
    public function Votecontent(){
    	$title=I('get.title');
    	$_SESSION['title']=$title;
    	$host=I('get.host');
    	$_SESSION['host']=$host;
    	$where['title']=$title;
    	$data1=M('votetitle')->where($where)->select();
    	$describt=$data1[0]['describt'];

    	$where2['Bigtitle']=$title;
		$where2['user']=$host;					
		$data=M('vote')->where($where2)->select();
		if($data[0]['img']!='')
		{
			$this->assign('Bigtitle',$title);
    		$this->assign('host',$host);
    		$this->assign('describt',$describt);
			$this->assign('Bigtitle',$title);
    		$this->assign('host',$host);
    		$this->assign('describt',$describt);
    		$this->assign('data2',$data);

    		$select=array();
    		$k=0;
    		foreach ($data as $value) {
    			$select[$k]=$value;
    			$k++;
    		}

    		$this->assign('select',$select);

    		//解决盗图问题
    			
    			
    			$i=0;
    			$image=array();
    		foreach ($data as $value) {
    			
    			$url=$value['img'];
    			$dir=pathinfo($url);
				$host=$dir['dirname'];
				$host=$dir['dirname'];
				$refer=$host.'/';
				$ch=curl_init($url);
				curl_setopt($ch, CURLOPT_REFERER, $refer);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				curl_setopt($ch, CURLOPT_BINARYTRANSFER, 1);
				$data=curl_exec($ch);
				$image[$i]=base64_encode($data);
				$this->url=$url;
				curl_close($ch);
				header('Content-type:image/jpeg');
				
				$this->image=$image;
				$i++;
				
    		}

    		


			$this->display('votecontent2');
		}
		else
		{
			$this->assign('Bigtitle',$title);
    		$this->assign('host',$host);
    		$this->assign('describt',$describt);
    		$this->assign('data',$data);
			$this->assign('Bigtitle',$title);
    		$this->assign('host',$host);
    		$this->assign('describt',$describt);
			$this->display('votecontent1');
		}

    }


    public function handle(){
    	$vote=I('post.vote');
    
		$where['title']=$_SESSION['title'];
		$where['user']=$_SESSION['host'];
		$data=M('votetitle')->where($where)->select();
		$allname=$data[0]['votor'];
		$arr=explode(",",$allname);
		$i=0;
		$k=0;
		foreach ($arr as $value) {
			if($value==$_SESSION['username'])
				$k=1;
		}
		
		
		if($k==1)
		{
			echo"<script language=\"javascript\">";
	       	echo"alert(\"对不起,您已经投过票了！\");location.href='".$_SERVER["HTTP_REFERER"]."'" ;
	       	echo"</script>";
		}
		else{
		
			//向vote表中改变票数和投票人
			
	    	$where['Bigtitle']=$_SESSION['title'];
			$where['user']=$_SESSION['host'];
			$where['title']=$vote;					
			$data=M('vote')->where($where)->select();
			$num=$data[0]['vote']+1;
			$name=$data[0]['votor'].','.$_SESSION['username'];
			$where1['Bigtitle']=$_SESSION['title'];
			$where1['user']=$_SESSION['host'];
			$where1['title']=$vote;
			$update['vote']=$num;
			$update['votor']=$name;
			$result1=M('vote')->where($where1)->save($update);
			
			
			$allname2=$allname.','.$_SESSION['username'];
			$where['title']=$_SESSION['title'];
			$where['user']=$_SESSION['host'];
			$update['votor']=$allname2;
			$result=M('votetitle')->where($where)->save($update);
			
			
			if($result1&&$result)
			{
				echo"<script language=\"javascript\">";
	       		echo"alert(\"投票成功！！\");location.href='".$_SERVER["HTTP_REFERER"]."'" ;
	       		echo"</script>";
			}
			
			
		
		}


		
    	
    	
    }



    public function handleimage()
	{
		$vote=I('post.select');
		
		$where['title']=$_SESSION['title'];
		$where['user']=$_SESSION['host'];
		$data=M('votetitle')->where($where)->select();
		$allname=$data[0]['votor'];
		$arr=explode(",",$allname);
		$i=0;
		$k=0;
		foreach ($arr as $value) {
			if($value==$_SESSION['username'])
				$k=1;
		}
		
		
		if($k==1)
		{
			echo"<script language=\"javascript\">";
	       	echo"alert(\"对不起,您已经投过票了！\");location.href='".$_SERVER["HTTP_REFERER"]."'" ;
	       	echo"</script>";
		}
		else{
		
			//向vote表中改变票数和投票人
			
	    	$where['Bigtitle']=$_SESSION['title'];
			$where['user']=$_SESSION['host'];
			$where['title']=$vote;					
			$data=M('vote')->where($where)->select();
			$num=$data[0]['vote']+1;
			$name=$data[0]['votor'].','.$_SESSION['username'];
			$where1['Bigtitle']=$_SESSION['title'];
			$where1['user']=$_SESSION['host'];
			$where1['title']=$vote;
			$update['vote']=$num;
			$update['votor']=$name;
			$result1=M('vote')->where($where1)->save($update);
			
			
			$allname2=$allname.','.$_SESSION['username'];
			$where['title']=$_SESSION['title'];
			$where['user']=$_SESSION['host'];
			$update['votor']=$allname2;
			$result=M('votetitle')->where($where)->save($update);
			
			
			if($result1&&$result)
			{
				echo"<script language=\"javascript\">";
	       		echo"alert(\"投票成功！！\");location.href='".$_SERVER["HTTP_REFERER"]."'" ;
	       		echo"</script>";
			}
			
			
		
		}
	}





}
?>