<?php
if(!defined('SITE')) exit('Access denied');

require_once 'Conf.inc.php';
require_once 'Functions.inc.php';

spl_autoload_register('myLoad');
spl_autoload_register('mySubLoad');

try{
	$method = Common\Url::getMethod();
	//var_dump(Common\ControllerFactory::create());
	Common\ControllerFactory::create()->$method();
}catch(Exception $e){
	exit($e->getMessage());
}

?>