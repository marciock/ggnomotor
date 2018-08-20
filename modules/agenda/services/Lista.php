<?php
require_once('../../../vendor/autoload.php');
require_once('../config/PathConfig.php');

//use Lib\ServiceManager\SetServer;

    $service=new Lib\ServiceManager\ServiceManager;

   // $join='INNER JOIN local  ON (reunioes.id_local=local.id_local)';
   // $lista=$service->ListController(['join'=>$join]);
  $lista= $service->ListController(['table'=>'reunioes',
  'fields'=>['id_reunioes','assunto','local','data','hora_inicial','hora_final','descricao','participantes']]);

// var_dump($lista);
   $service->ListView($lista);
   

 