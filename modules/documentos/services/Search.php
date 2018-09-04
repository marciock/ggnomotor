<?php
require_once('../../../vendor/autoload.php');
require_once('../config/PathConfig.php');



    $service=new Lib\ServiceManager\ServiceManager;

  //  $clausules='id_documentos ='.$_GET['id'];

   $join='INNER JOIN tipodoc ON (documentos.id_tipo=tipodoc.id_tipo) WHERE id_documentos ='.$_GET['id'];

   // $join='INNER JOIN cidades ON (agua.id_cidade=cidades.id_cidade) INNER JOIN servidor ON (agua.id_servidor=servidor.id_servidor) '.$clausules;

    $lista= $service->SearchController(['table'=>'documentos','fields'=>['documentos.id_documentos','documentos.data','documentos.titulo','documentos.id_tipo','documentos.arquivo','documentos.descricao','tipodoc.id_tipo','tipodoc.tipo'],'join'=>$join]);

  

    $service->ListView($lista);
   

  /*  $teste=$_GET['id'];
    $fp = fopen("teste.txt", "a");
     
   
    $escreve = fwrite($fp, $teste);
     
  
    fclose($fp); 

*/