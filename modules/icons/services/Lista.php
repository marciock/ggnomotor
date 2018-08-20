<?php
require_once('../../../vendor/autoload.php');
require_once('../config/PathConfig.php');

//use Lib\ServiceManager\SetServer;

    $service=new Lib\ServiceManager\ServiceManager;


  $lista= $service->ListController(['table'=>'icon','fields'=>['id_icon','icon','disabled','title','url','component']]);

    $service->ListView($lista);
   



