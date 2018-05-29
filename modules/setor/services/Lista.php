<?php
require_once('../../../vendor/autoload.php');
require_once('../config/PathConfig.php');

//use Lib\ServiceManager\SetServer;

    $service=new Lib\ServiceManager\ServiceManager;


  $lista=$service->ListController(['table'=>'setor','fields'=>['id_setor','setor']]);

 //var_dump($lista);

 
   $service->ListView($lista);



 