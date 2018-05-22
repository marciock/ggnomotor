<?php

namespace Lib\ServiceManager;

/**
* 
*/

use Lib\ServiceManager\Sources;
abstract class Service
{
	//private $content;
	private $attributes;

	public function get(Sources $attributes = null){
		
		
		$this->attributes=$attributes;
		
		return $this->create();
	}

	

	
	

	abstract protected function create();

}