<?php
require_once('../../../vendor/autoload.php');
require_once('../config/PathConfig.php');
//header('Content-Type:application/json; charset=utf-8');




 
   $values=[$_POST['id'],$_POST['unidade']];
   $id=$_POST['id'];
    $where="id_unidade = ?";
    //echo $nome;

    $service=new Lib\ServiceManager\ServiceManager;
    


 
  $service->UpdateController(['table'=>'unidades','fields'=>['id_unidade','unidade'],'where'=>$where,'values'=>$values,'filters'=>$id]);
  


$teste=$_POST['id'];
  $fp = fopen("teste.txt", "a");
   
 
  $escreve = fwrite($fp, $teste);
   

  fclose($fp); 
  