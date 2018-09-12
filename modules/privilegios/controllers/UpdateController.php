<?php
namespace Modules\privilegios\controllers;

use Lib\PDOBuilder\UpdatePDO;
use Lib\ServiceManager\Controller;



class UpdateController extends Controller{


    protected function create(){
        $options=include '../config/DataBase.php';
       // echo $options['host'];
        $update= new UpdatePDO($options);

     $update
            ->table($this->attributes['table'])
            ->fields($this->attributes['fields'])
            ->where($this->attributes['where'])
            ->update($this->attributes['values'],$this->attributes['filters']);
 
    }
}