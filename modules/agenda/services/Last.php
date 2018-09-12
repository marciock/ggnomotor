<?php
require_once('../../../vendor/autoload.php');
require_once('../config/PathConfig.php');
//header('Content-Type:application/json; charset=utf-8');
//use Lib\ServiceManager\SetServer;

    $service=new Lib\ServiceManager\ServiceManager;

   $join=$join='ORDER BY data DESC LIMIT 5';
  $lista= $service->LastController(['table'=>'reunioes',
  'fields'=>['id_reunioes','assunto','local','data','hora_inicial','hora_final','descricao','participantes'],'join'=>$join]);

// var_dump($lista);
   $service->ListView($lista);
   

 