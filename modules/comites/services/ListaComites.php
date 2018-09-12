<?php
require_once('../../../vendor/autoload.php');
require_once('../config/PathConfig.php');



    $service=new Lib\ServiceManager\ServiceManager;

    $id=$_GET['id'];

   $join='INNER JOIN usuarios ON (comites.representante=usuarios.id_usuarios)';

   

    $lista= $service->SearchController(['table'=>'comites','fields'=>['comites.id_comite','comites.comite','comites.objetivos','comites.representante','usuarios.id_usuarios','usuarios.nome'],'join'=>$join]);

  

    $service->ListView($lista);
   
/*
    $teste=$_GET['id'];
    $fp = fopen("teste.txt", "a");
     
   
    $escreve = fwrite($fp, $teste);
     
  
    fclose($fp); 

*/