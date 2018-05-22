<?php

namespace Lib\ServiceManager;

/**
* 
*/


abstract class View
{
	private $name_view;
	private $view_params;

	public function __construct($name_view =null,array $view_params=null){
		
		if($name_view !=null){
			$this->setView($name_view);
			$this->$view_params=$view_params;
		}

		
	}

	public function setView($name_view){

		if(file_exists($name_view)){
            $this->name_view = $name_view;
		}
        else{
            throw new Exception("View File '$name_view' don't exists");       
        }
    	
	}
	public function getView(){

		return $this->name_view;
	}

	public function getContents()
    {
       // ob_start();
        if(isset($this->name_view)){
            $class=$this->name_view;
			
        }

        return call_user_func_array([new $class,'show'],$this->view_params);  
    }
      
    /**
    * Imprime o arquivo de visualização 
    */
    public function showContents()
    {
        echo $this->getContents();
       // exit;
    }
	

	


}