<?php
require_once('../../../vendor/autoload.php');
require_once('../config/PathConfig.php');

//use Lib\ServiceManager\SetServer;

$myGet=$_GET['unidade'];

$myWhere='id_unidade='.$myGet;


    $service=new Lib\ServiceManager\ServiceManager;


    $lista= $service->ListController(['table'=>'noticias','fields'=>['id_noticias','id_unidade','titulo','resumo','descricao','data','imagem'],'where'=>$myWhere,'limit'=>'1']);

    $service->ListView($lista);
   



