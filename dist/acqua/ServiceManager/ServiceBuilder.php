<?php
//require_once('PathConfig.php');
namespace Lib\ServiceManager;

/**
*
*/

use Lib\ServiceManager\Sources;
class ServiceBuilder
{

	private $params;
	public function params(array $params){

		$this->params[]=($params[0]) ?? null;
		unset($params[0]);

		$this->params[]=new Sources($params);
		return $this;

	}

	public function call($method){

	//	requite_once('../PathConfig.php');

		$path=PATH_CONFIG[$method];
		//$path="Modules\Views\Home\\";
		$class=$path.ucfirst($method);



		return call_user_func_array([new $class,'get'],$this->params);
	}

}
