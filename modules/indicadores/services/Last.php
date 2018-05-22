<?php
require_once('../../../vendor/autoload.php');
require_once('../config/PathConfig.php');

//use Lib\ServiceManager\SetServer;

    $service=new Lib\ServiceManager\ServiceManager;


   $lista= $service->ListController(['table'=>'indicadores','fields'=>['id_indicadores','titulo','mes','ano','arquivo'],'order'=>'DESC']);

    $service->ListView($lista);
   



