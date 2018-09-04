<?php
require_once('../../../vendor/autoload.php');
require_once('../config/PathConfig.php');
//header('Content-Type:application/json; charset=utf-8');




 
   $values=[$_POST['id'],$_POST['setor']];
   $id=$_POST['id'];
    $where="id_setor = ?";
    //echo $nome;

    $service=new Lib\ServiceManager\ServiceManager;
    


 
  $service->UpdateController(['table'=>'setor','fields'=>['id_setor','setor'],'where'=>$where,'values'=>$values,'filters'=>$id]);
  


$teste=$_POST['id'];
  $fp = fopen("teste.txt", "a");
   
 
  $escreve = fwrite($fp, $teste);
   

  fclose($fp); 
  