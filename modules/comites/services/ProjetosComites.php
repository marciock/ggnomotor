<?php
require_once('../../../vendor/autoload.php');
require_once('../config/PathConfig.php');



    $service=new Lib\ServiceManager\ServiceManager;

    $id=$_GET['id'];

   

    $join='INNER JOIN comites ON (projetos.id_comites=comites.id_comite) WHERE projetos.id_comites='.$id;

    $lista= $service->ProjetosListController(['table'=>'projetos','fields'=>['projetos.id_projetos','projetos.projeto','projetos.id_comites','projetos.descricao','comites.id_comite','comites.comite'],'join'=>$join]);
 
  

    $service->ListView($lista);
   

