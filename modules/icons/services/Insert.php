<?php
require_once('../../../vendor/autoload.php');
require_once('../config/PathConfig.php');
header('Content-Type:application/json; charset=utf-8');


$post=[NULL,$_POST['chave'],$_POST['nome'],md5($_POST['senha']),$_POST['email']];



  //  $post=$_POST;
  

   $service=new Lib\ServiceManager\ServiceManager;


 $service->InsertController(['table'=>'usuarios','fields'=>['id_usuarios','chave','nome','senha','email'],'insert'=>$post]);

 

$teste=$_POST['chave'];
  $fp = fopen("teste.txt", "a");
   
  // Escreve "exemplo de escrita" no bloco1.txt
  $escreve = fwrite($fp, $teste);
   
  // Fecha o arquivo
  fclose($fp); 