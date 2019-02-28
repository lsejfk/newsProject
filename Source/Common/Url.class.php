<?php
namespace Common;
if(!defined('SITE')){exit('Access denied');}
class Url{
	static private $controller;
	static private $method;


	static private function init(){
		switch (\URL_MODEL) {
			case '0':
				break;
			case '1':
				if(isset($_SERVER['PATH_INFO'])){
					self::parseUrlPathInfo();
				}
				break;
		}
		self::parseUrl();
	}

	static private function parseUrlPathInfo(){
		preg_match_all("|[^/]+/[^/]+|", $_SERVER['PATH_INFO'], $data);
		if(count($data[0])){
			foreach ($data[0] as $key => $value) {
				$tmp = explode("/",$value);
				if($key == 0){
					$_GET[\URL_PARSE_CONTROLLER] = $tmp[0];
					$_GET[\URL_PARSE_METHOD] = $tmp[1];
				}else{
					$_GET[$tmp[0]] = $tmp[1];
				}
			}
		}else{
			$tmp = explode("/",$_SERVER['PATH_INFO']);
			if(isset($tmp[1])){
				$_GET[\URL_PARSE_CONTROLLER] = $tmp[1];
			}
		}

	}
	static private function parseUrl(){
		if(!isset($_GET[\URL_PARSE_CONTROLLER]) || $_GET[\URL_PARSE_CONTROLLER] == ''){
			$_GET[\URL_PARSE_CONTROLLER] = "index";
		}
		if(!isset($_GET[\URL_PARSE_METHOD]) || $_GET[\URL_PARSE_METHOD] == ''){
			$_GET[\URL_PARSE_METHOD] = "index";
		}

		self::$controller = $_GET[\URL_PARSE_CONTROLLER];
		self::$method = $_GET[\URL_PARSE_METHOD];
	}

	static public function getC($comlete = false){
		if(!isset(self::$controller)){
			self::init();
		}
		if($comlete){
			return self::$controller.'Controller';
		}else{
			return self::$controller;
		}
	}
	static public function getMethod(){
		if(!isset(self::$method)){
			self::init();
		}
		return self::$method;
	}
}
?>