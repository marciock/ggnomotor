<?php

namespace Lib\ServiceManager;

/**
* 
*/

//use Lib\ServiceManager\Sources;
abstract class View
{
	//private $content;
	//private $attributes=[];

	public function get(array $attributes = null){
		
		

		//$this->content=$content;
		$this->attributes=$attributes;
		
		

		
		return $this->show();
	}

		
	abstract protected function show();

}