<?php


namespace Lib\ServiceManager;

use Lib\ServiceManager\ServiceBuilder;
class ServiceManager
{
	
	//public function run($url);
	public  function builder($method, array $params){


		$tag=(new ServiceBuilder)
		->params($params)
		->call($method);



		return $tag;
	}

	public function __call($method,$params){
		return $this->builder($method,$params);
	}
/*
	public static function _callStatic($method, $params){

		return self::builder($method,$params);
	}*/
}