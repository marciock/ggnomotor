<?php
require_once('../../../vendor/autoload.php');
require_once('../config/PathConfig.php');



    $service=new Lib\ServiceManager\ServiceManager;

    $where='id_reunioes ='.$_GET['id'];

   

   // $join='INNER JOIN cidades ON (agua.id_cidade=cidades.id_cidade) INNER JOIN servidor ON (agua.id_servidor=servidor.id_servidor) '.$clausules;

    $lista= $service->SearchController(['table'=>'reunioes','fields'=>['id_reunioes','assunto','local','data','hora_inicial','hora_final','descricao','participantes'],'where'=>$where]);

  
    $service->ListView($lista);
    

