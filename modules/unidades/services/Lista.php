<?php
require_once('../../../vendor/autoload.php');
require_once('../config/PathConfig.php');

//use Lib\ServiceManager\SetServer;

    $service=new Lib\ServiceManager\ServiceManager;


   $lista= $service->ListController(['table'=>'unidades','fields'=>['id_unidade','unidade']]);

    $service->ListView($lista);
   



