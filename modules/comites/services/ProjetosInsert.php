<?php
require_once('../../../vendor/autoload.php');
require_once('../config/PathConfig.php');
header('Content-Type:application/json; charset=utf-8');

$dbData="".date('Y-m-d');
$post=[NULL,$_POST['projeto'],$_POST['descricao'],$dbData,$_POST['comite'],$_POST['esperados'],$_POST['obtidos']];

  
$service=new Lib\ServiceManager\ServiceManager;


 $service->InsertController(['table'=>'projetos','fields'=>['id_projetos','projeto','descricao','data','id_comites','esperados','obtidos'],'insert'=>$post]);

 


/*$teste=$post[1];
  $fp = fopen("teste.txt", "a");
   
  // Escreve "exemplo de escrita" no bloco1.txt
  $escreve = fwrite($fp, $teste);
   
  // Fecha o arquivo
  fclose($fp);*/