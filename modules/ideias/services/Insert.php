<?php
require_once('../../../vendor/autoload.php');
require_once('../config/PathConfig.php');
header('Content-Type:application/json; charset=utf-8');
$dados=file_get_contents('php://input');

$d=json_decode($dados);

$data="".date('Y-m-d');
$post=[NULL,$d->chave,$d->nome,$d->titulo,$d->descricao,$data];



  //  $post=$_POST;
  

   $service=new Lib\ServiceManager\ServiceManager;


 $service->InsertController(['table'=>'ideias','fields'=>['id_ideias','chave','nome','titulo','descricao','data'],'insert'=>$post]);

 

/*$teste=$d['chave'];
  $fp = fopen("teste.txt", "a");
   
  // Escreve "exemplo de escrita" no bloco1.txt
  $escreve = fwrite($fp, $teste);
   
  // Fecha o arquivo
  fclose($fp); 
  */