<?php
if(!defined('SITE')) exit('Access denied');

//find class by namespace
function myLoad($className){
	$path = MYPHP_SOURCE.'/'.str_replace('\\', '/', $className).'.class.php';
	if(file_exists($path)){
		require_once $path;
	}
}


//find class at subdirectories
function mySubLoad($className){
	$arr = scandir(MYPHP_COMMON);
	$name = explode('\\', $className);
	foreach($arr as $val){
		if($val == '.' || $val == '..' || is_file(MYPHP_COMMON.'/'.$val)){
			continue;
		}
		$path = MYPHP_COMMON.'/'.$val.'/'.$name[count($name) - 1].'.class.php';
		if(file_exists($path)){
			require_once $path;
			return true;
		}
	}
	return false;
}

?>