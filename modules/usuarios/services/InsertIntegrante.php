<?php
require_once('../../../vendor/autoload.php');
require_once('../config/PathConfig.php');



$post=[NULL,$_POST['comite'],$_POST['usuarios']];


//$clausules="chave LIKE '%".$_POST['chave']."%'";
 

   $service=new Lib\ServiceManager\ServiceManager;

   

 
   $service->InsertController(['table'=>'integrantes','fields'=>['id_integrantes','id_comite','id_usuarios'],'insert'=>$post]);

   
 //$icones=$service->ListController(['table'=>'icon','fields'=>['id_icon','icon','disabled','title','url','component']]);


/*
$teste=$values[1];
  $fp = fopen("teste.txt", "a");
   
  // Escreve "exemplo de escrita" no bloco1.txt
  $escreve = fwrite($fp, $teste);
   
  // Fecha o arquivo
  fclose($fp); 
  */