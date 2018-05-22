<?php
namespace Modules\indicadores\controllers;

use Lib\PDOBuilder\SelectPDO;
use Lib\ServiceManager\Controller;



class ListController extends Controller{


    protected function create(){
        $options=include '../config/DataBase.php';
       // echo $options['host'];
        $select= new SelectPDO($options);

   return  $select
            ->table($this->attributes['table'])
            ->fields($this->attributes['fields'])
            ->select();
           

    }
}