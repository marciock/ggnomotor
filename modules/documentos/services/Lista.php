<?php
require_once('../../../vendor/autoload.php');
require_once('../config/PathConfig.php');

//use Lib\ServiceManager\SetServer;

    $service=new Lib\ServiceManager\ServiceManager;

  //  $join='INNER JOIN setor  ON (documentos.id_setor=setor.id_setor)';
   $lista= $service->ListController(['table'=>'documentos','fields'=>['id_documentos','data','titulo','id_setor','tipo','chave','arquivo','descricao']]);

    $service->ListView($lista);
   



