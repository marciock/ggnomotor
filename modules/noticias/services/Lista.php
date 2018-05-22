<?php
require_once('../../../vendor/autoload.php');
require_once('../config/PathConfig.php');

//use Lib\ServiceManager\SetServer;

    $service=new Lib\ServiceManager\ServiceManager;


   $lista= $service->ListController(['table'=>'noticias','fields'=>['id_noticias','id_unidade','titulo','resumo','descricao','data','imagem'],'limit'=>'1']);

    $service->ListView($lista);
   



