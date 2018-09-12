<?php
require_once('../../../vendor/autoload.php');
require_once('../config/PathConfig.php');

//use Lib\ServiceManager\SetServer;

    $service=new Lib\ServiceManager\ServiceManager;

    $join='ORDER BY data DESC LIMIT 4';
   $lista= $service->LastController(['table'=>'documentos','fields'=>['id_documentos','data','titulo','id_tipo','arquivo','descricao'],'join'=>$join]);

    $service->ListView($lista);
   



