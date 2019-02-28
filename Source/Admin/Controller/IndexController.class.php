<?php
namespace Admin\Controller;
if(!defined('SITE')){exit('Access denied');}
class IndexController extends \Common\Controller{
	public function index(){
		var_dump("index...");
	}
	public function hello(){
		var_dump("hello...");
	}
}
?>