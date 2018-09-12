<?php
require_once('../../../vendor/autoload.php');
require_once('../config/PathConfig.php');

//use Lib\ServiceManager\SetServer;

$myGet=$_GET['unidade'];

$join='WHERE id_unidade='.$myGet.' ORDER BY id_noticias DESC LIMIT 1';


    $service=new Lib\ServiceManager\ServiceManager;


    $lista= $service->SearchController(['table'=>'noticias','fields'=>['id_noticias','id_unidade','titulo','resumo','descricao','data','imagem1','imagem2','imagem3','imagem4','imagem5'],'join'=>$join]);

    $service->ListView($lista);
   



