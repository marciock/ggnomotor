<?php
require_once('../../../vendor/autoload.php');
require_once('../config/PathConfig.php');


    $service=new Lib\ServiceManager\ServiceManager;
 

if($_FILES['arquivo']['tmp_name'] ===NULL){
  $data_insert=date('Y-m-d');
  
 
  
  $values=[$_POST['id'],$_POST['titulo'],$_POST['descricao'],$_POST['mes'],$_POST['ano'],$_POST['old']];
  
  $id=$_POST['id'];
  $where="id_indicadores = ?";
  
  
   
    $service->UpdateController(['table'=>'indicadores','fields'=>['id_indicadores','titulo','descricao','mes','ano','arquivo'],'where'=>$where,'values'=>$values,'filters'=>$id]);
    
}else{
  $fileName=$_FILES['arquivo']['tmp_name'];
  $uploadDir='/var/www/ggnomotor/assets/indicadores/';
  $myDir='http://localhost/ggnomotor/assets/indicadores/';
  
  $myArray=explode('.', $_FILES['arquivo']['name']);
  $extensions=end($myArray);
  
  $data="".date('Y-m-d').date('H').date('i').time().".".$extensions;
  //$uploadFile=$uploadDir.$_FILES['arquivo']['name'];
  $uploadFile=$uploadDir.$data;
  $correctPath=$myDir.$data;
  move_uploaded_file($fileName,$uploadFile);
 
  
  
  $values=[$_POST['id'],$_POST['titulo'],$_POST['descricao'],$_POST['mes'],$_POST['ano'],$correctPath];
  
  $id=$_POST['id'];
  $where="id_indicadores = ?";
 
  
   
    $service->UpdateController(['table'=>'indicadores','fields'=>['id_indicadores','titulo','descricao','mes','ano','arquivo'],'where'=>$where,'values'=>$values,'filters'=>$id]);
    
}



$teste=$correctPath;
  $fp = fopen("teste.txt", "a");
   
 
  $escreve = fwrite($fp, $teste);
   

  fclose($fp); 
  