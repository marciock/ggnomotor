<?php
require_once('../../../vendor/autoload.php');
require_once('../config/PathConfig.php');

//use Lib\ServiceManager\SetServer;

    $service=new Lib\ServiceManager\ServiceManager;


   $lista= $service->LastController(['table'=>'indicadores','fields'=>['id_indicadores','titulo','mes','ano','arquivo'],'order'=>'DESC','limit'=>'1']);

    $service->ListView($lista);
   



