<?php
require_once('../../../vendor/autoload.php');
require_once('../config/PathConfig.php');

//use Lib\ServiceManager\SetServer;

    $service=new Lib\ServiceManager\ServiceManager;

    $join='INNER JOIN local  ON (reunioes_comites.id_local=local.id_local) INNER JOIN comites ON (reunioes_comites.id_comite=comites.id_comite)';
   // $lista=$service->ListController(['join'=>$join]);
  $lista= $service->ListController(['table'=>'reunioes_comites','fields'=>['reunioes_comites.id_reunioescomites','reunioes_comites.assunto','reunioes_comites.id_comite','reunioes_comites.id_local','reunioes_comites.data','reunioes_comites.hora_inicial','reunioes_comites.hora_final','reunioes_comites.descricao','reunioes_comites.participantes','local.id_local','local.cidade','comites.id_comite','comites.comite'],'join'=>$join]);

// var_dump($lista);
   $service->ListView($lista);
   

 