<?php

namespace Lib\ServiceManager;

/**
* 
*/
class Sources extends \ArrayObject
{
	//private $attributes=[];
	
	public function __construct(Array $script)
	{
		foreach ($script as   $value) {
			
			
				$this->append($value);
			
		}

		return $this->getAttributes();
	}

	

	protected function getAttributes(){

		$attr=[];

		foreach ($this->getArrayCopy() as $value) {
			
			
				$attr[]=$value;
			
		}
		//return implode('',$attr);

		return $attr;
	}


}