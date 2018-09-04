<?php
require_once('../../../vendor/autoload.php');
require_once('../config/PathConfig.php');
header('Content-Type:application/json; charset=utf-8');


$post=[NULL,$_POST['comite'],$_POST['objetivos'],'0'];

  
$service=new Lib\ServiceManager\ServiceManager;


 $service->InsertController(['table'=>'comites','fields'=>['id_comite','comite','objetivos','representante'],'insert'=>$post]);



/*$teste=$post[1];
  $fp = fopen("teste.txt", "a");
   
  // Escreve "exemplo de escrita" no bloco1.txt
  $escreve = fwrite($fp, $teste);
   
  // Fecha o arquivo
  fclose($fp);*/