<?php
namespace Common;
if(!defined('SITE')){exit('Access denied');}
class ControllerFactory extends Factory{
	static public function create($type=null){
		$controller = '\\'.MODULE.'\\'.'Controller\\'.ucfirst(Url::getC()).'Controller';
		return parent::create($controller);
	}
}
?>