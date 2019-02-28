<?php
namespace Common;
if(!defined('SITE')){exit('Access denied');}
class View{
	private $data;
	private $viewPath;

	public function display($path = null){
		if($path == null){
			$path = $this->getViewPath();
		}
		if(file_exists($path)){
			require_once $path;
		}else{
			echo $path."doesn't exist";
		}
	}

	//include some common view
	public function inc($path){
		$envView  = array(
			$path,
			\MYPHP_VIEW."/".\VIEW_SKIN.'/'.ucfirst(Url::getC()).'/'.$path.'.view.php',
			\MYPHP_VIEW."/".\VIEW_SKIN.'/'.'Common'.'/'.$path.'.view.php'
		);
		foreach ($envView as $value) {
			if(file_exists($value)){
				require_once $value;
				break;
			}
		}
	}

	public function setData($name,$value){
		$this->data[$name] = $value;
	}

	public function getData($name = null){
		if($name == null){
			return $this->data;
		}
		return $this->data[$name];
	}

	public function getViewPath(){
		if(!isset($this->viewPath)){
			$this->viewPath = \MYPHP_VIEW."/".\VIEW_SKIN.'/'.ucfirst(Url::getC()).'/'.Url::getMethod().'.view.php';
		}
		return $this->viewPath;
	}
}
?>