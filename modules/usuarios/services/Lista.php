<?php
require_once('../../../vendor/autoload.php');
require_once('../config/PathConfig.php');

//use Lib\ServiceManager\SetServer;

    $service=new Lib\ServiceManager\ServiceManager;


  $lista= $service->ListController(['table'=>'usuarios','fields'=>['id_usuarios','chave','nome','senha','email']]);

    $service->ListView($lista);
   



