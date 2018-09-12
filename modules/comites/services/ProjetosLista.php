<?php
require_once('../../../vendor/autoload.php');
require_once('../config/PathConfig.php');

//use Lib\ServiceManager\SetServer;

    $service=new Lib\ServiceManager\ServiceManager;

    $join='INNER JOIN comites ON (projetos.id_comites=comites.id_comite)';

   $lista= $service->ProjetosListController(['table'=>'projetos','fields'=>['projetos.id_projetos','projetos.projeto,projetos.id_comites','projetos.descricao','comites.id_comite','comites.comite'],'join'=>$join]);

    $service->ListView($lista);
   



