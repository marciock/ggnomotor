<?php
require_once('../../../vendor/autoload.php');
require_once('../config/PathConfig.php');
header('Content-Type:application/json; charset=utf-8');



$fileName=$_FILES['arquivo']['tmp_name'];
$uploadDir='/var/www/ggnomotor/assets/documentos/'.$_POST['tipo'].'/';
$myDir='http://localhost/ggnomotor/assets/comites/'.$_POST['tipo'].'/';

$uploadFile=$uploadDir.$_FILES['arquivo']['name'];
$correctPath=$myDir.$_FILES['arquivo']['name'];
  move_uploaded_file($fileName,$uploadFile);


$data=date('Y-m-d');
$post=[NULL,$_POST['titulo'],$_POST['comites'],$_POST['chave'],$_POST['descricao'],$correctPath];



  //  $post=$_POST;
  

   $service=new Lib\ServiceManager\ServiceManager;


 $service->InsertController(['table'=>'comites','fields'=>['id_comite','titulo','id_tipo_comite','chave','descricao','arquivo'],'insert'=>$post]);


/*
$teste=$correctPath;
  $fp = fopen("teste.txt", "a");
   
  // Escreve "exemplo de escrita" no bloco1.txt
  $escreve = fwrite($fp, $teste);
   
  // Fecha o arquivo
  fclose($fp);*/