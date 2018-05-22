<?php
namespace Modules\noticias\controllers;

use Lib\PDOBuilder\InsertPDO;
use Lib\ServiceManager\Controller;



class InsertController extends Controller{


    protected function create(){
        $options=include '../config/DataBase.php';
       // echo $options['host'];
        $insert= new InsertPDO($options);

     $insert
            ->table($this->attributes['table'])
            ->fields($this->attributes['fields'])
            ->insert($this->attributes['insert']);
           
        
       // return "deu certo";
    }
}