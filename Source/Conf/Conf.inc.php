<?php
if(!defined('SITE')){exit('Access denied');}
define('MYPHP_APP',dirname(dirname(dirname(__FILE__))));
define('MYPHP_SOURCE',MYPHP_APP.'/Source');
define('MYPHP_MODULE',MYPHP_SOURCE.'/'.MODULE);
define('MYPHP_COMMON',MYPHP_SOURCE.'/Common');
define('MYPHP_VIEW',MYPHP_MODULE.'/View');
defined('VIEW_SKIN') ? null : define('VIEW_SKIN',"Default");

define('URL_PARSE_CONTROLLER','c');			//url parse controller type 
define('URL_PARSE_METHOD','m');				//url parse method

//define url model,0 for usual,1 for pathinfo
defined('URL_MODEL') ? null : define('URL_MODEL',0);


?>