<?php
require_once('../../../vendor/autoload.php');
require_once('../config/PathConfig.php');
header('Content-Type:application/json; charset=utf-8');



$fileName=$_FILES['arquivo']['tmp_name'];
$uploadDir='/var/www/ggnomotor/assets/indicadores/';
$myDir='http://localhost/ggnomotor/assets/indicadores/';

$uploadFile=$uploadDir.$_FILES['arquivo']['name'];
$correctPath=$myDir.$_FILES['arquivo']['name'];
  move_uploaded_file($fileName,$uploadFile);



$post=[NULL,$_POST['titulo'],$_POST['descricao'],$_POST['mes'],$_POST['ano'],$correctPath];



  //  $post=$_POST;
  

   $service=new Lib\ServiceManager\ServiceManager;


 $service->InsertController(['table'=>'indicadores','fields'=>['id_indicadores','titulo','descricao','mes','ano','arquivo'],'insert'=>$post]);


/*
$teste=$correctPath;
  $fp = fopen("teste.txt", "a");
   
  // Escreve "exemplo de escrita" no bloco1.txt
  $escreve = fwrite($fp, $teste);
   
  // Fecha o arquivo
  fclose($fp);*/