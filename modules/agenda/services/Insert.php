<?php
require_once('../../../vendor/autoload.php');
require_once('../config/PathConfig.php');
//header('Content-Type:application/json; charset=utf-8');

/*ini_set('default_charset','UTF-8');

$json = file_get_contents('php://input');
$json=utf8_encode($json);
$obj  = json_decode($json);*/

$data=$_POST['data'];
$inicio=date('H:i:s',strtotime($_POST['inicio']));
$final=date('H:i:s',strtotime($_POST['termino']));
$post=[NULL,$_POST['assunto'],$_POST['local'],$data,$inicio,$final,$_POST['descricao'],$_POST['participantes']];



  //  $post=$_POST;
  

   $service=new Lib\ServiceManager\ServiceManager;


$service->InsertController(['table'=>'reunioes','fields'=>['id_reunioes','assunto','local','data','hora_inicial','hora_final','descricao','participantes'],'insert'=>$post]);



$teste=$_POST['local'];
  $fp = fopen("teste.txt", "a");
   
  // Escreve "exemplo de escrita" no bloco1.txt
  $escreve = fwrite($fp, $teste);
   
  // Fecha o arquivo
  fclose($fp); 

  return var_dump($post);