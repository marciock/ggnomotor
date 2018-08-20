<?php
require_once('../../../vendor/autoload.php');
require_once('../config/PathConfig.php');
//header('Content-Type:application/json; charset=utf-8');


$service=new Lib\ServiceManager\ServiceManager;

$tipo=$_POST['tipo'];
$where="id_tipo=".$tipo;

$lista=$service->WhereController(['table'=>'tipodoc','fields'=>['pasta'],'where'=>$where]);




$encode=json_encode($lista);

$decode=json_decode($encode);
$pasta="";


foreach ($decode as $key) {
    $pasta=$key->pasta;
}



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


$post=[NULL,$data_insert,$_POST['titulo'],$_POST['tipo'],$correctPath,$_POST['descricao']];
 


 $service->InsertController(['table'=>'documentos','fields'=>['id_documentos','data','titulo','id_tipo','arquivo','descricao'],'insert'=>$post]);




  $teste=$data_insert;
  $fp = fopen("teste.txt", "a");
   
  // Escreve "exemplo de escrita" no bloco1.txt
  $escreve = fwrite($fp, $teste);
   
  // Fecha o arquivo
  fclose($fp);

  //  $post=$_POST;
  


