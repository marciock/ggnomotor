<?php
require_once('../../../vendor/autoload.php');
require_once('../config/PathConfig.php');

//use Lib\ServiceManager\SetServer;

    $service=new Lib\ServiceManager\ServiceManager;


  $lista= $service->ListController(['table'=>'ideias','fields'=>['id_ideias','chave','nome','titulo','descricao']]);

    $service->ListView($lista);
   



