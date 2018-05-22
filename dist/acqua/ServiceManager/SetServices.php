<?php

namespace Lib\ServiceManager;

/**
* 
*/

//use Lib\ServiceManager\Sources;
abstract class SetServices
{
	//private $content;
	//private $attributes=[];

	public function get(array $attributes = null){
		
		

		//$this->content=$content;
		$this->attributes=$attributes;
		
		

		
		return $this->run();
	}

		
	abstract protected function run();

}