<?php
require_once('../../../vendor/autoload.php');
require_once('../config/PathConfig.php');



    $service=new Lib\ServiceManager\ServiceManager;

    $id=$_GET['id'];
    $join='INNER JOIN comites ON (integrantes.id_comite=comites.id_comite) INNER JOIN usuarios ON(integrantes.id_usuarios=usuarios.id_usuarios) WHERE integrantes.id_usuarios='.$id;
   
    $lista= $service->JoinController(['table'=>'integrantes','fields'=>['integrantes.id_integrantes','integrantes.id_comite','integrantes.id_usuarios','comites.id_comite','comites.comite','usuarios.id_usuarios','usuarios.chave','usuarios.nome','usuarios.email','usuarios.descricao'],'join'=>$join]);

  
   $service->ListView($lista);
   
   
/*
    $teste=$_GET['id'];
    $fp = fopen("teste.txt", "a");
     
   
    $escreve = fwrite($fp, $teste);
     
  
    fclose($fp); 
*/

