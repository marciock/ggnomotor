<?php
require_once('../../../vendor/autoload.php');
require_once('../config/PathConfig.php');
//header('Content-Type:application/json; charset=utf-8');




 
   $values=[$_POST['id'],$_POST['comite'],$_POST['objetivos'],$_POST['representante']];
   $id=$_POST['id'];
    $where="id_comite = ?";
    //echo $nome;

    $service=new Lib\ServiceManager\ServiceManager;
    


 
  $service->UpdateController(['table'=>'comites','fields'=>['id_comite','comite','objetivos','representante'],'where'=>$where,'values'=>$values,'filters'=>$id]);
  


