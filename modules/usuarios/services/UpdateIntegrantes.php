<?php
require_once('../../../vendor/autoload.php');
require_once('../config/PathConfig.php');
//header('Content-Type:application/json; charset=utf-8');




 
   $values=[$_POST['id'],$_POST['comite'],$_POST['usuarios']];
   $id=$_POST['id'];
    $where="id_integrantes = ?";
    //echo $nome;

    $service=new Lib\ServiceManager\ServiceManager;
    


 
  $service->UpdateController(['table'=>'integrantes','fields'=>['id_integrantes','id_comite','id_usuarios'],'where'=>$where,'values'=>$values,'filters'=>$id]);
  
/*
  $teste=$_POST['usuarios'];
  $fp = fopen("teste.txt", "a");
   
 
  $escreve = fwrite($fp, $teste);
   

  fclose($fp); 

  */