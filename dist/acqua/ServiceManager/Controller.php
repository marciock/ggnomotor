<?php

namespace Lib\ServiceManager;

/**
* 
*/

//use Lib\ServiceManager\Sources;
abstract class Controller
{
	//private $content;
	//private $attributes=[];

	public function get(array $attributes=null){
		
		

		//$this->content=$content;
		$this->attributes=$attributes;
		

	/*	$this->filter();
		$this->sanitize();
		$this->validate();
		$this->manager();*/
		return $this->create();
	}

	

	
	/*abstract protected function filter();
	abstract protected function sanitize();
	abstract protected function validate();
	abstract protected function manager();*/

	abstract protected function create();

}