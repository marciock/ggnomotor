<?php
namespace Modules\comites\controllers;

use Lib\PDOBuilder\SelectPDO;
use Lib\ServiceManager\Controller;



class SearchController extends Controller{


    protected function create(){
        $options=include '../config/DataBase.php';
       // echo $options['host'];
        $select= new SelectPDO($options);

   return  $select
            ->table($this->attributes['table'])
            ->fields($this->attributes['fields'])
            ->where($this->attributes['where'])
            ->select();
           

    }
}