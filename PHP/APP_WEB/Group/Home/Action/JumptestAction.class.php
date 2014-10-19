<?php
// 测试页面跳转，仅供测试用途
class JumptestAction extends Action {

    public function jumptest()
    {
    	/*
    	$msgTitle 操作标题 
		$message 页面提示信息 
		$status 操作状态 1表示成功 0 表示失败 具体还可以由项目本身定义规则 
		$waitSecond 跳转等待时间 单位为秒 
		$jumpUrl 跳转页面地址 
		*/
		$this->assign('msgTitle','测试跳转');
		$this->assign('message','测试跳转等待');
		$this->assign('jumpUrl','/Index/index');
    	$this->assign('waitSecond','5');		//设置跳转等待时间
		$this->success("成功！");

		/*
		$this->assign('var1','value1');
		$this->assign('var2','value2');
		$this->error('错误的参数','要跳转的URL地址');
		*/
    }

    //测试重定向
    public function redirecturl()
    {
    	
    	$this->redirect('Jumptest/jumptest','',5,'页面跳转中');
    	//$this->redirect('New/category', array('cate_id' => 2), 5, '页面跳转中...');
    	
    	/*
    	$_url = U('Jumptest/jumptest');
    	redirect($_url,5,'页面跳转中...');
		*/
    }

    //测试Model
    public function dbtest()
    {
        $menu = new Model('Menu');
        $data = $menu->select();
        $this->show(var_dump($data));
    }
}
