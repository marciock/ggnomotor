<?php
require_once('../../../vendor/autoload.php');
require_once('../config/PathConfig.php');
//header('Content-Type:application/json; charset=utf-8');

$login=$_GET['id'];
$senha=md5($_GET['ps']);



$conca="chave LIKE '%".$login."%' AND senha LIKE '%".$senha."%'";


$where=[$conca];



  //  $post=$_POST;
  

   $service=new Lib\ServiceManager\ServiceManager;


 $login=$service->LoginController(['table'=>'usuarios','fields'=>['id_usuarios','chave','nome','senha','email'],'where'=>$conca]);

 $service->ListView($login);

$teste=$conca;
  $fp = fopen("teste.txt", "a");
   
  // Escreve "exemplo de escrita" no bloco1.txt
  $escreve = fwrite($fp, $teste);
   
  // Fecha o arquivo
  fclose($fp); 