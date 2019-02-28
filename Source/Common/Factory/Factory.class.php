<?php
namespace Common;
if(!defined('SITE')){exit('Access denied');}
class Factory{
	static public function create($type){
		if(class_exists($type)){
			return new $type();
		}else{
			throw new \Exception("class ".$type."doesn't exist!");
		}
	}
}
?>