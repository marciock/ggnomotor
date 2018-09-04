<?php
namespace Modules\noticias\controllers;

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
 
        
       // return "deu certo";

        
    
     /*   $update
        ->table('agua')
        ->fields(['id_cidade','id_servidor','url'])
        ->where('id_agua = ?')
        ->update(['3','1','Macauba'],'2');
    
    */
        
            
 //['1','1','umuarama']
//'id_cidade','id_servidor',

    }
}