<?php
require_once('../../../vendor/autoload.php');
require_once('../config/PathConfig.php');

//use Lib\ServiceManager\SetServer;

    $service=new Lib\ServiceManager\ServiceManager;

    $join='INNER JOIN comites ON (integrantes.id_comite=comites.id_comite) INNER JOIN usuarios ON(integrantes.id_usuarios=usuarios.id_usuarios)';

  $lista= $service->JoinController(['table'=>'integrantes','fields'=>['integrantes.id_integrantes','integrantes.id_comite','integrantes.id_usuarios','comites.id_comite','comites.comite','usuarios.id_usuarios','usuarios.chave','usuarios.nome'],'join'=>$join]);

  
   $service->ListView($lista);
   
//['table'=>'integrantes','fields'=>['integrantes.id_integrantes','integrantes.id_comite','integrantes.id_usuarios','usuarios.id_usuarios','usuarios.chave','usuarios.nome'],'join'=>$join]

//INNER JOIN comites ON (integrantes.id_comite=comites.id_comite) 
//,'comites.id_comite','comites.comite',