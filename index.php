<?php
define('SITE','mysite.com');
define('MODULE','Home');
require_once 'Source/Conf/Action.inc.php';
use Common\Url;

var_dump(Url::getC());
var_dump(Url::getMethod());

?>