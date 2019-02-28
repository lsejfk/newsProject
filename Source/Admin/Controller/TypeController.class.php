<?php
namespace Admin\Controller;
if(!defined('SITE')){exit('Access denied');}
class TypeController extends \Common\Controller{
	public function index(){
		var_dump("index...");
	}
	public function add(){
		var_dump("add...");
		$this->view->setData('name','Michael Shen');
		$this->view->setData('email','214915272@qq.com');
		$this->view->display();

	}
	public function test(){
		var_dump("test...");
		$this->view->inc('test');
		$this->view->display();
	}
}

?>