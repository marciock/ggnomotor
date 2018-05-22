<?php
require_once('../../../vendor/autoload.php');
require_once('../config/PathConfig.php');

//use Lib\ServiceManager\SetServer;

    $service=new Lib\ServiceManager\ServiceManager;


   $lista= $service->ListController(['table'=>'documentos','fields'=>['id_documentos','titulo','chave','arquivo']]);

    $service->ListView($lista);
   



