<?php
require_once('../../../vendor/autoload.php');
require_once('../config/PathConfig.php');
//header('Content-Type:application/json; charset=utf-8');




 
  // $values=[$_POST['id'],$_POST['comite']];
   
    //echo $nome;

    $service=new Lib\ServiceManager\ServiceManager;
    
    
    $tipo=$_POST['tipo'];
$whereTipo="id_tipo=".$tipo;

$lista=$service->WhereController(['table'=>'tipodoc','fields'=>['pasta'],'where'=>$whereTipo]);




$encode=json_encode($lista);

$decode=json_decode($encode);
$pasta="";


foreach ($decode as $key) {
    $pasta=$key->pasta;
}




if($_FILES['arquivo']['tmp_name'] ===NULL){
  $data_insert=date('Y-m-d');
  
 
  
  $values=[$_POST['id'],$data_insert,$_POST['titulo'],$_POST['tipo'],$_POST['old'],$_POST['descricao']];
  
  $id=$_POST['id'];
  $where="id_documentos = ?";
  
  
   
    $service->UpdateController(['table'=>'documentos','fields'=>['id_documentos','data','titulo','id_tipo','arquivo','descricao'],'where'=>$where,'values'=>$values,'filters'=>$id]);
    
}else{
  $fileName=$_FILES['arquivo']['tmp_name'];
  $uploadDir='/var/www/ggnomotor/assets/documentos/'.$pasta.'/';
  $myDir='http://localhost/ggnomotor/assets/documentos/'.$pasta.'/';
  
  $myArray=explode('.', $_FILES['arquivo']['name']);
  $extensions=end($myArray);
  
  $data="".date('Y-m-d').date('H').date('i').time().".".$extensions;
  //$uploadFile=$uploadDir.$_FILES['arquivo']['name'];
  $uploadFile=$uploadDir.$data;
  $correctPath=$myDir.$data;
  move_uploaded_file($fileName,$uploadFile);
  $data_insert=date('Y-m-d');
  
  
  $values=[$_POST['id'],$data_insert,$_POST['titulo'],$_POST['tipo'],$correctPath,$_POST['descricao']];
  
  $id=$_POST['id'];
  $where="id_documentos = ?";
 
  
   
    $service->UpdateController(['table'=>'documentos','fields'=>['id_documentos','data','titulo','id_tipo','arquivo','descricao'],'where'=>$where,'values'=>$values,'filters'=>$id]);
    
}



$teste=$correctPath;
  $fp = fopen("teste.txt", "a");
   
 
  $escreve = fwrite($fp, $teste);
   

  fclose($fp); 
  