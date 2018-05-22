<?php
require_once('../../../vendor/autoload.php');
require_once('../config/PathConfig.php');
header('Content-Type:application/json; charset=utf-8');



$fileName=$_FILES['imagem']['tmp_name'];
$uploadDir='/var/www/ggnomotor/assets/noticias/';
//$myDir='http://localhost/ggnomotor/assets/noticias/'.$_POST['tipo'].'/';
$data="".date('Y-m-d').date('H').date('i')."";


$uploadFile=$uploadDir.$_POST['id_unidade'].$data.".jpg";
$correctPath=$myDir.$_FILES['imagem']['name'];
  move_uploaded_file($fileName,$uploadFile);


$dbData=date('Y-m-d');
$post=[NULL,$_POST['id_unidade'],$_POST['titulo'],$_POST['resumo'],$_POST['descricao'],$dbData,$uploadFile];

   $service=new Lib\ServiceManager\ServiceManager;


 $service->InsertController(['table'=>'noticias','fields'=>['id_noticias','id_unidade','titulo','resumo','descricao','data','imagem'],'insert'=>$post]);

$teste=json_encode($post);

  $fp = fopen("teste.txt", "a");
   
  // Escreve "exemplo de escrita" no bloco1.txt
  $escreve = fwrite($fp,$teste);
   
  // Fecha o arquivo
  fclose($fp);
  