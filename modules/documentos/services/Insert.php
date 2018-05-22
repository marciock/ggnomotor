<?php
require_once('../../../vendor/autoload.php');
require_once('../config/PathConfig.php');
header('Content-Type:application/json; charset=utf-8');



$fileName=$_FILES['arquivo']['tmp_name'];
$uploadDir='/var/www/ggnomotor/assets/documentos/'.$_POST['tipo'].'/';
$myDir='http://localhost/ggnomotor/assets/documentos/'.$_POST['tipo'].'/';

$myArray=explode('.', $_FILES['arquivo']['name']);
$extensions=end($myArray);

$data="".date('Y-m-d').date('H').date('i').$extensions;
//$uploadFile=$uploadDir.$_FILES['arquivo']['name'];
$uploadFile=$uploadDir.$_POST['id_documentos'].$data;
$correctPath=$myDir.$_FILES['arquivo']['name'];
  move_uploaded_file($fileName,$uploadFile);


$data=date('Y-m-d');
$post=[NULL,$data,$_POST['titulo'],$_POST['setor'],$_POST['chave'],$correctPath];



  //  $post=$_POST;
  

   $service=new Lib\ServiceManager\ServiceManager;


 //$service->InsertController(['table'=>'documentos','fields'=>['id_documentos','data','titulo','id_setor','chave','arquivo'],'insert'=>$post]);



$teste=$correctPath;
  $fp = fopen("teste.txt", "a");
   
  // Escreve "exemplo de escrita" no bloco1.txt
  $escreve = fwrite($fp, $teste);
   
  // Fecha o arquivo
  fclose($fp);