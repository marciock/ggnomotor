<?php
require_once('../../../vendor/autoload.php');
require_once('../config/PathConfig.php');
header('Content-Type:application/json; charset=utf-8');

ini_set('default_charset','UTF-8');

$json = file_get_contents('php://input');
$json=utf8_encode($json);
$obj  = json_decode($json);

$data=date('Y-m-d'.strtotime($obj->data));
$inicio=date('H:i:s',strtotime($obj->inicio));
$final=date('H:i:s',strtotime($obj->termino));
$post=[NULL,$obj->assunto,$obj->local,$data,$inicio,$final,$obj->descricao,$obj->participantes];



  //  $post=$_POST;
  

   $service=new Lib\ServiceManager\ServiceManager;


 $service->InsertController(['table'=>'reunioes','fields'=>['id_reunioes','assunto','id_local','data','hora_inicial','hora_final', 'descricao','participantes'],'insert'=>$post]);

 

$teste=$inicio;
  $fp = fopen("teste.txt", "a");
   
  // Escreve "exemplo de escrita" no bloco1.txt
  $escreve = fwrite($fp, $teste);
   
  // Fecha o arquivo
  fclose($fp); 