<?php
require_once('../../../vendor/autoload.php');
require_once('../config/PathConfig.php');



    $service=new Lib\ServiceManager\ServiceManager;

    $id=$_GET['id'];
    $join='INNER JOIN comites ON (reunioes_comites.id_comite=comites.id_comite) WHERE id_reunioescomites ='.$id;
   

   // $join='INNER JOIN cidades ON (agua.id_cidade=cidades.id_cidade) INNER JOIN servidor ON (agua.id_servidor=servidor.id_servidor) '.$clausules;

    $lista= $service->SearchController(['table'=>'reunioes_comites','fields'=>['reunioes_comites.id_reunioescomites','reunioes_comites.assunto','reunioes_comites.id_comite','reunioes_comites.local','reunioes_comites.data','reunioes_comites.hora_inicial','reunioes_comites.hora_final','reunioes_comites.descricao','reunioes_comites.participantes','comites.id_comite','comites.comite'],'join'=>$join]);

  

    $service->ListView($lista);
   
/*
    $teste=$_GET['id'];
    $fp = fopen("teste.txt", "a");
     
   
    $escreve = fwrite($fp, $teste);
     
  
    fclose($fp); 

*/