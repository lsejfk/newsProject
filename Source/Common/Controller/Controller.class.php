<?php
namespace Common;
if(!defined('SITE')){exit('Access denied');}
class Controller{
	protected $view;

	public function __construct(){
		$this->view = new View();
	}
	public function __call($name,$arg){
		throw new \Exception("function {$name} doesn't exist!");
	}
}

?>