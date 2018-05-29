<?php
require_once('../../../vendor/autoload.php');
require_once('../config/PathConfig.php');
header('Content-Type:application/json; charset=utf-8');



$fileName=$_FILES['arquivo']['tmp_name'];
$uploadDir='/var/www/ggnomotor/assets/documentos/'.$_POST['tipo'].'/';
$myDir='http://localhost/ggnomotor/assets/documentos/'.$_POST['tipo'].'/';

$myArray=explode('.', $_FILES['arquivo']['name']);
$extensions=end($myArray);

$data="".date('Y-m-d').date('H').date('i').".".$extensions;
//$uploadFile=$uploadDir.$_FILES['arquivo']['name'];
$uploadFile=$uploadDir.$data;
$correctPath=$myDir.$data;
move_uploaded_file($fileName,$uploadFile);


$data_insert=date('Y-m-d');
$post=[NULL,$data_insert,$_POST['titulo'],$_POST['setor'],$_POST['tipo'],$_POST['chave'],$correctPath];



  //  $post=$_POST;
  

   $service=new Lib\ServiceManager\ServiceManager;


 $service->InsertController(['table'=>'documentos','fields'=>['id_documentos','data','titulo','id_setor','tipo','chave','arquivo'],'insert'=>$post]);



$teste=$post[2];
  $fp = fopen("teste.txt", "a");
   
  // Escreve "exemplo de escrita" no bloco1.txt
  $escreve = fwrite($fp, $teste);
   
  // Fecha o arquivo
  fclose($fp);