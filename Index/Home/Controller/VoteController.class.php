<?php 

namespace Home\Controller;
use Think\Controller;
class VoteController extends Controller {
    public function vote(){
    	//分页
    	$m = M('votetitle');      
        $where = "id>0";
        $count = $m->where($where)->count();
        $p = getpage($count,20);
        $list = $m->field(true)->where($where)->order('id desc')->limit($p->firstRow, $p->listRows)->select();
        $this->assign('select', $list); // 赋值数据集
        $this->assign('page', $p->show()); // 赋值分页输出
    	//分页
    	
    	$this->display('vote');
     }


	

}

 ?>