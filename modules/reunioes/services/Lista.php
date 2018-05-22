<?php
require_once('../../../vendor/autoload.php');
require_once('../config/PathConfig.php');

//use Lib\ServiceManager\SetServer;

    $service=new Lib\ServiceManager\ServiceManager;

    $join='INNER JOIN local  ON (reunioes.id_local=local.id_local)';
   // $lista=$service->ListController(['join'=>$join]);
  $lista= $service->ListController(['table'=>'reunioes',
  'fields'=>['reunioes.id_reunioes','reunioes.assunto','reunioes.id_local','reunioes.data','reunioes.hora_inicial','reunioes.hora_final','reunioes.descricao','reunioes.participantes','local.id_local','local.cidade'],
  'join'=>$join]);

// var_dump($lista);
   $service->ListView($lista);
   

 