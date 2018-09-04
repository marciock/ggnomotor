<?php
require_once('../../../vendor/autoload.php');
require_once('../config/PathConfig.php');



    $service=new Lib\ServiceManager\ServiceManager;

    $id=$_GET['id'];
    $join='INNER JOIN unidades ON (noticias.id_unidade=unidades.id_unidade) WHERE id_noticias ='.$id;
   

   // $join='INNER JOIN cidades ON (agua.id_cidade=cidades.id_cidade) INNER JOIN servidor ON (agua.id_servidor=servidor.id_servidor) '.$clausules;

    $lista= $service->SearchController(['table'=>'noticias','fields'=>['noticias.id_noticias','noticias.id_unidade','noticias.resumo','noticias.descricao','noticias.data','noticias.imagem1','noticias.imagem2','noticias.imagem3','noticias.imagem4','noticias.imagem5','unidades.id_unidade','unidades.unidade'],'join'=>$join]);

  

    $service->ListView($lista);
   
/*
    $teste=$_GET['id'];#/noticias
    $fp = fopen("teste.txt", "a");
     
   
    $escreve = fwrite($fp, $teste);
     
  
    fclose($fp); 

*/
/*
,'noticias.imagem1','noticias.imagem2','noticias.imagem3','noticias.imagem4','noticias.imagem5'
*/