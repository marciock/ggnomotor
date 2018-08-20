<?php

namespace Modules\icons\views;


/**
*
*/

use Lib\ServiceManager\View;
class ListView extends View
{


	protected function show(){
	 	$json=json_encode($this->attributes);
		echo $json;
	 	//foreach($this->attributes,)

		

		//var_dump($this->attributes);

	 }

}
