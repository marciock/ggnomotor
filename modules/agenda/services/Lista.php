<?php
require_once('../../../vendor/autoload.php');
require_once('../config/PathConfig.php');
//header('Content-Type:application/json; charset=utf-8');
//use Lib\ServiceManager\SetServer;

    $service=new Lib\ServiceManager\ServiceManager;

   
  $lista= $service->ListController(['table'=>'reunioes',
  'fields'=>['id_reunioes','assunto','local','data','hora_inicial','hora_final','descricao','participantes']]);

// var_dump($lista);
   $service->ListView($lista);
   

 