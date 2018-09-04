<?php
require_once('../../../vendor/autoload.php');
require_once('../config/PathConfig.php');

//use Lib\ServiceManager\SetServer;

    $service=new Lib\ServiceManager\ServiceManager;


   $lista= $service->ListController(['table'=>'noticias','fields'=>['id_noticias','id_unidade','titulo','resumo','descricao','data','imagem1','imagem2','imagem3','imagem4','imagem5']]);

    $service->ListView($lista);
   



