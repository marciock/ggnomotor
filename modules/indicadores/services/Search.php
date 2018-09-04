<?php
require_once('../../../vendor/autoload.php');
require_once('../config/PathConfig.php');



    $service=new Lib\ServiceManager\ServiceManager;

    $clausules='id_indicadores ='.$_GET['id'];

   

   // $join='INNER JOIN cidades ON (agua.id_cidade=cidades.id_cidade) INNER JOIN servidor ON (agua.id_servidor=servidor.id_servidor) '.$clausules;

    $lista= $service->SearchController(['table'=>'indicadores','fields'=>['id_indicadores','titulo','descricao','mes','ano','arquivo'],'where'=>$clausules]);

  

    $service->ListView($lista);
   
/*
    $teste=$_GET['id'];
    $fp = fopen("teste.txt", "a");
     
   
    $escreve = fwrite($fp, $teste);
     
  
    fclose($fp); 

*/