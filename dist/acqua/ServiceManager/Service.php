<?php

namespace Lib\ServiceManager;

/**
* 
*/

//use Lib\ServiceManager\Sources;
class Service
{
	//private $content;
	private $controller;
	private $view;
	private $attributes;
	private $params;
	//private $call_controler;
	private $call_view;

	public function get(array $attributes = null){
		
		$this->attributes[]=$attributes;
		foreach ($this->attributes as $key=>$value) {
			
			if($key=="controller" || $key=="Controller"){

					//$this->setController($value);
					//return $this;

			}

			if($key=="view" || $key=="View"){

					$this->view=$value;
						return $this->view;
			}

			$this->params=$value;

		}	

		return $this->call();
	}

	public function setController($params){

		//echo $value;
		//$this->controller=new $controller;

		//$this->controller->get($this->params);

	//	$this->controller=$controller;
		//return $this;
		
	}
	public function setView(array $controller){

		$this->call_view=new $this->view;

		return $this->call_view->get($controller);

	}

	public function call(){
		 
		return $this->setView("teste");

	}

	

	 

}