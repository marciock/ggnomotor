<?php
require_once('../../../vendor/autoload.php');
require_once('../config/PathConfig.php');
header('Content-Type:application/json; charset=utf-8');

$json = file_get_contents('php://input');
$json=utf8_encode($json);
$obj  = json_decode($json);


$post=[$obj->chave,$obj->nome,$obj->senha,$obj->ip];



  //  $post=$_POST;
  

   $service=new Lib\ServiceManager\ServiceManager;


 $service->InsertController(['table'=>'usuarios','fields'=>['id_usuarios','nome','senha','ip'],'insert'=>$post]);

 
/*
$teste=$post[0];
  $fp = fopen("teste.txt", "a");
   
  // Escreve "exemplo de escrita" no bloco1.txt
  $escreve = fwrite($fp, $teste);
   
  // Fecha o arquivo
  fclose($fp); */