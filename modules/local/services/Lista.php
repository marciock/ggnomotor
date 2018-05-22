<?php
require_once('../../../vendor/autoload.php');
require_once('../config/PathConfig.php');

//use Lib\ServiceManager\SetServer;

    $service=new Lib\ServiceManager\ServiceManager;


  $lista=$service->ListController(['table'=>'local','fields'=>['id_local','cidade']]);

 //var_dump($lista);

 
   $service->ListView($lista);



 