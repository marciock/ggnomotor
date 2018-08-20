<?php
namespace Modules\privilegios\views;


/**
*
*/

use Lib\ServiceManager\View;
class ListView extends View
{


	protected function show(){
	 	$json=json_encode($this->attributes);
		echo $json;
	 	
		
	 }

}
