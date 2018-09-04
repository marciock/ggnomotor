<?php
require_once('../../../vendor/autoload.php');
require_once('../config/PathConfig.php');



$data="".date('Y-m-d');
$post=[NULL,$_POST['chave'],$_POST['nome'],$_POST['titulo'],$_POST['descricao'],$data];



  //  $post=$_POST;
  

   $service=new Lib\ServiceManager\ServiceManager;


 $service->InsertController(['table'=>'ideias','fields'=>['id_ideias','chave','nome','titulo','descricao'],'insert'=>$post]);

 
/*
$teste=$post[0];
  $fp = fopen("teste.txt", "a");
   
  // Escreve "exemplo de escrita" no bloco1.txt
  $escreve = fwrite($fp, $teste);
   
  // Fecha o arquivo
  fclose($fp); */