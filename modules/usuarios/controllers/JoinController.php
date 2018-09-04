<?php
namespace Modules\usuarios\controllers;

use Lib\PDOBuilder\SelectPDO;
use Lib\ServiceManager\Controller;



class JoinController extends Controller{


    protected function create(){
        $options=include '../config/DataBase.php';
       // echo $options['host'];
       $select= new SelectPDO($options);

       return  $select
                ->table($this->attributes['table'])
                ->fields($this->attributes['fields'])
                ->join($this->attributes['join'])
                ->select();
          

    }
}



/*

    $select= new SelectPDO($options);

   return  $select
            ->table($this->attributes['table'])
            ->fields($this->attributes['fields'])
            ->join($this->attributes['join'])
            ->select();
*/