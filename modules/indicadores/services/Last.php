<?php
require_once('../../../vendor/autoload.php');
require_once('../config/PathConfig.php');
header('Content-Type:application/json; charset=utf-8');
//use Lib\ServiceManager\SetServer;

    $service=new Lib\ServiceManager\ServiceManager;

$join='ORDER BY id_indicadores DESC LIMIT 1';
   $lista= $service->LastController(['table'=>'indicadores','fields'=>['id_indicadores','titulo','mes','ano','arquivo'],'join'=>$join]);

    $service->ListView($lista);
   



